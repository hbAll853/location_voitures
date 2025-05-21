<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;

$delete = $crud->delete('employees', $_POST['id']);
if ($delete) {
    header('Location: employee-index.php');
} else {
    echo "Erreur de suppression.";
}
