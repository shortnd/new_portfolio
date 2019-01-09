<!DOCTYPE html>
<html lang="en" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
            coconnell.me
        </title>
        <meta name="description" content="{{ $page->meta_description or $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>

        @if ($page->production)
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132063701-1"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-132063701-1');
            </script>
        @endif
    </head>
    <body class="flex flex-col h-full">
        <div id="body" class="flex-1">
            @include('_partials.header')
            @include('_partials.hero')
            <div class="container mx-auto @foreach($page->classes as $class) {{$class}}@endforeach">
                @yield('body')
            </div>
        </div>
        @include('_partials.footer')
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script>
            if (window.netlifyIdentity) {
              window.netlifyIdentity.on("init", user => {
                if (!user) {
                  window.netlifyIdentity.on("login", () => {
                    document.location.href = "/admin/";
                  });
                }
              });
            }
          </script>
          <script type="text/javascript">
            var _userway_config = {
            // uncomment the following line to override default position
            // position: '3',
            // uncomment the following line to override default size (values: small, large)
            // size: 'large', 
            // uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)
            // language: null,
            // uncomment the following line to override color set via widget
            // color: 'null', 
            // uncomment the following line to override type set via widget(1=man, 2=chair, 3=eye)
            // type: 'null', 
            account: 'PIkwlki1i7'
            };
            </script>
            <script type="text/javascript" src="https://cdn.userway.org/widget.js"></script>
    </body>
</html>
