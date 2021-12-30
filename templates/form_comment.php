<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>
<form action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()) ?>"
      method="post">
      <div class="form-group">
    <label for="pseudo">
        <input type="text" name="pseudo" class="form-control"  id="pseudo" placeholder="Pseudo"
               value="<?= ucfirst(htmlspecialchars($this->session->getUserInfo('pseudo')))?>">
    </label>
      
    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
      </div><br>
    <div class="form-group">
    <label for="content">
        <textarea name="content" id="content" class="form-control"  cols="30" rows="10" placeholder="Votre commentaire"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea>
        <?= isset($errors['content']) ? $errors['content'] : ''; ?>
    </label><br>
</div>
    <input type="submit" class="btn btn-primary" value="<?= $submit; ?>" name="submit" id="submit">
</form>