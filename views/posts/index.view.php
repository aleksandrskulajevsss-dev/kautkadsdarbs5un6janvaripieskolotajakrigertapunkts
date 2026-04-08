<?php require "components/header.php"; ?>

<?php require "components/navbar.php"; ?>

<h1>Emuārs</h1>

<form method="GET">
    <input 
        name="search_query" 
        value="<?= htmlspecialchars($_GET['search_query'] ?? '') ?>"
    />
    <button>Meklēt</button>
</form>

<?php if (count($posts) == 0): ?>
    <p>Nav atrasts neviens ieraksts. Pamēģini citu vārdu vai frāzi</p>
<?php else: ?>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li><a href="show?id=<?= $post["id"] ?>"> <?= htmlspecialchars($post["content"]) ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php require "components/footer.php"; ?>