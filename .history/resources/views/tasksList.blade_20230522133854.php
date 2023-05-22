<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>
    <h1>Task List</h1>
    <ul>
        @foreach($tasksList as $task)
            <li>Équipe: {{ $task['team_name'] }} | Tâche: {{ $task['task'] }}</li>
        @endforeach
    </ul>
</body>
</html>