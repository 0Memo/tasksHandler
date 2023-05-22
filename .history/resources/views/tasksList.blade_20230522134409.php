<!DOCTYPE html>
<html>
<head>
    <title>Liste de tâches par équipe</title>
</head>
<body>
    <h1>Liste de tâches</h1>
    <ul>
        @foreach($tasks as $task)
            <li>Équipe {{ $task['team_name'] }} | Tâche => {{ $task['task'] }}</li>
        @endforeach
    </ul>
</body>
</html>