<!DOCTYPE html>
<html>
<head>
<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script></head>
<body>
  <?php
/**
 * Si existance d'un article, alors on affiche ses données pré-remplies => modification
 * Sinon champs vide => insertion
 * Affichage des erreurs de validation des données sous les champs correspondants
 *
 * La route générée est :
 * Si données POST : edition donc editArticle pour modification
 * Si pas de données POST : addArticle pour ajout
 */

$route = isset($post) && $post->get('id') ? 'editArticle&articleId=' . $post->get('id') : 'addArticle';
$title = isset($post) ? htmlspecialchars($post->get('title')) : '';
$content = isset($post) ? htmlspecialchars($post->get('content')) : '';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>
<div class="container">
  <div class="row">
    
<form style="margin-top: 50px;" action="../public/index.php?route=<?= $route; ?>" method="post">
<div class="form-group">
    <input class="form-control-lg" style="width: 100%;"  type="text" id="title" name="title" value="<?= $title; ?>" placeholder="Titre"><br>
    <?= isset($errors['title']) ? $errors['title'] : '' ?>
    </div>
    <br>
    <textarea name="content"id="contenu" cols="30" rows="10"><?= $content; ?></textarea><br>
    <?= isset($errors['content']) ? $errors['content'] : '' ?>
 
    <input type="submit" class="btn btn-primary" value="<?= $submit; ?>" id="submit" name="submit">
</form>
</div>
    </div>
 <script>
   CKEDITOR.replace( 'contenu', {allowedContent : true} );
 </script>
