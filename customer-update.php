<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;

$update = $crud->update('customers', $_POST);
if ($update) {
    header('Location: customer-index.php');
} else {
    echo "Erreur de mise à jour.";
}
