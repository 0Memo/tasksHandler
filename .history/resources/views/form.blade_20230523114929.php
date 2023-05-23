<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Créer une nouvelle tâche</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="team">Équipe:</label>
            <select name="team" id="team" required>
                <option value="" disabled>-- Veuillez choisir une option --</option>
                <option value="admin">Admin</option>
                <option value="dev">Dev</option>
                <option value="technical">Technical</option>
                <option value="test">Test</option>
            </select>
            <label for="task">Tâche</label>
            <input type="text" id="task" name="task" required />
            <input type="submit" value="envoyer" />
        </form>
    </body>
</html>