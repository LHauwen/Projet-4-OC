<?php $this->title = "Inscription"; ?>

<div class="p-5 mb-4 bg-light rounded-3">
    <form class="form-group" method="post" action="../public/index.php?route=register">
        <input class="form-control" placeholder="Nom d'utilisateur" type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : '' ?>"><br>
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''?>
        
        <input class="form-control" type="password" id="password" name="password" value="<?= isset($post) ? htmlspecialchars($post->get('password')) : ''; ?>"><br>
        <?= isset($errors['password']) ? $errors['password'] : ''?>
        <input type="submit" class="btn btn-warning" value="Inscription" id="submit" name="submit">
    </form>
    <a href="../public/index.php?route=login">Déjà inscrit ?</a>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>