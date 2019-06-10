@component('mail::message')
    #Dane:
    Nadawca: {{ $cv -> name }} {{ $cv -> surname }} <{{ $cv -> email }}> Numer telefonu: {{ $cv -> phone }}

    Stanowisko: {{ $cv -> type .' ('.$cv ->location.')' }}

    Zgoda 1: {{ $cv -> term_1?'Consented':'Not Consented' }}

    Zgoda 2: {{ $cv -> term_2?'Consented':'Not Consented' }}

@endcomponent