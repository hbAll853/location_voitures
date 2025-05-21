<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;

$update = $crud->update('cars', $_POST);

if ($update) {
    header('Location:car-index.php');
} else {
    echo "Erreur";
}
