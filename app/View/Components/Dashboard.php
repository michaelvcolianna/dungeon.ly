<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dashboard extends Component
{
    /**
     * Check if user owns the current team.
     *
     * @return boolean
     */
    public function userOwnsCurrentTeam()
    {
        $user = auth()->user();

        return $user->ownsTeam($user->currentTeam);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard');
    }
}
