<?php $this->title = "Accueil"; ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login_message'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>


<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <section class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php"><img src="../public/assets/img/jfBs.png" alt="Logo du site"></a>

        <ul class="navbar-nav ms-auto py-4 py-lg-0">
            <?php
                    //Menu dynamique si l'utilisateur est connecté
                    if ($this->session->getUserInfo('pseudo')) :
                    ?>
            <p class="px-lg-3 py-3 py-lg-4">Bienvenue sur votre espace
                <?= ucfirst(htmlspecialchars($this->session->getUserInfo('pseudo')))?></p>
            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                    href="../public/index.php?route=logout"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plug" viewBox="0 0 16 16">
  <path d="M6 0a.5.5 0 0 1 .5.5V3h3V.5a.5.5 0 0 1 1 0V3h1a.5.5 0 0 1 .5.5v3A3.5 3.5 0 0 1 8.5 10c-.002.434-.01.845-.04 1.22-.041.514-.126 1.003-.317 1.424a2.083 2.083 0 0 1-.97 1.028C6.725 13.9 6.169 14 5.5 14c-.998 0-1.61.33-1.974.718A1.922 1.922 0 0 0 3 16H2c0-.616.232-1.367.797-1.968C3.374 13.42 4.261 13 5.5 13c.581 0 .962-.088 1.218-.219.241-.123.4-.3.514-.55.121-.266.193-.621.23-1.09.027-.34.035-.718.037-1.141A3.5 3.5 0 0 1 4 6.5v-3a.5.5 0 0 1 .5-.5h1V.5A.5.5 0 0 1 6 0zM5 4v2.5A2.5 2.5 0 0 0 7.5 9h1A2.5 2.5 0 0 0 11 6.5V4H5z"/>
</svg> Déconnexion</a></li>
            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                    href="../public/index.php?route=profile"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
</svg> Profil</a></li>
            <?php if($this->session->getUserInfo('role') === 'admin') :?>
            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                    href="../public/index.php?route=administration"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
  <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
  <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
</svg> Administration</a></li>
            <?php endif;?>
            <?php
            else:
            ?>
            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                    href="../public/index.php?route=register"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg> Inscription</a></li>
            <li class="nav-item"> <a class="nav-link px-lg-3 py-3 py-lg-4"
                    href="../public/index.php?route=login"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plug" viewBox="0 0 16 16">
  <path d="M6 0a.5.5 0 0 1 .5.5V3h3V.5a.5.5 0 0 1 1 0V3h1a.5.5 0 0 1 .5.5v3A3.5 3.5 0 0 1 8.5 10c-.002.434-.01.845-.04 1.22-.041.514-.126 1.003-.317 1.424a2.083 2.083 0 0 1-.97 1.028C6.725 13.9 6.169 14 5.5 14c-.998 0-1.61.33-1.974.718A1.922 1.922 0 0 0 3 16H2c0-.616.232-1.367.797-1.968C3.374 13.42 4.261 13 5.5 13c.581 0 .962-.088 1.218-.219.241-.123.4-.3.514-.55.121-.266.193-.621.23-1.09.027-.34.035-.718.037-1.141A3.5 3.5 0 0 1 4 6.5v-3a.5.5 0 0 1 .5-.5h1V.5A.5.5 0 0 1 6 0zM5 4v2.5A2.5 2.5 0 0 0 7.5 9h1A2.5 2.5 0 0 0 11 6.5V4H5z"/>
</svg> Connexion</a></li>
            <?php
            endif;
            ?>

        </ul>
    </section>

</nav>

<header>
<h1 class="blogTitle">Un billet simple pour l'Alaska</h1>
</header>

<main class="container">
    <section class="row">

        <?php
/** @var \App\src\model\Article $articles */
foreach ($articles as $article) {
    ?>
        <article class="p-5 mb-4 bg-light rounded-3">
           
                <h2 class="text-center" style="font-family: 'DM Serif Display', serif;"><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()) ?>"><?= htmlspecialchars($article->getTitle()); ?></a></h2>
               <div class="content" style="padding: 5%">
                <p><?= nl2br(htmlspecialchars_decode($article->getContent())); ?></p><br>
                </div>
                <p><?= htmlspecialchars($article->getAuthor()); ?></p>
                <p>Crée le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
            
        </article>
        <br />
        <?php
}
?>
    </section>
</main>