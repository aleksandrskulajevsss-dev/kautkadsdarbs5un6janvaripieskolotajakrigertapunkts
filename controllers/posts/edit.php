<?php

$pageTitle = "Rediģēt bloga ierakstu";

require "Validator.php";

if (!isset($_GET["id"])) {
    die("Nav norādīts ieraksta ID");
}

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if (!$post) {
    die("Ieraksts nav atrasts");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];

    if (!Validator::string($_POST["content"], min: 1, max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam un ne garākam par 50 rakstzīmēm";
    }

    if (empty($errors)) {
        $sql = "UPDATE posts SET content = :content WHERE id = :id";
        $params = [
            "content" => $_POST["content"],
            "id" => $_GET["id"]
        ];

        $db->query($sql, $params);

        header("Location: /show?id=" . $_GET["id"]);
        exit();
    }

    require "views/posts/edit.view.php";

} else {
    require "views/posts/edit.view.php";
}