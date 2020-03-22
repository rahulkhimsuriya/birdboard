@extends('layouts.app')

@section('content')

<div class="d-flex align-items-center">
  <h1>Birdboard</h1>
  <a href="/projects/create" class="ml-auto">Create New Project</a>
</div>

<ul>
  @forelse ($projects as $project)
    <li>
      <a href="{{ $project->path() }}">{{ $project->title }}</a>
    </li>
  @empty
    <li>No projects yet.</li>
  @endforelse
</ul>

@endsection