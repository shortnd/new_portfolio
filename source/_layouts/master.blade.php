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

  <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ $page->getUrl() }}" />
  <meta property="og:description" content="{{ $page->siteDescription }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.2/dist/alpine.js" defer></script>
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
  <div id="body" class="flex-1 font-sans">
    @include('_partials.header')
    @include('_partials.hero')
    @yield('body')
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
</body>

</html>
