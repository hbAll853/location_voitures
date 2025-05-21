<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;

$create = $crud->create('rentals', $_POST);
if ($create) {
    header('Location: rental-index.php');
} else {
    echo "Erreur de création.";
}
