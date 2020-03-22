@extends('layouts.app')

@section('content')

  <h1>Create a Project</h1>

  <form action="/projects" method="POST">

    @csrf

    <div class="form-group">
      <label for="title">Project Title</label>
      <input type="text" class="form-control" name="title" id="title">
    </div>

    <div class="form-group">
      <label for="description">Project Description</label>
      <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Create Project</button>
    <a href="/projects" class="btn btn-dark">Cancel</a>

  </form>

@endsection