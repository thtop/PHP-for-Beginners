# Pagination

## Pagination: Split Database Results up Into Pages

```sql
SELECT * FROM users
ORDER BY name
LIMIT 3
OFFSET 3
```

---

## Add a Method to the Article Class to get a Single Page of Article Records

---

## Add a Pagination Class and Calculate the offset and Limite from the Page Number

- `records_per_page = 3`
- `$offset = $records_per_page * ($page -1)`
- 3 * (1-1) = 0
- 3 * (2-1) = 3
- 3 * (3-1) = 6

---

## Get the Page Number from the Query String

- [Ternary Operator](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary)

```php
if (isset($_GET['page'])) {
  $paginator = new Paginator($_GET['page'], 4);
} else {
  $paginator = new Paginator(1, 4);
}
```

```php
$paginator = new Paginator(isset($_GET['page']) ? $_GET['page'] : 1, 4);
```

- [Null coalescing operator](https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.null-coalesce-op)

```php
$paginator = new Paginator($_GET['page'] ?? 1, 4);
```

---

## Validate the Page Number using the `filter_var` Function

- [filter_var](https://www.php.net/manual/en/function.filter-var.php)
- [Validate filters](https://www.php.net/manual/en/filter.filters.validate.php)

---

## Add Previous and Next Pagination Links

---

## Calculate the Total Number of Records and Pages

- [COUNT](https://mariadb.com/kb/en/count/)
- [PDO::query](https://www.php.net/manual/en/pdo.query.php)
- [PDOStatement::fetchColumn](https://www.php.net/manual/en/pdostatement.fetchcolumn.php)

```php
/**
 * Get a count of the total number of records
 * 
 * @param object $conn Connection to the database
 * 
 * @return integer The total number of records
 */
public static function getTotal($conn)
{
    return $conn->query('SELECT COUNT(*) FROM article')->fetchColumn();
}
```

---

## Add Pagination to the admin Index and Create Shared Pagination Links

- [REQUEST_URI](https://www.php.net/manual/en/reserved.variables.server.php)
- [strtok](https://www.php.net/manual/en/function.strtok.php)
