@extends('_layouts.inner')

@section('Page-Title')
    Projects
@endsection

@section('page-title')
  Projects
@endsection

@section('body')
  @forelse ($projects as $project)
    @if ($project->progress == 'in-progress')
    <h2>In Progress</h2>
    <div class="flex">
      <div class="shadow py-2 px-3 flex-1">
        {{$project->title}}
      </div>
    </div>
    @endif
  @empty
      <h2>I currently have no public projects that are done or I am working on</h2>
  @endforelse
  <br>
  <br>
  <h2>Private Projects</h2>
  <br>
  <p>
    If you are intersted in hearing about some of the private projects I have worked on please <a class="font-bold text-rouge" href="/contact">contact me</a>.
  </p>
@endsection