<?php

$dsn = "mysql:host=localhost;dbname=blog;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Savienojuma kļūda: " . $e->getMessage());
}

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll();

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . htmlspecialchars($post["content"]) . "</li>";
}
echo "</ul>";
