<?php require "components/header.php"; ?>

<?php require "components/navbar.php"; ?>

<h1>Rediģēt bloga ierakstu</h1>

<form method="POST">
    
    <input type="hidden" name="id" value="<?= $post["id"] ?>">

    <label for="content">Saturs:</label>
    <input 
        type="text" 
        name="content" 
        id="content"
        value="<?= htmlspecialchars($_POST["content"] ?? $post["content"]) ?>"
    >

    <?php if (isset($errors["content"])): ?>
        <p><?= $errors["content"] ?></p>
    <?php endif; ?>

    <button type="submit">Saglabāt</button>
</form>

<?php require "components/footer.php"; ?>