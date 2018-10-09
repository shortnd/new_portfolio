<div class="container mx-auto">
    @if ($page->showPosts)
      @forelse ($blog as $post)
          {{ $post->title }}
      @empty
          <h1>Currently No Posts</h1>
      @endforelse
    @endif
  </div>