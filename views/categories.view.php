<?php require "components/header.php"; ?>

<?php require "components/navbar.php"; ?>

<h1>Kategorijas</h1>

<form method="GET">
    <input 
        name="search_query" 
        value="<?= htmlspecialchars($_GET['search_query'] ?? '') ?>"
    />
    <button>Meklēt</button>
</form>

<ul>
    <?php foreach ($categories as $category): ?>
        <li><?= htmlspecialchars($category["category_name"]) ?></li>
    <?php endforeach; ?>
</ul>

<?php require "components/footer.php"; ?>
