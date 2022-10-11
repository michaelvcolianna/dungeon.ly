<?php

namespace App\Http\Middleware;

use App\Models\TeamInvitation;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // See if valid team invite
        if($request->hasValidSignature() && $request->routeIs('team-invitations.accept'))
        {
            // Necessary values
            $invitationId = $request->route('invitation');
            $teamInvitation = TeamInvitation::query()->find($invitationId);
            $teamName = $teamInvitation->team->name ?? null;

            if($teamName)
            {
                // Store this to prevent email confirmation
                $request->session()->put('teamInvitation', $teamName);
            }
            else
            {
                // Handle an invalid invitation
                $request->session()->put('removeUrlIntended', true);
                $request->session()->flash('status', 'This invitation is not valid.');
            }
        }

        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
