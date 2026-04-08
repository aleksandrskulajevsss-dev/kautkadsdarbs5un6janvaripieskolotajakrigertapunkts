<?php

require_once "Database.php";
require_once "Validator.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /');
    exit();
}

$id = $_POST['id'] ?? null;

if (!Validator::number($id)) {
    die("Invalid ID");
}

$db = new Database([
    'host' => 'localhost',
    'dbname' => 'blog',
    'user' => 'root',
    'password' => ''
]);

$db->query('DELETE FROM posts WHERE id = :id', [
    'id' => $id
]);

header('Location: /');
exit();