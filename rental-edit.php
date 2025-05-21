<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;

$rental = $crud->getById('rentals', $_GET['id']);
$cars = $crud->select('cars', '*');
$customers = $crud->select('customers', '*');
$employees = $crud->select('employees', '*');
?>

<h1>Modifier une location</h1>
<form action="rental-update.php" method="post">
    <input type="hidden" name="id" value="<?= $rental['id'] ?>">
    
    <label>Voiture :
        <select name="car_id">
            <?php foreach ($cars as $c): ?>
            <option value="<?= $c['id'] ?>" <?= $rental['car_id'] == $c['id'] ? 'selected' : '' ?>><?= $c['model'] ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    
    <label>Client :
        <select name="customer_id">
            <?php foreach ($customers as $cl): ?>
            <option value="<?= $cl['id'] ?>" <?= $rental['customer_id'] == $cl['id'] ? 'selected' : '' ?>><?= $cl['first_name'] . ' ' . $cl['last_name'] ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    
    <label>Employé :
        <select name="employee_id">
            <?php foreach ($employees as $e): ?>
            <option value="<?= $e['id'] ?>" <?= $rental['employee_id'] == $e['id'] ? 'selected' : '' ?>><?= $e['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    
    <label>Date de début :
        <input type="date" name="start_date" value="<?= $rental['start_date'] ?>" required>
    </label>
    <label>Date de fin :
        <input type="date" name="end_date" value="<?= $rental['end_date'] ?>" required>
    </label>
    <label>Prix total :
        <input type="number" name="total_price" step="0.01" value="<?= $rental['total_price'] ?>" required>
    </label>
    
    <input type="submit" class="btn" value="Mettre à jour">
</form>
