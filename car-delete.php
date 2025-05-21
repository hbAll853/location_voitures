<?php
$id = $_POST['id'];
require_once('Classe/CRUD.php');

$crud = new CRUD;

$delete = $crud->delete('cars', $id);

if ($delete) {
    header('Location: car-index.php');
} else {
    echo "Erreur de suppression.";
}
?>
