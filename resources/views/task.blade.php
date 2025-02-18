<form method="POST" action="http://127.0.0.1:8001/api/tasks">
    <div>
        <label for="title">Task Title</label>
        <input type="text" id="title" name="title" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" required></textarea>
    </div>

    <div>
        <label for="project_id">Project</label>
        <select id="project_id" name="project_id" required>
            @foreach($projects as $project)
                <option value="{{ $project['id'] }}">{{ $project['name'] }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="category_id">Category</label>
        <select id="category_id" name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="due_date">Due Date</label>
        <input type="date" id="due_date" name="due_date" required>
    </div>

    <button type="submit">Create Task</button>
</form>
