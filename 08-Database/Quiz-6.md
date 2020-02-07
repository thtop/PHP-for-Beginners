# Quiz 6: Database

1. How is data represented in a relational database like MySQL or MariaDB?
   ✅ In tables
   ❌ In folders
   ❌ In buckets

---

2. Which SQL statement is corrent for selection some data from the article table?

   ✅

    ```sql
    SELECT *
    FROM article
    WHERE id = 1;
    ```

   ❌

    ```sql
    SELECT *
    WHERE id IS 1
    FROM article
    ```

   ❌
   
    ```sql
    GET *
    FROM article
    HAVING id AS 1
    ```

---

3. Given a **user** table with this data:
   | id  | name  | email             |
   | --- | ----- | ----------------- |
   | 1   | Alice | alice@example.com |
   | 2   | Bob   | bob@example.com   |
   | 3   | Carol | carol@example.com |

   What is the result of the following query?
  
   ```sql
    SELECT name
    FROM user
    WHERE id = 2
   ```

   ❌ Alic
   ✅ Bob
   ❌ 1 Bob bob@example.com

---

4. What do you and to an **SQL statement** to change the order of the results returned?

   ❌ `ORDER`
   ✅ `ORDER BY`
   ❌ `INDEX`

---

5. What four pieces of data required to connect to a database from a PHP script?

   ❌ website domain name, hostname, username, password
   ❌ hostname, database name, username, type of database
   ✅ hostname, database name, username, password

---

6. In what format does the database return query results to the PHP script?

   ✅ In an array
   ❌ In a table
   ❌ In a file

---

7. Which one of these is correct?

   ❌ HTML sends PHP to the database, which returns data, and SQL is used to format this data in the brower.
   ✅ PHP sends SQL to the database, which returns data, and HTML is used to format this data in the browser.
   ❌ SQL sends HTML to the database, which returns data, and PHP is used to format this data in the browser.

---
