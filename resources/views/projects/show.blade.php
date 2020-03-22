@extends('layouts.app')

@section('content')

  <a href="/projects" class="btn btn-dark btn-sm mb-3">&leftarrow; Go Back</a>

  <h1>{{ $project->title }}</h1>

  <p>{{ $project->description }}</p>

@endsection