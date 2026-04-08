<?php

$pageTitle = "Kategorijas";
$customStyles = "categories.css";

$sql = "SELECT * FROM categories";
$params = [];

if (isset($_GET["search_query"]) && trim($_GET["search_query"]) !== "") {
    $sql = "SELECT * FROM categories WHERE category_name LIKE ?";
    $params[] = "%" . $_GET["search_query"] . "%";
}

$categories = $db->query($sql, $params)->fetchAll();

require "views/categories.view.php";
