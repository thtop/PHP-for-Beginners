# Editing Data in the Database from PHP

## Edition Existing Articles: Create a Function to Get a Single Article

```php
<?php

/**
 * Get the article record based on the ID
 *
 * @param object $conn Connection to the database
 * @param integer $id the article ID
 *
 * @return mixed An associative array containing the article with that ID, or null if not found
 */
function getArticle($conn, $id)
{
  $sql = "SELECT *
          FROM article
          WHERE id = ?;";

  $stmt = mysqli_prepare($conn, $sql);

  if ($stmt === false) {
    echo mysqli_error($coon);
  } else {
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
      $result = mysqli_stmt_get_result($stmt);

      return mysqli_fetch_array($result, MYSQLI_ASSOC);
    }
  }
}
```

---

## Add a Form for Editing an Existing Article

```php
if (isset($_GET['id'])) {

 $article = getArticle($conn, $_GET['id']);

  if ($article) {
    $title = $article['title'];
    $content = $article['content'];
    $published_at = $article['published_at'];

  } else {
    die("article not found");
  }

} else {

  die("id not supplied, article not found");
  // $article = null;

}

```

---

## Add a Validation Function and Validate the Form Data

---

## Change Existing Data in the Database: The SQL UPDATE Statement

The UPDATE statement

```sql
UPDATE table_name
SET column1 = value1,
    column2 = value2,
WHERE condition;
```

---

## Update an Existing Article in the Database

- File: edit-article.php

---

## Create a Function to Redirect to Another URL

- File: url.php
