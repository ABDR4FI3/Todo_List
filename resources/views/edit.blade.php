<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Task</h1>
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" required>{{ $task->description }}</textarea>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" name="completed" id="completed" class="form-check-input" {{ $task->completed ? 'checked' : '' }}>
                    <label for="completed" class="form-check-label">Completed</label>
                </div>
                <button type="submit" class="btn btn-success">Update Task</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
