<?php

require 'includes/database.php';
require 'includes/article.php';

$conn = getDB();

if (isset($_GET['id'])) { 

 $article = getArticle($conn, $_GET['id']);

} else {
  $article = null;
}
?>

<?php require 'includes/header.php' ?>

    <?php if ($article === null): ?>
      <p>Article not found.</p>
    <?php else: ?>
      <article>
        <h2><?= htmlspecialchars($article['title']); ?></h2>
        <p><?= htmlspecialchars($article['content']); ?></p>
      </article>

      <a href="http://localhost/PHP-for-Beginners/13-Editing-Data/edit-article.php?id=<?= $article['id']; ?>">Edit</a>

    <?php endif; ?>

      <hr />
    <p><a href="http://localhost/PHP-for-Beginners/13-Editing-Data/">Back</a></p>

<?php require 'includes/footer.php' ?>