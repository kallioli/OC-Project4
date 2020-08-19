<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>

<head>
    <script src="https://cdn.tiny.cloud/1/dcr7fn3jkar9o2hqjufaq45fxsqerevpp0xk6usxn91kxilz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
</head>

<form method="post" action="../public/index.php?route=<?= $route; ?>">
    <label for="title">Titre</label><br>
    <input type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>
    <?= isset($errors['title']) ? $errors['title'] : ''; ?>
    <label for="content">Contenu</label><br>
    <textarea id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
    <?= isset($errors['content']) ? $errors['content'] : ''; ?>
    <input type="submit" value="<?= $submit; ?>" id="submit" name="submit">
</form>