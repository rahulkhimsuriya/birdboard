<div class="card" style="height: 200px">
  <h3 class="text-xl font-normal py-4 -ml-5 border-l-4 pl-4 border-blue-400 mb-3">
    <a href="{{ $project->path() }}" class="text-gray-800">{{ $project->title }}</a>
  </h3>
  <div class="text-gray-500">{{ Str::limit($project->description) }}</div>
</div>