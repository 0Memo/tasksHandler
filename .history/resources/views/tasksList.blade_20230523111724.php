<!DOCTYPE html>
<html>
<head>
    <title>Liste de tâches par équipe</title>
</head>
<body>
    <h1>Liste de tâches</h1>
    <ul>
        @foreach($tasks as $task)
            <li>Équipeː <strong>{{ $task['team'] }}</strong> | Tâche ➜ "{{ $task['task'] }}"</li>
        @endforeach
    </ul>
</body>
</html>