<!DOCTYPE html>
<html lang="en" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
            coconnell.me
        </title>
        <meta name="description" content="Collin O'Connell Full Stack Developer focusing on Laravel, Vue, Bootstrap, Tailwindcss, Accesibility and SEO.">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>
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
            @include('_partials.hero')
            <div class="container mx-auto @foreach($page->classes as $class) {{$class}}@endforeach">
                @yield('body')
            </div>
        </div>
        @include('_partials.footer')
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
    </body>
</html>
