<?php
class CRUD {
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=location_voitures", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("SET NAMES utf8");
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public function create($table, $data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_map(fn($k) => ":$k", array_keys($data)));
        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data);
    }

    public function select($table, $columns = '*') {
        $sql = "SELECT $columns FROM $table";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($table, $id) {
        $sql = "SELECT * FROM $table WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($table, $data) {
    if (!isset($data['id'])) {
        die("Erreur : ID manquant pour la mise à jour.");
    }

    $id = $data['id'];
    unset($data['id']); 

    $set = implode(", ", array_map(fn($k) => "$k = :$k", array_keys($data)));
    $sql = "UPDATE $table SET $set WHERE id = :id";

    $stmt = $this->pdo->prepare($sql);
    $data['id'] = $id;

    return $stmt->execute($data);
}

    public function delete($table, $id) {
        $sql = "DELETE FROM $table WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}
