<?php

require 'classes/Database.php';
require 'classes/Article.php';

$db = new Database();
$conn = $db->getConn();

if (isset($_GET['id'])) { 

 $article = Article::getByID($conn, $_GET['id']);

} else {
  $article = null;
}
?>

<?php require 'includes/header.php' ?>

    <?php if ($article) : ?>
      
      <article>
        <h2><?= htmlspecialchars($article->title); ?></h2>
        <p><?= htmlspecialchars($article->content); ?></p>
      </article>

      <a href="/PHP-for-Beginners/17-PDO/edit-article.php?id=<?= $article->id; ?>">Edit</a>

      <a href="/PHP-for-Beginners/17-PDO/delete-article.php?id=<?= $article->id; ?>">Delete</a>
      
    <?php else: ?>

      <p>Article not found.</p>

    <?php endif; ?>

      <hr />
    <p><a href="/PHP-for-Beginners/17-PDO/">Back</a></p>

<?php require 'includes/footer.php' ?>