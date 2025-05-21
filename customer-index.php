<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;
$customers = $crud->select('customers', '*');
?>

<h1>Liste des clients</h1>
<a href="customer-create.php">Ajouter un client</a>

<table border="1">
    <tr>
        <th>ID</th><th>Prénom</th><th>Nom</th><th>Email</th><th>Téléphone</th><th>Actions</th>
    </tr>
    <?php foreach ($customers as $c): ?>
    <tr>
        <td><?= $c['id'] ?></td>
        <td><?= $c['first_name'] ?></td>
        <td><?= $c['last_name'] ?></td>
        <td><?= $c['email'] ?></td>
        <td><?= $c['phone'] ?></td>
        <td>
            <a href="customer-edit.php?id=<?= $c['id'] ?>">Modifier</a> |
            <form action="customer-delete.php" method="post" style="display:inline;">
                <input type="hidden" name="id" value="<?= $c['id'] ?>">
                <button type="submit" onclick="return confirm('Supprimer ?')">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
