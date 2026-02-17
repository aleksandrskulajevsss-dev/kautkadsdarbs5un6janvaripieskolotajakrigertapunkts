<?php
require_once "functions.php";
require_once "Database.php";
$config = require "config.php";

$db = new Database($config["database"]);

$sql = "SELECT * FROM categories";
$params = [];

if (isset($_GET["search_query"]) && trim($_GET["search_query"]) !== "") {
    $sql = "SELECT * FROM categories WHERE category_name LIKE ?";
    $params[] = "%" . $_GET["search_query"] . "%";
}

$categories = $db->query($sql, $params)->fetchAll();

echo "<h1>Kategorijas</h1>";

echo "<form>";
echo "<input name='search_query' />";
echo "<button>Meklēt</button>";
echo "</form>";

echo "<ul>";
foreach ($categories as $category) {
    echo "<li>" . $category["category_name"] . "</li>";
}
echo "</ul>";
