@extends('layouts.app')

@section('content')

<header class="flex items-end my-6">
  <h2 class="text-xl font-normal text-gray-500">
    <a href="/projects" class="text-xl font-normal text-gray-500">My Projects</a> / {{ $project->title }}
  </h2>
  <a href="/projects/create" class="ml-auto button">Create Project</a>
</header>

<main>
  <div class="lg:flex -mx-3">

    <div class="lg:w-3/4 px-3 mb-6 lg:mb-0">

      <div class="mb-8">
        <h2 class="text-lg mb-3 font-normal text-gray-500">Tasks</h2>
        {{-- Tasks --}}
        <div class="card mb-3">Task Lorem ipsum.</div>
        <div class="card mb-3">Task Lorem ipsum.</div>
        <div class="card mb-3">Task Lorem ipsum.</div>
        <div class="card mb-3">Task Lorem ipsum.</div>
        <div class="card">Task Lorem ipsum.</div>
      </div>

      <div class="mb-8 lg:mb-0">
        <h2 class="text-lg mb-3 font-normal text-gray-500">General Notes</h2>
        {{-- General Notes --}}
        <textarea class="card w-full" name="" id="" rows="5">Lorem ipsum.</textarea>
        {{-- <div class="card">Lorem ipsum.</div> --}}
      </div>

    </div>

    <div class="lg:w-1/4 px-3">

      @include('projects._card')

    </div>
  </div>
</main>

@endsection