<div class="card flex flex-col" style="height: 200px">
  <h3 class="text-xl font-normal py-4 -ml-5 border-l-4 pl-4 border-accent mb-3">
    <a href="{{ $project->path() }}" class="text-gray-800">{{ $project->title }}</a>
  </h3>

  <div class="text-muted mb-4 flex-1">{{ Str::limit($project->description) }}</div>

  @can('manage', $project)
    <footer class="mt-3">
      <form action="{{ $project->path() }}" method="post" class="text-right">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-xs text-default">Delete</button>
      </form>
    </footer>
  @endcan
</div>