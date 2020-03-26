@csrf

<div class="form-group">
  <label for="title">Project Title</label>
  <input type="text" class="form-control" name="title" id="title" value="{{ $project->title }}">
</div>

<div class="form-group">
  <label for="description">Project Description</label>
  <textarea class="form-control" name="description" id="description" rows="3">{{ $project->description }}</textarea>
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>

@if ( $errors->any() )
  <div class="field mt-6">
    <ul>
      @foreach( $errors->all() as $error )
        <li class="text-sm text-red-500">{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
