<?php

namespace App\Actions\Fortify;

use Illuminate\Http\Request;

class UserLoggedIn
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @param  callable  $next
     * @return mixed
     */
    public function handle(Request $request, callable $next)
    {
        // Go to intended URL if registered & had invitation
        if(session()->has('teamInvitation') && session()->has('url.intended')) {
            return redirect()->intended();
        }

        return $next($request);
    }
}
