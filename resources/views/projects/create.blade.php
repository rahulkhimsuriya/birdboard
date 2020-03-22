<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>birdboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>

<div class="container mt-5">

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

  </form>

</div>

</body>
</html>