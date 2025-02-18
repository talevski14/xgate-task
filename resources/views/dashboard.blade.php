<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Dashboard</title>
</head>
<body>
<a href="/projects/create">Create a project</a>
<h1>Projects</h1>
<form method="get" action="http://127.0.0.1:8002/dashboard">
    <label for="due_date">Due Date</label>
    <input type="date" id="due_date" name="due_date">
    <button type="submit">Filter</button>
</form>
<ul>
    @foreach ($projects as $project)
        <li>{{ $project['name'] }} - {{ $project['description'] }}</li>
    @endforeach
</ul>

<a href="/tasks/create">Create a task</a>
<h2>Tasks</h2>
<form method="get" action="http://127.0.0.1:8002/dashboard">
    <label for="category_id">Category</label>
    <select id="category_id" name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
        @endforeach
    </select>
    <button type="submit">Filter</button>
</form>
<form method="get" action="http://127.0.0.1:8002/dashboard">
    <label for="status">Status</label>
    <select id="status" name="status">
        <option value="pending">Pending</option>
        <option value="completed">Completed</option>
    </select>
    <button type="submit">Filter</button>
</form>
<ul>
    @foreach ($tasks as $task)
        <li>{{ $task['title'] }} ({{ $task['status'] }})</li>
        <form method="post" action="http://127.0.0.1:8001/api/tasks/{{$task['id']}}/status">
            <input type="hidden" name="status" value="completed">
            <button type="submit">Completed</button>
        </form>
    @endforeach
</ul>

<a href="/categories/create">Create a category</a>
<h1>Categories</h1>
<ul>
    @foreach ($categories as $category)
        <li>{{ $category['name'] }}</li>
    @endforeach
</ul>
</body>
</html>
