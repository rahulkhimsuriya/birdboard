@extends('layouts.app')

@section('content')

<div class="flex items-center my-6">
  <h2 class="text-xl font-normal text-gray-500">My Projects</h2>
  <a href="/projects/create" class="ml-auto button">Create Project</a>
</div>

<div class="lg:flex lg:flex-wrap -mx-3">
  @forelse ($projects as $project)
    <div class="lg:w-1/3 px-3 mb-6">
      <div class="bg-white p-5 rounded-lg shadow" style="height: 200px">
        <h3 class="text-xl font-normal py-4 -ml-5 border-l-4 pl-4 border-blue-400 mb-3">
          <a href="{{ $project->path() }}" class="text-gray-800">{{ $project->title }}</a>
        </h3>
        <div class="text-gray-500">{{ Str::limit($project->description) }}</div>
      </div>
    </div>
  @empty
    <div>No projects yet.</div>
  @endforelse
</div>

@endsection