import './bootstrap'

import Alpine from 'alpinejs'
import Hammer from 'hammerjs'

window.Alpine = Alpine

Alpine.start()

/**
 * Update the location hash
 *
 * @param  string  hash
 * @return void
 */
const updateHash = (hash) => {
  hash ??= location.pathname + location.search

  if(history.pushState) {
    history.pushState(null, null, hash)
  }
  else {
    location.hash = hash
  }
}

/**
 * Move between the groups of the character sheet
 *
 * @param  int  direction
 * @return void
 */
const navigateGroup = (direction) => {
  const groups = Array.from(document.querySelectorAll('[data-group-label]')).map(el => {
    return `#${el.id}`
  })
  const oldIdx = groups.indexOf(location.hash)

  // Ensure the new index is within range
  let newIdx = parseInt(oldIdx) + parseInt(direction)
  if(newIdx > groups.length - 1) {
    newIdx = 0
  }
  if(newIdx < 0) {
    newIdx = groups.length - 1
  }

  const newGroup = groups[newIdx]

  // Update the URL
  updateHash(newGroup)

  // Scroll the area into view
  document.querySelector(newGroup).scrollIntoView();
}

/**
 * Clear the navigation and scroll to top
 *
 * @return void
 */
const clearNavigation = () => {
  updateHash(null)
  window.scrollTo(0, 0)
}

/**
 * Activate the fast field finder
 *
 * @return void
 */
const activateFinder = () => {
  clearNavigation()

  setTimeout(() => {
    let finder = document.querySelector('#finder')

    finder.focus()
    finder.select()
  }, 195)
}

const finder = document.querySelector('#finder')

if(finder) {
  const fields = document.querySelectorAll('[data-field-label]')
  const body = document.querySelector('main')
  const finderFields = document.querySelector('#finder-fields')
  const hammertime = new Hammer(body)

  /**
   * Handle swipe events for group navigation
   */
  hammertime.on('swipe', (event) => {
    document.activeElement.blur()

    let direction = event.direction === 2
      ? -1
      : 1

    navigateGroup(direction)
  })

  /**
   * Handle press events for activating the fast field finder
   */
  hammertime.on('press', (event) => {
    activateFinder()
  })

  /**
   * Handle keyup events
   */
  document.onkeyup = (event) => {
    const formEls = ['input', 'textarea']

    event ??= window.event

    // Only take action when outside an input
    if(!formEls.includes(event.target.tagName.toLowerCase())) {
      // Focus on the fast field finder
      if(event.key === '=') {
        activateFinder()
      }

      if(event.key === '[') {
        navigateGroup(-1)
      }

      if(event.key === ']') {
        navigateGroup(1)
      }

      if(event.key === '\\') {
        clearNavigation()
      }
    }
  }

  /**
   * Handle finder field input
   */
  finder.onchange = () => {
    const value = finder.value
    const option = Array.prototype.find.call(finder.list.options, option => {
      return option.value === value
    })

    // If the change resulted in a chosen option, scroll to it, then clear the
    // input field and blur it
    if(option) {
      document.querySelector('[data-field-label="' + option.value + '"]').scrollIntoView()

      finder.value = null
      finder.blur()
    }
  }

  /**
   * Build fast finder field listing
   */
  fields.forEach(field => {
    // Self-inflicted nonsense for making the datalist options
    const label = field.dataset.fieldLabel;

    // Create the option element
    const option = document.createElement('option')
    option.value = label

    // Add the element to the datalist
    finderFields.appendChild(option)
  })
}

/**
 * Scroll to top after roll
 */
Livewire.on('roll', () => {
  window.scrollTo(0, 0)
})
