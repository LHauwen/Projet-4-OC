<?php $this->title = 'Administration'; ?>
    
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('unflag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('delete_user'); ?>
    <h2>Articles</h2>
    <a href="../public/index.php?route=addArticle">Nouvel article</a>
    <table class="table">
        <thead>
        <tr>
           
            <th scope="col">Titre</th>
            <th scope="col">Contenu</th>
            <th scope="col">Auteur</th>
            <th scope="col">Date</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <?php
        foreach ($articles as $article)
        {
            ?>
            <tr>
                
                <th scope="row"><a href="../public/index.php?route=article&amp;articleId=<?= htmlspecialchars($article->getId())?>"><?= htmlspecialchars($article->getTitle()); ?></a></th>
            <td><?= substr(htmlspecialchars_decode($article->getContent()), 0, 150);?></td>
            <td><?= htmlspecialchars($article->getAuthor());?></td>
            <td>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></td>
            <td>
                <a href="../public/index.php?route=editArticle&amp;articleId=<?= $article->getId(); ?>">Modif</a>
                <a href="../public/index.php?route=deleteArticle&amp;articleId=<?= $article->getId(); ?>">Sup</a>
            </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <h2>Commentaires signalés</h2>
<table>
    <tr>
        <td>Id</td>
        <td>Pseudo</td>
        <td>Message</td>
        <td>Date</td>
        <td>Actions</td>
    </tr>
<?php
foreach ($comments as $comment)
{
    ?>
    <tr>
        <td><?= htmlspecialchars($comment->getId());?></td>
        <td><?= htmlspecialchars($comment->getPseudo());?></td>
        <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
        <td>Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
        <td>
            <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire</a>
            <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a>
        </td>

    </tr>
    <?php
}
?>
    </table>


    <h2>Utilisateurs</h2>
<table>
    <tr>
        <td>Id</td>
        <td>Pseudo</td>
        <td>Date</td>
        <td>Rôle</td>
        <td>Actions</td>
    </tr>
    <?php
    foreach ($users as $user)
    {
    ?>
    <tr>
        <td><?= htmlspecialchars($user->getId());?></td>
        <td><?= htmlspecialchars($user->getPseudo());?></td>
        <td>Créé le : <?= htmlspecialchars($user->getCreatedAt());?></td>
        <td><?= htmlspecialchars($user->getRole());?></td>
        <td>
            <?php
            if ($user->getRole() !== 'admin') {
                ?>
                <a href="../public/index.php?route=deleteUser&userId=<?= $user->getId();?>">Supprimer</a>
            <?php
            } else {
                ?>
                Suppression impossible
            <?php
            }
            ?>
        </td>
    </tr>
        <?php
    }
    ?>
</table>

