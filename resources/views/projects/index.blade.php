<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>birdbaord</title>
</head>
<body>

<h1>birdbaord</h1>

<ul>
  @forelse ($projects as $project)
    <li>{{ $project->title }}</li>
  @empty
    <li>No projects yet.</li>
  @endforelse
</ul>

</body>
</html>