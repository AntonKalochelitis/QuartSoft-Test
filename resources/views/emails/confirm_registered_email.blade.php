@component('mail::message')
    # Confirm your email
    <p>
        Your registration is complete! Visit this link to confirm an email:<br>
        <b><a href="{{$url}}">Confirm email</a></b>
    </p>

    <p>
        If it wasn't you, ignore this message or contact us on social!
    </p>


    Sincerely,<br>
    {{ config('app.name') }}
@endcomponent
