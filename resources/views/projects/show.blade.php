@extends('layouts.app')

@section('content')

  <header class="flex items-center mb-3 py-4">
    <div class="flex justify-between items-end w-full">
      <h2 class="text-xl font-normal text-gray-500">
        <a href="/projects" class="text-xl font-normal text-gray-500 no-underline hover:underline">My Projects</a> / {{ $project->title }}
      </h2>

      <div class="flex items-center">
        @foreach( $project->members as $member)
          <img src="{{ gravatar_url($member->email) }}" alt="{{ $member->name }}'s avatar" class="rounded-full w-8 mr-2" />
        @endforeach
          <img src="{{ gravatar_url($member->email) }}" alt="{{ $project->owner->name }}'s avatar" class="rounded-full w-8 mr-2" />

        <a href="{{ $project->path().'/edit' }}" class="button ml-6">Edit Project</a>
      </div>
    </div>
  </header>

  <main>
    <div class="lg:flex -mx-3">

      <div class="lg:w-3/4 px-3 mb-6 lg:mb-0">

        <div class="mb-8">
          <h2 class="text-lg mb-3 font-normal text-gray-500">Tasks</h2>
          {{-- Tasks --}}
          @foreach ($project->tasks as $task)
            <div class="card mb-3">

              <form action="{{ $task->path() }}" method="post">
                @csrf
                @method('PATCH')
                <div class="flex">
                  <input type="text" name="body" value="{{ $task->body }}"
                         class="w-full {{ $task->completed ? 'text-gray-500' : '' }}">
                  <input type="checkbox" name="completed" id="completed"
                         onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                </div>
              </form>

            </div>
          @endforeach

          <div class="card">
            <form action="{{ $project->path().'/tasks' }}" method="post">
              @csrf
              <input type="text" placeholder="Add a new task..." name="body" class="w-full">
            </form>
          </div>

        </div>

        <div class="mb-8 lg:mb-0">
          <h2 class="text-lg mb-3 font-normal text-gray-500">General Notes</h2>
          {{-- General Notes --}}
          <form action="{{ $project->path() }}" method="post">
            @csrf
            @method('PATCH')

            <textarea class="card w-full mb-4" name="notes" id="notes" rows="5"
                      placeholder="Anything special that you want to make a note of?">{{ $project->notes  }}</textarea>

            @if ( $errors->any() )
              <div class="field mt-3">
                <ul>
                  @foreach( $errors->all() as $error )
                    <li class="text-sm text-red-500 mb-3">{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <button type="submit" class="button">Save</button>

          </form>
        </div>

      </div>

      <div class="lg:w-1/4 px-3 mt-8">
        @include('projects.card')
        @include('projects.activity.card')
      </div>

    </div>
  </main>

@endsection