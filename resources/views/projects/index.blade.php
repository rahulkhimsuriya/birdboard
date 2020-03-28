@extends('layouts.app')

@section('content')

  <header class="flex items-end my-6">
    <h2 class="text-lg font-normal text-muted">My Projects</h2>
    <a  ></a>
    <button type="button" class="ml-auto button" @click.prevent="$modal.show('new-project')">Create Project</button>
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

  <new-project-modal></new-project-modal>

@endsection