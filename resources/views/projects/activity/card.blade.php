<div class="card mt-4">
  <ul>
    @foreach($project->activity as $activity)
      <li class="text-sm {{ $loop->last ? '' : 'mb-2' }}">
        @include("projects.activity.{$activity->description}")
        <span class="text-gray-600">{{ $activity->created_at->diffForHumans(null, true) }}</span>
      </li>
    @endforeach
  </ul>
</div>