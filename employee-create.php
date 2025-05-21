<?php require_once('Classe/CRUD.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un employé</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Ajouter un employé</h1>
    <form action="employee-store.php" method="post">
        <label>Nom
            <input type="text" name="name" required>
        </label>
        <label>Email
            <input type="email" name="email" required>
        </label>
        <label>Rôle
            <input type="text" name="role" required>
        </label>
        <input type="submit" class="btn" value="Enregistrer">
    </form>
</div>
</body>
</html>
