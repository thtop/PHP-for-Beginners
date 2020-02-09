<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'includes/database.php';

    $title = mysqli_escape_string($conn, $_POST['title']);
    $content = mysqli_escape_string($conn, $_POST['content']);
    $published_at = mysqli_escape_string($conn, $_POST['published_at']);

    $sql = "INSERT INTO article (title, content, published_at) VALUES ( '$title', '$content', '$published_at');";

    // var_dump($sql); exit;

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
      echo mysqli_error($conn);
    } else {
      $id = mysqli_insert_id($conn);
      echo "Inserted record with ID: $id";
    }
  }
?>

<?php require 'includes/header.php'; ?>

<h2>New article</h2>

<form method="post">
  <div>
    <label for="title">Title</label>
    <input name="title" id="title" placeholder="Article title" />
  </div>

  <div>
    <label for="content">Content</lable>
    <textarea name="content" rows="4" cols="40" id="content" placeholder="Article content"></textarea>
  </div>

  <div>
    <label for="published_at">Publication date and time</label>
    <input type="datetime-local" name="published_at" id="published_at">
  </div>

  <button>Add</button>

</form>


<?php require 'includes/footer.php' ?>