<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;

if (!isset($_GET['id'])) {
    die("ID de voiture manquant dans l'URL.");
}

$id = $_GET['id'];
$car = $crud->getById('cars', $id);

if (!$car) {
    die("Voiture introuvable avec l'ID : $id");
}

$brand = $car['brand'];
$model = $car['model'];
$year = $car['year'];
$daily_price = $car['daily_price'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une voiture</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Modifier une voiture</h1>
    <form action="car-update.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label>Marque
            <input type="text" name="brand" value="<?= $brand ?>" required>
        </label>
        <label>Modèle
            <input type="text" name="model" value="<?= $model ?>" required>
        </label>
        <label>Année
            <input type="number" name="year" value="<?= $year ?>" required>
        </label>
        <label>Prix par jour
            <input type="number" step="0.01" name="daily_price" value="<?= $daily_price ?>" required>
        </label>
        <input type="submit" class="btn" value="Mettre à jour">
    </form>
</div>
</body>
</html>
