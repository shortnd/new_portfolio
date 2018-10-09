@extends('_layouts.master')

@section('body')
<a href="#main" id="skip" class="no-underline shadow-lg rounded text-gold bg-rouge fixed px-2 py-4" tabindex="0">SKIP TO CONTENT</a>
<header class="bg-black text-white sticky">
  <nav class="container px-2 py-4 clearfix mx-auto">
    <a class="text-right text-2xl text-white no-underline" href="/">coconnell.com</a>
    <ul class="float-right list-reset">
      <li class="inline-block">
        <a class="block text-white no-underline px-2 uppercase hover:text-gold focus:text-gold" href="#">About</a>
      </li>
      <li class="inline-block">
        <a class="block text-white no-underline px-2 uppercase hover:text-gold focus:text-gold" href="#">Projects</a>
      </li>
      <li class="inline-block">
        <a href="/blog" class="block text-white no-underline px-2 uppercase hover:text-gold focus:text-gold">Blog</a>
      </li>
      <li class="inline-block">
        <a href="#" class="block text-white no-underline px-2 uppercase hover:text-gold focus:text-gold">Contact</a>
      </li>
    </ul>
  </nav>
</header>
<div id="hero" class="bg-rouge h-100 relative py-32">
  <section class="relative container pin mx-auto text-center align-middle">
    <h1 class="text-5xl font-bold text-white uppercase">Collin O'Connell</h1>
    <h2 class="text-2xl font-semibold text-grey-lightest uppercase">Full Stack Developer</h2>
    <p class="text-white mt-6 text-xl">
      Coding, Laravel, Vue, CSS, Accessibility, SEO and <a class="text-gold font-bold" href="//www.detcityfc.com" rel="noreferrer" target="_blank">#DCTID</a>
    </p>
  </section>
</div>
<main id="main" class="mt-16 w-4/5 container mx-auto font-serif text-grey-darkest">
  <p class="w-1/2 mx-auto mb-10 text-lg">
    Thanks for stopping by if you would like to see some of my work check out my <a class="text-rouge font-medium font-sans" href="#">projects</a> or look at what I'm learning right now in my <a class="text-rouge font-medium font-sans" href="#">blog</a>.
  </p>
  <p class="w-1/2 mx-auto mb-10 text-lg">
    If you would like to talk to me feel free to <a class="text-rouge font-medium font-sans" href="#">contact me</a>.
  </p>
</main>
@endsection
