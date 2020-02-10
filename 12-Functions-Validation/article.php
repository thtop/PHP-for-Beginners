<?php

require 'includes/database.php';

$conn = getDB();

if (isset($_GET['id']) && is_numeric($_GET['id'])) { 

  $sql = "SELECT *
          FROM article
          WHERE id = {$_GET['id']};";

  $results = mysqli_query($conn, $sql);

  if ($results === false) {
    echo mysqli_error($conn);
  } else {
    $article = mysqli_fetch_assoc($results);
  }

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
    <?php endif; ?>

    <p><a href="http://localhost/PHP-for-Beginners/12-Functions-Validation/">Back</a></p>

<?php require 'includes/footer.php' ?>