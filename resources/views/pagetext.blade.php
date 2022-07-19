<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- OG tags --}}
    <meta property="og:title" content={{ $page_text->title . ' | ' .  config('app.name', 'Ho Wan Loi') }}/>
    <meta property="og:description" content="Alle ingrediënten zijn van topkwaliteit en zijn vers bereid. Het gebruik van kruiden is erg persoonsgebonden. U zult de verfijnde smaak van de kok vast proeven in de gerechten." />
    <meta property="og:image" content="/img/header.jpeg" />
    <title>{{ $page_text->title . ' | ' .  config('app.name', 'Ho Wan Loi') }}</title>
</head>

<body class="bg-[url('/img/bg_pattern.svg')] bg-center bg-repeat-y">
    @include('layouts.navigation')

    <main class="max-w-2xl mt-12 mx-auto text-center min-h-screen">
        <h1 class="text-4xl text-red-500 font-medium">{!! $page_text->title !!}</h1>
        @if ($page_text)
            <section class="mt-4 mb-12 text-left prose px-4">
                {!! $page_text->body !!}
            </section>
        @endif
    </main>

    @include('layouts.footer')
</body>

</html>
