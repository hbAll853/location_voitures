<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;
$e = $crud->getById('employees', $_GET['id']);

$id = $e['id'];
$name = $e['name'];
$email = $e['email'];
$role = $e['role'];
?>

<h1>Modifier un employé</h1>
<form action="employee-update.php" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <label>Nom <input type="text" name="name" value="<?= $name ?>"></label>
    <label>Email <input type="email" name="email" value="<?= $email ?>"></label>
    <label>Rôle <input type="text" name="role" value="<?= $role ?>"></label>
    <input type="submit" class="btn" value="Mettre à jour">
</form>
