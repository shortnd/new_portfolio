@extends('_layouts.inner')

@section('Page-Title')
    Projects
@endsection

@section('page-title')
  Projects
@endsection

@section('body')
  <h2>In Progress</h2>
  @if (count($projects) > 0)
    <div class="flex justify-between flex-wrap">
      @foreach ($projects as $project)
        @if ($project->progress == 'in-progress')
        <a href="{{$project->getPath()}}" class="flex-1 no-underline shadow p-4 m-2">
          <h3 class="font-thin text-grey-darkest">{{$project->title}}</h3>
          <p class="text-grey-darker">
            {{$project->small_description}}
          </p>
        </a>
        @endif
      @endforeach
    </div>
  @else  
    <h2>I currently have no public projects that are done or I am working on</h2>
  @endif

  <br>
  <br>
  <h2>Private Projects</h2>
  <br>
  <p>
    If you are intersted in hearing about some of the private projects I have worked on please <a class="font-bold text-rouge" href="/contact">contact me</a>.
  </p>
@endsection