<?php $this->title = "Accueil"; ?>
    <header>
        <!-- <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item"><i class="nav-link px-lg-3 py-3 py-lg-4 fas fa-chevron-circle-right"></i></li>
                <li class="nav-item"><i class="nav-link px-lg-3 py-3 py-lg-4 fas fa-chevron-circle-right"></i></li>
                <li class="nav-item"><i class="nav-link px-lg-3 py-3 py-lg-4 fas fa-chevron-circle-right"></i></li>
                <li class="nav-item"><i class="nav-link px-lg-3 py-3 py-lg-4 fas fa-chevron-circle-right"></i></li>
                <li class="nav-item"><i class="nav-link px-lg-3 py-3 py-lg-4 fas fa-chevron-circle-right"></i></li>
            </ul>
        </nav> -->

        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login_message'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>
<?php
//Menu dynamique si l'utilisateur est connecté
if ($this->session->getUserInfo('pseudo')) :
    ?>
    <p>Bienvenue sur votre espace <?= ucfirst(htmlspecialchars($this->session->getUserInfo('pseudo')))?></p>
    <a href="../public/index.php?route=logout">Déconnexion</a>
    <a href="../public/index.php?route=profile">Profil</a>
    <?php if($this->session->getUserInfo('role') === 'admin') :?>
    <a href="../public/index.php?route=administration">Administration</a>
    <?php endif;?>
<?php
else:
    ?>
    <a href="../public/index.php?route=register">Inscription</a>
    <a href="../public/index.php?route=login">Connexion</a>
<?php
endif;
?>

<?php
/** @var \App\src\model\Article $articles */
foreach ($articles as $article) {
    ?>
    <article>
        <section>
        <h2>
            <a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()) ?>"><?= htmlspecialchars($article->getTitle()); ?></a>
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
    <br/>
    <?php
}
?>