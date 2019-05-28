@component('mail::message')
    # Nowe CV
    Imię: {{ $cv -> name }}
    Telefon: {{ $cv -> phone }}
    Mail: {{ $cv -> email }}
    Zgoda 1: {{ $cv -> term_1 }}
    Zgoda 2: {{ $cv -> term_2 }}
    Zgoda 3: {{ $cv -> term_3 }}
@endcomponent