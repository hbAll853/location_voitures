<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;

$update = $crud->update('employees', $_POST);
if ($update) {
    header('Location: employee-index.php');
} else {
    echo "Erreur de mise à jour.";
}
