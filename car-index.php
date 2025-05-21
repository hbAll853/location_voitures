<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;
$cars = $crud->select('cars', '*');
?>
<h1>Liste des voitures</h1>
<a href="car-create.php">Ajouter une voiture</a>
<table border="1">
    <tr>
        <th>ID</th><th>Marque</th><th>Modèle</th><th>Année</th><th>Prix/jour</th><th>Actions</th>
    </tr>
    <?php foreach ($cars as $car): ?>
    <tr>
        <td><?= $car['id'] ?></td>
        <td><?= $car['brand'] ?></td>
        <td><?= $car['model'] ?></td>
        <td><?= $car['year'] ?></td>
        <td><?= $car['daily_price'] ?> $</td>
        <td>
            <a href="car-edit.php?id=<?= $car['id'] ?>">Modifier</a> |
            <form action="car-delete.php" method="post" style="display:inline;">
                <input type="hidden" name="id" value="<?= $car['id'] ?>">
                <button type="submit" onclick="return confirm('Supprimer ?')">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
