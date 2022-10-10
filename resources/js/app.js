import './bootstrap'

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

/**
 * Capitalize the first letters of words in a string
 *
 * @param  string  string
 * @return string
 */
const capitalize = (string) => {
  return (string + '').replace(/^([a-z])|\s+([a-z])/g, ($1) => {
    return $1.toUpperCase()
  })
}

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
  const currentId = location.hash.replace('#group-', '')
  const currentIdx = groups.indexOf(currentId)

  // Ensure the new index is within range
  let newIdx = parseInt(currentIdx) + parseInt(direction)
  if(newIdx > groups.length - 1) {
    newIdx = 0
  }
  if(newIdx < 0) {
    newIdx = groups.length - 1
  }

  const newId = `#group-${groups[newIdx]}`

  // Update the URL
  updateHash(newId)

  // Scroll the area into view
  document.querySelector(newId).scrollIntoView();
}

if(typeof groups !== 'undefined') {
  const finder = document.querySelector('#finder')
  const finderFields = document.querySelector('#finder-fields')

  /**
   * Handle keyup events
   */
  document.onkeyup = (event) => {
    const formEls = ['input', 'textarea']

    event ??= window.event

    // Only take action when outside an input
    if(!formEls.includes(event.target.tagName.toLowerCase())) {
      // Focus on the fast field finder
      if(event.key === '/') {
        finder.focus()
        finder.select()

        // @todo Is this necessary?
        updateHash(null)
      }

      if(event.key === '[') {
        navigateGroup(-1)
      }

      if(event.key === ']') {
        navigateGroup(1)
      }

      if(event.key === '\\') {
        updateHash(null)
        window.scrollTo(0, 0)
      }
    }
  }

  /**
   * Build fast finder field listing
   */
  groups.forEach(group => {
    document.querySelectorAll('[id^="' + group + '-"]').forEach(el => {
      // Self-inflicted nonsense for making the datalist options
      const id = el.getAttribute('id')
      const parts = id.split('-')
      const group = parts[0].replaceAll('_', ' ')
      const name = parts[1].replaceAll('_', ' ')
      const field = `${capitalize(name)} (${capitalize(group)})`

      // Create the option element
      const option = document.createElement('option')
      option.value = field
      option.dataset.field = id

      // Add the element to the datalist
      finderFields.appendChild(option)
    })
  })

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
      document.querySelector('#' + option.dataset.field).scrollIntoView()
      finder.value = null
      finder.blur()
    }
  }
}
