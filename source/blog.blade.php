@extends('_layouts.inner')
@section('Page-Title', 'Blog')

@section('page-title', 'Blog')
@section('page-subtitle','Coding, Laravel, Vue, and others')

@section('body')
    @forelse ($blog as $post)
        {{$post->title}}
    @empty
        <h2 class="text-rouge text-center">There are no posts at this time please check back later</h2>
    @endforelse
@endsection