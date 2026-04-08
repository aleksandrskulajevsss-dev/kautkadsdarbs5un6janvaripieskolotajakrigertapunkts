<?php require 'components/header.php'; ?>
<?php require 'components/navbar.php'; ?>

<h1>Izveidot bloga ierakstu</h1>

<form method="POST">

    <label for="content"></label>

    <?php if (isset($errors["content"])) { ?>
        <p><?= $errors["content"] ?></p>
    <?php } ?>

    <input 
        type="text" 
        name="content" 
        id="content"
        value="<?= $_POST["content"] ?? "" ?>"
    >

    <button type="submit">Saglabāt</button>

</form>

<?php require 'components/footer.php'; ?>