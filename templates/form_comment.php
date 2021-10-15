<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>


<form action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()) ?>"
      method="post">
      <div class="form-group">
    
        <input type="text" name="pseudo" id="pseudo" placeholder="Nom d'utilisateur" class="form-control"
               value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : ''; ?>">

    </label>
    </div>
    <br>
    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
    <div class="form-group">
    <label for="content">
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Votre commentaire" class="form-control"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea>
        <?= isset($errors['content']) ? $errors['content'] : ''; ?>
    </label>
    </div>
    <br>
    <input type="submit" value="<?= $submit; ?>" name="submit" id="submit" class="btn btn-primary">
</form>