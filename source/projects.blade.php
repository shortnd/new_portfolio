@extends('_layouts.inner')

@section('Page-Title')
    Projects
@endsection

@section('page-title')
  Projects
@endsection

@section('body')
@if (count($projects) > 0)    
  <h2>In Progress</h2>
  @foreach ($projects as $project)
    @if ($project->progress == 'in-progress')
    <div class="flex">
      <div class="shadow py-2 px-3 flex-1">
        {{$project->title}}
      </div>
    </div>
    @endif
  @endforeach
  @endif
  <h2>I currently have no public projects that are done or I am working on</h2>

  <br>
  <br>
  <h2>Private Projects</h2>
  <br>
  <p>
    If you are intersted in hearing about some of the private projects I have worked on please <a class="font-bold text-rouge" href="/contact">contact me</a>.
  </p>
@endsection