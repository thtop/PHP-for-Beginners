# Database Relationship

## Create a Table and Data for Categories

- category

--- 

## One-to-one Relationships

- Article -> Category

--- 

## One-to-many Relationships Between Tables

- Article -> Category
- Article -> Category
- Article -> Category

--- 

## Joins: Selecting Data from Multiple, Related Tables at Once

WHERE

```sql
SELECT column1, column2
FROM table1_name
JOIN table2_name
WHERE table1.column = table2.column
```

ON

```sql
SELECT column1, column2
FROM table1_name
JOIN table2_name
ON table1.column = table2.column
WHERE condition
```

LEFT JOIN

```sql
SELECT column1, column2
FROM table1_name
LEFT JOIN table2_name
ON table1.column = table2.column
WHERE condition
```

LEFT OUTER JOIN

```sql
SELECT column1, column2
FROM table1_name
LEFT OUTER JOIN table2_name
ON table1.column = table2.column
WHERE condition
```

- [SQL-Joins](https://www.codeproject.com/Articles/33052/Visual-Representation-of-SQL-Joins)

--- 

## Relationship Constraints

- ON DELETE & ON UPDATE
- RESTRICT -> Use -> error
- NO ACTION -> Use -> do noting
- SET NULL -> Use -> FK set to NULL
- CASCADE -> Use -> PK will deleted / update

Example

- ON DELETE -> SET NULL
- ON UPDATE -> CASCADE

- [MariaDB Error Codes](https://mariadb.com/kb/en/mariadb-error-codes/)

--- 

## Many-to-many Relationships Between Tables

- Article < - > Category
- Article < - > Category
- Article < - > Category

```sql
SELECT * FROM table1
JOIN join_table
ON table1.id = join_table.table1_id
JOIN table2
ON join_table.table2_id = table2.id
```

Example

```sql
SELECT * FROM article
JOIN article_category
ON article.id = article_category.article_id
JOIN category
ON article_category.category_id = category.id
```

LEFT JOIN

```sql
SELECT * FROM article
LEFT JOIN article_category
ON article.id = article_category.article_id
LEFT JOIN category
ON article_category.category_id = category.id
```

LEFT JOIN + WHERE

```sql
SELECT * FROM article
LEFT JOIN article_category
ON article.id = article_category.article_id
LEFT JOIN category
ON article_category.category_id = category.id
WHERE article.id = 32
```