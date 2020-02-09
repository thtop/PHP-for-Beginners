# Inserting Data Into the Database from PHP

## Add a Form to Insert a New Article

---

## Insert Data Into the Database: The SQL INSERT INTO Statement

The INSERT INTO statement

```sql
INSERT INTO table_name
VALUES (value1, value2, value3);
```

```sql
INSERT INTO table_name (column1, column2)
VALUES (value1, value2);
```

```sql
INSERT INTO table_name (column1, column2)
VALUES (value1, value2),
       (value3, value4),
       (value5, value6);
```

---

## Insert a New Article Into the Database and Get the ID of the New Record

```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'includes/database.php';

    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_at = $_POST['published_at'];

    $sql = "INSERT INTO article (title, content, published_at) VALUES ( '$title', '$content', '$published_at');";

    var_dump($sql); exit;

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
      echo mysqli_error($conn);
    } else {
      $id = mysqli_insert_id($conn);
      echo "Inserted record with ID: $id";
    }
  }
```

---

## How SQL Injection Attacks Work

Unsafe SQL strings

```sql
$sql = 'INSART ... VALUES ('". $title ."')";
```

Empty

| Variable | SQL Statement          |
| -------- | ---------------------- |
| \$title  |                        |
| \$sql    | INSERT ... VALUES ('') |

Strings

| Variable | SQL Statement                 |
| -------- | ----------------------------- |
| \$title  | example                       |
| \$sql    | INSERT ... VALUES ('example') |

Single Quotes: error

| Variable | SQL Statement                 |
| -------- | ----------------------------- |
| \$title  | o'clock                       |
| \$sql    | INSERT ... VALUES ('o'clock') |

SQL

```sql
SELECT password FROM user WHERE user = 'root' LIMIT 1
```

SQL Injection

```SQL
$sql = "INSERT INTO article (title, content, published_at) VALUES ( '$title', '$content', '$published_at');";
```

```sql
', (SELECT password FROM mysql.user WHERE user = 'root' LIMIT 1), ('
```

Result string

```sql
INSERT INTO article (title, content, published_at)
VALUES ('', '(SELECT password FROM mysql.user WHERE user = 'root' LIMIT 1)', ''),
       ('', '', '')
```

---

## Avoid SQL Injection Attacks: Escape Input

`mysqli_escape_string()`

```php
$title = mysqli_escape_string($conn, $_POST['title']);
$content = mysqli_escape_string($conn, $_POST['content']);
$published_at = mysqli_escape_string($conn, $_POST['published_at']);

$sql = "INSERT INTO article (title, content, published_at) VALUES ( '$title', '$content', '$published_at');";
```

---

## Avoid SQL Injection Attacks: Use Prepared Statements

```php
<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'includes/database.php';

    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_at = $_POST['published_at'];

    $sql = "INSERT INTO article (title, content, published_at) VALUES (?, ?, ?);";


    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
      echo mysqli_error($conn);
    } else {

      mysqli_stmt_bind_param($stmt, "sss", $title, $content, $published_at);

      if (mysqli_stmt_execute($stmt)) {
        $id = mysqli_insert_id($conn);
        echo "Inserted record with ID: $id";
      } else {
        echo mysqli_stmt_error($stmt);
      }

    }
  }
?>
```