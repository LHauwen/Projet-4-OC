<?php $this->title = "Connexion"; ?>
<?= $this->session->show('error_login')?>
<?= $this->session->show('need_login');?>
<div class="p-5 mb-4 bg-light rounded-3">
    <form class="form-group" method="post" action="../public/index.php?route=login">
        
        <input class="form-control" type="text" id="pseudo" placeholder="Nom d'utilisateur" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : '';?>"><br>
        
        <input class="form-control" placeholder="Mot de passe" type="password" id="password" name="password"><br>
        <input class="btn btn-warning" type="submit" value="Connexion" id="submit" name="submit">
    </form>
    <a href="../public/index.php?route=register">Pas encore inscrit ? C'est par ici</a>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>