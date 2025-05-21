<?php
require_once('Classe/CRUD.php');

$crud = new CRUD;
$rentals = $crud->select('rentals', '*');
$cars = $crud->select('cars', '*');
$customers = $crud->select('customers', '*');
$employees = $crud->select('employees', '*');

// indexés par ID pour affichage rapide
$carsMap = array_column($cars, null, 'id');
$customersMap = array_column($customers, null, 'id');
$employeesMap = array_column($employees, null, 'id');
?>

<h1>Liste des locations</h1>
<a href="rental-create.php">Ajouter une location</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Voiture</th>
        <th>Client</th>
        <th>Employé</th>
        <th>Début</th>
        <th>Fin</th>
        <th>Total</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($rentals as $rental): ?>
    <tr>
        <td><?= $rental['id'] ?></td>
        <td><?= $carsMap[$rental['car_id']]['model'] ?? 'Inconnu' ?></td>
        <td><?= $customersMap[$rental['customer_id']]['first_name'] . ' ' . $customersMap[$rental['customer_id']]['last_name'] ?></td>
        <td><?= $employeesMap[$rental['employee_id']]['name'] ?></td>
        <td><?= $rental['start_date'] ?></td>
        <td><?= $rental['end_date'] ?></td>
        <td><?= $rental['total_price'] ?> $</td>
        <td>
            <a href="rental-edit.php?id=<?= $rental['id'] ?>">Modifier</a> |
            <form action="rental-delete.php" method="post" style="display:inline;">
                <input type="hidden" name="id" value="<?= $rental['id'] ?>">
                <button type="submit" onclick="return confirm('Supprimer ?')">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
