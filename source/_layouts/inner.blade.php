<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @if ($page->title)
        {{$page->title}} | coconnell.me
        @else
        @yield('Page-Title') | coconnell.me
        @endif
    </title>
    <meta name="description" content="@yield('page-description', '')">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <style>
        #skip {
            left: -64rem;
            top: 4rem;
            z-index: 10;
            transition: all .3s ease;
        }

        #skip:focus {
            left: 4rem;
        }
    </style>
</head>

<body class="flex flex-col h-full">
    <div id="body" class="flex-1">
        @include('_partials.header')
        @include('_partials.inner-hero')
        <br>
        <br>
        <main id="main" class="container mx-auto w-1/2">
            @yield('body')
        </main>
    </div>
    @include('_partials.footer')
</body>

</html>