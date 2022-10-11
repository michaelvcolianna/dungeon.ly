@component('mail::message')
{{ __('You\'ve been invited to join the :team game!', ['team' => $invitation->team->name]) }}

{{ __('You may accept this invitation by clicking the button below and logging in:') }}

@component('mail::button', ['url' => $acceptUrl])
{{ __('Accept Invitation') }}
@endcomponent


@if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::registration()))
{{ __('If you don\'t have an account, click the register link on the login page. After creating an account, you will be automatically added to the team.') }}
@endif

{{ __('If you didn\'t expect to receive an invitation to this game, you may discard this email.') }}
@endcomponent
