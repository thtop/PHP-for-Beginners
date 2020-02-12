<?php

require 'includes/database.php';
require 'includes/article.php';
require 'includes/url.php';

$conn = getDB();

if (isset($_GET['id'])) { 

 $article = getArticle($conn, $_GET['id']);

  if ($article) {

    $id = $article['id'];
    $title = $article['title'];
    $content = $article['content'];
    $published_at = $article['published_at'];

  } else {
    die("article not found");
  }

} else {

  die("id not supplied, article not found");

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $title = $_POST['title'];
  $content = $_POST['content'];
  $published_at = $_POST['published_at'];

  $errors = validateArticle($title, $content, $published_at);

  if (empty($errors)) { 
    // die("Form is valid");

    $sql = "UPDATE article
            SET title = ?,
                content = ?,
                published_at = ?
            WHERE id = ?;";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
      echo mysqli_error($conn);
    } else {

      if ($published_at == '') {
        $published_at = null;
      }

      mysqli_stmt_bind_param($stmt, "sssi", $title, $content, $published_at, $id);

      if (mysqli_stmt_execute($stmt)) {
       
        redirect("/15-Sessions/article.php?id=$id");
        
        } else {

          echo mysqli_stmt_error($stmt);

        }
      }
    }
}
?>
<?php require 'includes/header.php'; ?>

<h2>Edit article</h2>

<?php require 'includes/article-form.php'; ?>

<?php require 'includes/footer.php'; ?>