<div class="card flex flex-col mt-3">
  <h3 class="text-xl font-normal py-4 -ml-5 border-l-4 pl-4 border-blue-400 mb-3">
    Invite a User
  </h3>

  <form action="{{ $project->path().'/invitations' }}" method="post">
    @csrf
    <div class="mb-3">
      <input type="text" name="email" class="border border-gray-400 px-3 py-2 rounded w-full"
             placeholder="Email address">
    </div>
    <button type="submit" class="button">Invite</button>
  </form>

  @include('errors', ['bag' => 'invitations'])
</div>