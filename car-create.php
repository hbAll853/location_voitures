<?php
require_once('Classe/CRUD.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une voiture</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Ajouter une voiture</h1>
    <form action="car-store.php" method="post">
        <label>Marque
            <input type="text" name="brand" required>
        </label>
        <label>Modèle
            <input type="text" name="model" required>
        </label>
        <label>Année
            <input type="number" name="year" required>
        </label>
        <label>Prix par jour
            <input type="number" name="daily_price" step="0.01" required>
        </label>
        <input type="submit" class="btn" value="Enregistrer">
    </form>
</div>
</body>
</html>
