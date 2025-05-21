<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;
$c = $crud->getById('customers', $_GET['id']);

$id = $c['id'];
$first_name = $c['first_name'];
$last_name = $c['last_name'];
$email = $c['email'];
$phone = $c['phone'];
?>

<h1>Modifier un client</h1>
<form action="customer-update.php" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <label>Prénom <input type="text" name="first_name" value="<?= $first_name ?>"></label>
    <label>Nom <input type="text" name="last_name" value="<?= $last_name ?>"></label>
    <label>Email <input type="email" name="email" value="<?= $email ?>"></label>
    <label>Téléphone <input type="text" name="phone" value="<?= $phone ?>"></label>
    <input type="submit" class="btn" value="Mettre à jour">
</form>
