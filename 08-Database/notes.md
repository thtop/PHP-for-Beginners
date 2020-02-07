# An Introduction to Database

## Where to Store Data in a Dynamic Website

- Database server

---

## Access the Database Server Using phpMyAdmin and Create a Database

- DB: `cms`
- Collation: `utf8mb4_unicode_ci` (Character Sets and Collations in General)

USER:

- cms_www
- febBDH2b5UPyFp3j

---

## Use Tables to Store Structured Data in a Database

- Data Types in MariaDB
- Table: article
  - id: INT PK AI
  - title: VARCHAR 128
  - content: TEXT
  - published_at: DATETIME Null

---

## Select Some Data from The Database: An introduction to SQL

- SQL Statements & Structure

The SELECT statement

- `SELECT column1, column2`
- `SELECT * FROM table_name WHERE condition;`
- Comparison Operators
  - `SELECT * FROM table_name WHERE condition AND condition2 ...;`
  - `AND, OR`
  - `SELECT * FROM article WHERE title != 'An intersting post' OR title = 'First post';`

```sql
SELECT *
FROM article
WHERE title != 'An intersting post'
   OR title = 'First post'
```

---

## Using Indexes: Make Queries Faster and Order the Result Set

- Selecting data using WHERE -> Top to down
- Selection data using an index -> WHERE use index to find the WHERE clause
- `SELECT * FROM article WHERE title = 'First post';`

Ordering the result set

```sql
SELECT *
FROM table_name;
ORDER BY column1, column2;

SELECT *
FROM table_name;
ORDER BY column1 DESC;

SELECT * FROM `article` ORDER BY title;

SELECT * FROM `article` ORDER BY title DESC;
```

---

## Connect to the Database from PHP

- The database server
- Database connection data
  - host
  - database name
  - username
  - password
- mysqli_connect
- MySQL Improved Extension

---

## Query the Database from PHP And Get the Results

```php
// SQL query
$sql = "SELECT *
        FROM article
        ORDER BY published_at;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
  echo mysqli_error($conn);
} else {
  // $articles = mysqli_fetch_all($results);
  $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

  var_dump($articles);
}

```

---

## Combine PHP and HTML to Show a formatted List of Articles

```php
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
```
