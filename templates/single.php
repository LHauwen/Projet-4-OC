<?php $this->title = 'Article'; ?>

<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>



<article>
    <section>
    <h2><?= htmlspecialchars($article->getTitle()); ?></h2>
    </section>

    <section>
    <?= nl2br(htmlspecialchars($article->getContent())); ?>
    </section>
    <section>
    <p><?= htmlspecialchars($article->getAuthor()); ?></p>
    <p>Crée le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
    </section>

    
<section class="actions">
    <p><a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a></p>
    <p><a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a></p>
</section>
</article>

<br>
<a href="../public/index.php">Retour à l'accueil</a>

<aside id="comments" class="text-left">
    <h3>Ajouter un commentaire</h3>
    <?php include 'form_comment.php'; ?>
    <h3>Commentaires</h3>
    <?php
    foreach ($comments as $comment) {
        ?><h4><?= htmlspecialchars($comment->getPseudo()); ?></h4>
        <p><?= nl2br(htmlspecialchars($comment->getContent())) ?></p>
        <p>Posté le : <?= htmlspecialchars($comment->getCreatedAt()) ?></p>
        <?php
        if ($comment->isFlag()) {
            ?><p class="flag">Ce commentaire à été signalé</p>
            <?php
        } else {
            ?><p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId() ?>">Signaler le commentaire</a></p>
        <?php }
        ?><p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p><?php
    }
    ?>
</aside>