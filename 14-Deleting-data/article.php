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

      <a href="http://localhost/PHP-for-Beginners/14-Deleting-Data/edit-article.php?id=<?= $article['id']; ?>">Edit</a>

      <a href="http://localhost/PHP-for-Beginners/14-Deleting-Data/delete-article.php?id=<?= $article['id']; ?>">Delete</a>

      <!-- <form method="post" action="delete-article.php?id=<?= $article['id']; ?>"><button>Delete</button></form> -->

    <?php endif; ?>

      <hr />
    <p><a href="http://localhost/PHP-for-Beginners/14-Deleting-Data/">Back</a></p>

<?php require 'includes/footer.php' ?>