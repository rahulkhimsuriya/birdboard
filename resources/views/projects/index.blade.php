@extends('layouts.app')

@section('content')

<div class="flex items-center my-5">
  <h4 class="text-2xl">Birdboard</h4>
  <a href="/projects/create" class="ml-auto">Create Project</a>
</div>

<div class="flex">
  @forelse ($projects as $project)
    <div class="bg-white mr-4 p-5 rounded shadow w-1/3" style="height: 200px">
      <h3 class="text-xl font-normal py-4">{{ $project->title }}</h3>
      <div class="text-gray-500">{{ Str::limit($project->description) }}</div>
    </div>
  @empty
      <div>No projects yet.</div>
  @endforelse
</div>

@endsection