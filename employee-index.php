<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;
$employees = $crud->select('employees', '*');
?>

<h1>Liste des employés</h1>
<a href="employee-create.php">Ajouter un employé</a>

<table border="1">
    <tr>
        <th>ID</th><th>Nom</th><th>Email</th><th>Rôle</th><th>Actions</th>
    </tr>
    <?php foreach ($employees as $e): ?>
    <tr>
        <td><?= $e['id'] ?></td>
        <td><?= $e['name'] ?></td>
        <td><?= $e['email'] ?></td>
        <td><?= $e['role'] ?></td>
        <td>
            <a href="employee-edit.php?id=<?= $e['id'] ?>">Modifier</a> |
            <form action="employee-delete.php" method="post" style="display:inline;">
                <input type="hidden" name="id" value="<?= $e['id'] ?>">
                <button type="submit" onclick="return confirm('Supprimer ?')">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
