@component('mail::message')
    # Mail reçue de la part de

    -{{$contact->prenomC}}
    -{{$contact->nomC}}
    -{{$contact->message}}
    -{{$contact->email}}


    Thanks,
    {{ config('app.name') }}
@endcomponent