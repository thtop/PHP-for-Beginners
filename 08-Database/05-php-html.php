<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "febBDH2b5UPyFp3j";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
  echo mysqli_connect_error();
  exit;
}

// SQL query
$sql = "SELECT *
        FROM article
        -- WHERE id = 0
        ORDER BY published_at;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
  echo mysqli_error($conn);
} else {
  // $articles = mysqli_fetch_all($results);
  $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

  // var_dump($articles);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Posts</title>
</head>
<body>
  <header>
    <h1>My blog</h1>
  </header>

  <main>
    <?php if (empty($articles)): ?>
      <p>No articles found.</p>
    <?php else: ?>
    <ul>
      <?php foreach ($articles as $article): ?>
        <li>
            <article>
              <h2><?= $article['title']; ?></h2>
              <p><span>Date: <?= $article['published_at'] ?></span></p>
              <p><?= $article['content']; ?></p>
              <hr />
            </article>
        </li>
      <?php endforeach; ?>
    </ul>
      <?php endif; ?>
  </main>
</body>
</html>