<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;

$create = $crud->create('customers', $_POST);
if ($create) {
    header('Location: customer-index.php');
} else {
    echo "Erreur de création.";
}
