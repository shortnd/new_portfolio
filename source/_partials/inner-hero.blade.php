<div id="hero" class="bg-rouge h-100 relative py-32">
  <section class="relative container pin mx-auto text-center align-middle">
      <h1 class="text-5xl font-bold text-white uppercase">
        @if ($page->title)
          {{$page->title}}
        @else
          @yield('page-title')
        @endif
      </h1>
    @if ($page->subtitle)
      <h2 class="text-2xl font-semibold text-grey-lightest">{{$page->subtitle}}</h2>
    @else
      <h2 class="text-2xl font-semibold text-grey-lightest">@yield('page-subtitle')</h2>
    @endif
    @if ($page->author && $page->date)
        <p class="mt-2 font-semibold text-grey-light">Posted by {{$page->author}} on {{$page->date}}</p>
    @endif
  </section>
</div>