<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;

$update = $crud->update('rentals', $_POST);
if ($update) {
    header('Location: rental-index.php');
} else {
    echo "Erreur de mise à jour.";
}
