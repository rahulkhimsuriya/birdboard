@extends('layouts.app')

@section('content')

  <h1>Create a Project</h1>

  <form action="/projects" method="POST">

    @include('projects._form', [
      'project' => new App\Project(),
      'buttonText' => 'Create Project'
    ]);
    <a href="/projects">Cancel</a>

  </form>

@endsection