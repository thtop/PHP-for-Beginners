# Quiz 7: Multiple Pages in PHP

1. Which part to this URL is the **query string**?
    `http://example.com/shoe.php?page=3`

   ❌ show.php
   ❌ example.com
   ✅ page=3

---

2. Given this URL with this query string:
   `http://example.com/show.php?page=3&pring=true&lang=en`
   what does the `$_GET` array in PHP contain?

   ❌ A string: `"page=3&print=true&lang=en"`
   ✅ An array: `[ "page" => 3, "print" => "true", "lang" => "en" ]`
   ❌ An array: `[ "GET" => "page=3&print=true&lang=en"]`

---

3. What types of data can you pass in the query string?

   ❌ strings, integers, floats and booleans
   ✅ strings
   ❌ arrays

---

4. An **SQL injection** attack occurs when:

   ❌ your database password is too weak
   ✅ you insert values directly into an SQL string without checking them first
   ❌ someone hacks your database server

---

5. What's the difference between using `include` and `require` ?
   ✅ if the file isn't found, `require` will cause an error and stop the script, `include` will continue
   ❌ if the file isn't found, `include` will cause an error and stop the script, `require` will continue

---

6. What do **.htaccess files** allow you to do?

   ❌ Stop SQL injection attacks
   ✅ Configure the web server
   ❌ Include on PHP file in another

---

