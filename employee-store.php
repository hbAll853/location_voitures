<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;

$create = $crud->create('employees', $_POST);
if ($create) {
    header('Location: employee-index.php');
} else {
    echo "Erreur de création.";
}
