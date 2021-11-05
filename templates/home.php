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
            
                <p><?= htmlspecialchars($article->getAuthor()); ?></p>
                <p>Crée le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
            
        </article>
        <br />
        <?php
}
?>
    </section>
</main>