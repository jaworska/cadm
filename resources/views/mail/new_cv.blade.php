@component('mail::message')
    Nadawca: {{ $cv -> name }} {{ $cv -> surname }} <{{ $cv -> email }}> Numer telefonu: {{ $cv -> phone }}
    Stanowisko: {{ $cv -> offer -> title .' ('. trans('pages.career.location.'.$cv -> offer-> location).')' }}
    Zgoda 1: {{ $cv -> term_1?'Consented':'Not Consented' }}
    Zgoda 2: {{ $cv -> term_2?'Consented':'Not Consented' }}
    Zgoda 3: {{ $cv -> term_3?'Consented':'Not Consented' }}
@endcomponent