<?php

require 'classes/Database.php';
require 'includes/auth.php';

session_start();

$db = new Database();
$conn = $db->getConn();

$sql = "SELECT *
        FROM article
        ORDER BY published_at;";

$results = $conn->query($sql);

$articles = $results->fetchAll(PDO::FETCH_ASSOC);


?>
<?php require 'includes/header.php' ?>

<!-- CHECK LOGIN OR LOGOUT -->
<?php if (isLoggedIn()): ?>

  <p>You are logged in. <a href="logout.php">Log out</a></p>
  <a href="/15-Sessions/new-article.php">New article</a>

<?php else: ?>

  <p>You are not logged in. <a href="login.php">Log in</a></p>

<?php endif; ?>
<!-- /CHECK LOGIN OR LOGOUT -->

    <?php if (empty($articles)): ?>
      <p>No articles found.</p>
    <?php else: ?>
    <ul>
      <?php foreach ($articles as $article): ?>
        <li>
            <article>
              <h2><a href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a></h2>
              <p><?= htmlspecialchars($article['content']); ?></p>
              <hr />
            </article>
        </li>
      <?php endforeach; ?>
    </ul>
      <?php endif; ?>

<?php require 'includes/footer.php' ?>