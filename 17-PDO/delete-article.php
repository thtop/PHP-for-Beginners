<?php

require 'classes/Database.php';
require 'classes/Article.php';
require 'includes/url.php';

$db = new Database();
$conn = $db->getConn();

if (isset($_GET['id'])) {

  $article = Article::getByID($conn, $_GET['id']);

  if (!$article) {
    die("article not found.");
  }
} else {

  die("id not supplied, article not found");
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {

  if ($article->delete($conn)) {

    redirect("/PHP-for-Beginners/17-PDO/");
  }
}
?>

<?php require 'includes/header.php'; ?>

<h2>Delete article</h2>

<form method="post">
  <p>Are you sure?</p>

  <button>Delete</button>
  <a href="/PHP-for-Beginners/17-PDO/article.php?id=<?= $article->id; ?>">Cancel</a>
</form>

<?php require 'includes/footer.php'; ?>