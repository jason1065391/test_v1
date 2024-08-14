<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
</head>
<body>
    <h1>Tasks</h1>

    <!-- 搜尋表單 -->
    <form action="{{ route('tasks.index') }}" method="GET">
        <input type="text" name="search" placeholder="Search tasks..." value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    <a href="{{ route('tasks.create') }}">Create New Task</a>
    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
                <a href="{{ route('tasks.edit', $task) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
