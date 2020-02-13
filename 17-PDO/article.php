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

      <a href="/PHP-for-Beginners/17-PDO/edit-article.php?id=<?= $article['id']; ?>">Edit</a>

      <a href="/PHP-for-Beginners/17-PDO/delete-article.php?id=<?= $article['id']; ?>">Delete</a>

    <?php endif; ?>

      <hr />
    <p><a href="/PHP-for-Beginners/17-PDO/">Back</a></p>

<?php require 'includes/footer.php' ?>