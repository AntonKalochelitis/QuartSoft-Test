@component('mail::message')
    # Confirm your email

    Your registration is complete! Visit this link to confirm an email:<br>

    @component('mail::button', ['url' => $url])
        Confirm email
    @endcomponent

    If it wasn't you, ignore this message or contact us on social!

    Sincerely, {{ env('APP_SUPPORT_ADMIN', '') }}
    {{ env('APP_NAME', '') }}
@endcomponent
