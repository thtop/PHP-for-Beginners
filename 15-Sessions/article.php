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

      <a href="/15-Sessions/edit-article.php?id=<?= $article['id']; ?>">Edit</a>

      <a href="/15-Sessions/delete-article.php?id=<?= $article['id']; ?>">Delete</a>

      <!-- <form method="post" action="delete-article.php?id=<?= $article['id']; ?>"><button>Delete</button></form> -->

    <?php endif; ?>

      <hr />
    <p><a href="/15-Sessions/">Back</a></p>

<?php require 'includes/footer.php' ?>