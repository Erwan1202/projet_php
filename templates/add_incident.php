<!-- templates/add_incident.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Incident</title>
</head>
<body>
    <h1>Ajouter un Incident</h1>
    <form method="POST" action="/incident/add">
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" required>
        
        <label for="description">Description :</label>
        <textarea name="description" id="description" required></textarea>
        
        <button type="submit">Ajouter l'incident</button>
    </form>
</body>
</html>
