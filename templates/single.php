<?php $this->title = 'Article'; ?>

<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>






<div class="container">
    <div class="row">


        <article class="p-5 mb-4 bg-light rounded-3">
            <section>
                <h2><?= htmlspecialchars($article->getTitle()); ?></h2>
            </section>

            <section>
                <?= nl2br(htmlspecialchars_decode($article->getContent())); ?>
            </section>
            <section>
                <p><?= htmlspecialchars($article->getAuthor()); ?></p>
                <p>Crée le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
            </section>


            <section class="actions">
                <p><a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>"><svg
                            xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg> Modifier</a></p>
                <p><a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>"><svg
                            xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd"
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg> Supprimer</a></p>
            </section>
        </article>

        <br>


        <section id="comments" class="container row justify-content-around">
            <div class="col-sm-3">
                <?php
                    //Menu dynamique si l'utilisateur est connecté
                    if ($this->session->getUserInfo('pseudo')) :
                    ?>
                <h3>Ajouter un commentaire</h3>
                <?php include 'form_comment.php'; ?>

                <?php
            endif;
            ?>
            </div>



            <div class="col-sm-3">
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
            ?><p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId() ?>">Signaler le
                        commentaire</a></p>
                <?php }
        ?><p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le
                        commentaire</a></p><?php
    }
    ?>

            </div>
        </section>
    </div>
</div>