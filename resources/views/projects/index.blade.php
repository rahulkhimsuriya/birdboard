@extends('layouts.app')

@section('content')

<header class="flex items-end my-6">
  <h2 class="text-xl font-normal text-gray-500">My Projects</h2>
  <a href="/projects/create" class="ml-auto button">Create Project</a>
</header>

<main class="lg:flex lg:flex-wrap -mx-3">
  @forelse ($projects as $project)
    <div class="lg:w-1/3 px-3 mb-6">
      @include('projects.card')
    </div>
  @empty
    <div>No projects yet.</div>
  @endforelse
</main>

@endsection