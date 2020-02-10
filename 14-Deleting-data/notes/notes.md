# Deleting Data from the Database from PHP

## Delete Existing Data in the Database: The SQL DELETE Statement

The DELETE statement

```sql
DELETE FROM table_name
WHERE condition;
```

---

## Delete an Existing Article in the Database

```php
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

$sql = "DELETE FROM article
        WHERE id = ?;";

$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {
  echo mysqli_error($conn);
} else {

  mysqli_stmt_bind_param($stmt, "i", $id);

  if (mysqli_stmt_execute($stmt)) {
    
    redirect("/PHP-for-Beginners/14-Deleting-Data/");

  } else {

    echo mysqli_stmt_error($stmt);

  }
}
```

---

## Use the POST Request Method to Delete the Article

Request methods

- click -> Get
- deleting -> should use Post

```html

  <form method="post" action="delete-article.php?id=<?= $article['id']; ?>">
    <button>Delete</button>
  </form>

```

---

## Get Confirmation from the User Before Deleting the Article

```html
<h2>Delete article</h2>

<form method="post">
  <p>Are you sure?</p>

  <button>Delete</button>
  <a href="http://localhost/PHP-for-Beginners/14-Deleting-Data/article.php?id=<?= $article['id'] ?>">Cancel</a>
</form>
```

---

## Improve Database Performance: Only use SELECT * Necessary

The SELECT statement

```sql
SELECT * 
FROM table_name;
```

```sql
SELECT column1, column2
FROM table_name;
```