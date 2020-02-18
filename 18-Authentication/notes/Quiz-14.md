# Quiz 14: PDO and password hashing

1. Which type of databases can PDO connect to?
   ✅ MySQL, MariaDB, SQL Server, PostgreSQL, and many more

---

2. What advantage does PDO have over MySQLi when using prepared statements?
   ✅ You can use named placeholders intead of question marks

---

3. Which code is used to return an object of the User class in a prepared statement?
   ✅ 

   ```php
   $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
   return $stmt->fetch();
   ```
---

4. How do you get the ID of a new record after inseting it?
   ✅ With the `lastInsertId` property

---

5. Which is the best funciton to use in PHP to hash a password?
   ✅ `password_hash`

---

6. How do you verify that a password matches its hash? 
   ✅ `if (password_verify($password, $hash))`

