<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;

$delete = $crud->delete('rentals', $_POST['id']);
if ($delete) {
    header('Location: rental-index.php');
} else {
    echo "Erreur de suppression.";
}
