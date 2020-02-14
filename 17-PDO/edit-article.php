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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $article->title = $_POST['title'];
  $article->content = $_POST['content'];
  $article->published_at = $_POST['published_at'];


  if ($article->update($conn)) {

    redirect("/PHP-for-Beginners/17-PDO/article.php?id={$article->id}");
  }
}
?>
<?php require 'includes/header.php'; ?>

<h2>Edit article</h2>

<?php require 'includes/article-form.php'; ?>

<?php require 'includes/footer.php'; ?>