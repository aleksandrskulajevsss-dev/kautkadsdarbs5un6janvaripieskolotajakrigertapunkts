<?php require "components/header.php"; ?>

<?php require "components/navbar.php"; ?>

<form method="POST" action="/delete">
    <input type="hidden" name="id" value="<?= $post['id'] ?>">
    <button type="submit">Delete</button>
</form>

<h1><?= htmlspecialchars($post["content"]) ?></h1>

<a href="/edit?id=<?= $post['id'] ?>">Rediģēt</a>

<?php require "components/footer.php"; ?>