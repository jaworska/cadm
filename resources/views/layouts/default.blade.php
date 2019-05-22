<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body class="m-auto" >
<div class="d-flex h-100 mx-auto flex-column">
    <header class="mb-auto">
        @include('partials.navigation')
    </header>
    <main>
        @yield('content')
    </main>

    <footer class="mt-auto">
        @include('partials.footer')
    </footer>
</div>
@include('partials.scripts')
</body>
</html>
