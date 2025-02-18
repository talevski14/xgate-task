<form method="POST" action="http://127.0.0.1:8001/api/projects">
    <div>
        <label for="name">Project Name</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" required></textarea>
    </div>

    <div>
        <label for="due_date">Due Date</label>
        <input type="date" id="due_date" name="due_date" required>
    </div>

    <button type="submit">Create Project</button>
</form>
