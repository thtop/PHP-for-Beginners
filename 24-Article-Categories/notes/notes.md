# Using Relationships: Article Categories

## Show an Article's Categories on the Individual Article  Page

- article.php
- Article.php

---

## Get an Article's Categories in an Object Method

- article.php
- Article.php
- edit-article.php

---

## Add a Category Class and form Inputs to edit an Article's Categories

- Category.php
- [array_column](https://www.php.net/manual/en/function.array-column.php)

---

## Insert Article Categories while Avoiding Duplicate Records in the Join Table

- [MariaDB Error Codes](https://mariadb.com/kb/en/mariadb-error-codes/)
- [INSERT IGNORE](https://mariadb.com/kb/en/insert-ignore/)
- Article.php -> setCategories()

```php
    public function setCategories($conn, $ids)
    {
        if ($ids) {
            $sql = "INSERT IGNORE INTO article_category (article_id, category_id)
                    VALUES ({$this->id}, :category_id)";
            
            $stmt = $conn->prepare($sql);

            foreach ($ids as $id) {
                $stmt->bindValue(':category_id', $id, PDO::PARAM_INT);
                $stmt->execute();
            }
        }
        
    }
```

---

## Insert Article Categories more Efficiently using a Single Query

- [implode](https://www.php.net/manual/en/function.implode.php)
- [PDOStatement::bindValue](https://www.php.net/manual/en/pdostatement.bindvalue.php)
- Article.php -> setCategories()

```php
    public function setCategories($conn, $ids)
    {
        if ($ids) {
            $sql = "INSERT IGNORE INTO article_category (article_id, category_id)
                    VALUES ";
            
            $values = [];

            foreach ($ids as $id) {
                $values[] = "({$this->id}, ?)";
            }

            $sql .= implode(", ", $values);

            //var_dump($sql); exit;
            // string(115) "INSERT IGNORE INTO article_category (article_id, category_id) VALUES (32, ?), (32, ?), (32, ?)" 
            
            $stmt = $conn->prepare($sql);

            foreach ($ids as $i => $id) {
                $stmt->bindValue($i + 1, $id, PDO::PARAM_INT);
            }
            
            $stmt->execute();
        }
```

---

## Delete Article Category Records if Unchecked in the Form

- [NOT IN](https://mariadb.com/kb/en/not-in/)
- [array_fill](https://www.php.net/manual/en/function.array-fill.php)
- [count](https://www.php.net/manual/en/function.count.php)

```php
    public function setCategories($conn, $ids)
    {
        if ($ids) {
            $sql = "INSERT IGNORE INTO article_category (article_id, category_id)
                    VALUES ";
            
            $values = [];

            foreach ($ids as $id) {
                $values[] = "({$this->id}, ?)";
            }

            $sql .= implode(", ", $values);

            //var_dump($sql); exit;
            // string(115) "INSERT IGNORE INTO article_category (article_id, category_id) VALUES (32, ?), (32, ?), (32, ?)" 
            
            $stmt = $conn->prepare($sql);

            foreach ($ids as $i => $id) {
                $stmt->bindValue($i + 1, $id, PDO::PARAM_INT);
            }

            $stmt->execute();
        }

        $sql = "DELETE FROM article_category
                WHERE article_id = {$this->id}";

        if ($ids) {

            $placeholders = array_fill(0, count($ids), '?');

            $sql .= " AND category_id NOT IN (" . implode(", ", $placeholders) . ")";
        }

        //var_dump($sql); exit; // string(96) "DELETE FROM article_category WHERE article_id = 7 AND category_id NOT IN (?, ?)"

        $stmt = $conn->prepare($sql);

        foreach ($ids as $i => $id) {
            $stmt->bindValue($i + 1, $id, PDO::PARAM_INT);
        }

        $stmt->execute();
        
    }

```

---

## Add Categories When Inserting a new Article Redord

---

## Pagination and Join: Show Categories in the Index Page