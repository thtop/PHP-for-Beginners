# Coding Exercise 6

## Databases - connection and selecting data

1. Given these variables containing database connection data, pass them to the `mysqli_connet` function to connect to the database. Make sure you get them in the **corrent order!** Consult [the documention here](https://www.php.net/manual/en/mysqli.construct.php) if you need to. Do not change the values of the variables.
2. Write some SQL to **select** some data from a database table:for a table called **product**, select the **id**, **name** and **created_at** columns. Order the results by the **created_at** column. Assign your SQL to the `$sql` variable.

exercise.php

```php
<?php
$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "secret";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);  // 1. Pass the above variables to this function, in the correct order

$sql = "SELECT id, name, created_at 
        FROM product 
        ORDER BY created_at;";  // 2. Write the required SQL in this variable

$results = mysqli_query($conn, $sql);
```
