<?php $this->title = "Accueil"; ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login_message'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>


<main class="container">
    <section class="row">

        <?php
/** @var \App\src\model\Article $articles */
foreach ($articles as $article) {
    ?>
        <article class="p-5 mb-4 bg-light rounded-3">
           
                <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()) ?>"><?= htmlspecialchars($article->getTitle()); ?></a></h2>
                <p><?= nl2br(htmlspecialchars_decode($article->getContent())); ?></p><br>
            


<svg xmlns="http://www.w3.org/2000/svg"; id="dots" width="30" height="30" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
  <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
  <title>Rédigé par : <?= htmlspecialchars($article->getAuthor()); ?> le <?= htmlspecialchars($article->getCreatedAt()); ?></title>
</svg>
            
        </article>
        <br />
        <?php
}
?>
    </section>
</main>