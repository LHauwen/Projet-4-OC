<?php $this->title = "Accueil"; ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login_message'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>


    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html"><img src="../public/assets/img/jfBs.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <?php
                    //Menu dynamique si l'utilisateur est connecté
                    if ($this->session->getUserInfo('pseudo')) :
                    ?>
                      <p>Bienvenue sur votre espace <?= ucfirst(htmlspecialchars($this->session->getUserInfo('pseudo')))?></p>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                            href="../public/index.php?route=logout">Déconnexion</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                            href="../public/index.php?route=profile">Profil</a></li>
                    <?php if($this->session->getUserInfo('role') === 'admin') :?>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                            href="../public/index.php?route=administration">Administration</a></li>
                    <?php endif;?>
                    <?php
else:
    ?>
        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="../public/index.php?route=register">Inscription</a></li>
        <li class="nav-item"> <a class="nav-link px-lg-3 py-3 py-lg-4" href="../public/index.php?route=login">Connexion</a></li>
        <?php
endif;
?>

                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<main class="container">
    <section class="row">

      
   

        <?php
/** @var \App\src\model\Article $articles */
foreach ($articles as $article) {
    ?>
        <article>
            <section>
                <h2>
                    <a
                        href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()) ?>"><?= htmlspecialchars($article->getTitle()); ?></a>
                </h2>
            </section>
            <section>
                <p><?= nl2br(htmlspecialchars_decode($article->getContent())); ?></p><br>
            </section>
            <section>

                <p><?= htmlspecialchars($article->getAuthor()); ?></p>
                <p>Crée le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
            </section>
        </article>
        <br />
        <?php
}
?>
    </section>
</main>