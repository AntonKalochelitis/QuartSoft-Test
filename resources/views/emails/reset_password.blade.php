@component('mail::message')
    # Reset Password

    @component('mail::button', ['url' => $url, 'color' => 'success'])
        Reset Password
    @endcomponent

    Sincerely, {{ env('APP_SUPPORT_ADMIN', '') }}
    {{ env('APP_NAME', '') }}
@endcomponent
