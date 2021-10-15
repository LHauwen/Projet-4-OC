<?php $this->title = "Connexion"; ?>
<header style="padding: 0;">
    <h1 class="blogTitle"><img src="../public/assets/img/connexion.png" alt="" style="width: 500px;"></h1>
</header>
<?= $this->session->show('error_login')?>
<?= $this->session->show('need_login');?>
<section class="container">
    <div class="row">
        <div class="p-5 mb-4 bg-light rounded-3">

    <form method="post" action="../public/index.php?route=login">
    <div class="form-group">
        <input type="text" class="form-control" id="pseudo" placeholder="Nom d'utilisateur" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : '';?>"><br>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
        <input type="submit" class="btn btn-primary"  value="Connexion" id="submit" name="submit">
    </form>
    <a href="../public/index.php?route=register">Pas encore inscrit ? C'est par ici</a>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>
    </div>
</section>