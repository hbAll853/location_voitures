<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;

$delete = $crud->delete('customers', $_POST['id']);
if ($delete) {
    header('Location: customer-index.php');
} else {
    echo "Erreur de suppression.";
}
