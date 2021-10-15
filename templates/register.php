<?php $this->title = "Inscription"; ?>
<header style="padding: 0;">
    <h1 class="blogTitle"><img src="../public/assets/img/inscription.png" alt="" style="width: 500px;"></h1>
</header>
<section class="container">
    <div class="row">
        <div class="p-5 mb-4 bg-light rounded-3">
            <form method="post" action="../public/index.php?route=register">
                <div class="form-group">
                    <input type="text" id="pseudo" class="form-control" placeholder="Nom d'utilisateur" name="pseudo"
                        value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : '' ?>"><br>
                    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''?>
                </div>
                <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe"
                    value="<?= isset($post) ? htmlspecialchars($post->get('password')) : ''; ?>"><br>
                <?= isset($errors['password']) ? $errors['password'] : ''?>
        <input type="submit" class="btn btn-primary" value="Inscription" id="submit" name="submit">
        </form>
  
        <a href="../public/index.php?route=login">Déjà inscrit ?</a>
        <a href="../public/index.php">Retour à l'accueil</a>
   
        </div>
        </div>
        </div>
   
</section>