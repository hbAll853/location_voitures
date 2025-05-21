<?php require_once('Classe/CRUD.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un client</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Ajouter un client</h1>
    <form action="customer-store.php" method="post">
        <label>Prénom
            <input type="text" name="first_name" required>
        </label>
        <label>Nom
            <input type="text" name="last_name" required>
        </label>
        <label>Email
            <input type="email" name="email" required>
        </label>
        <label>Téléphone
            <input type="text" name="phone" required>
        </label>
        <input type="submit" class="btn" value="Enregistrer">
    </form>
</div>
</body>
</html>
