# Coding Exercise 11

## Database - updating data using MySQLi

Complete this code to **update** a record in the database using a MySQLi prepared statement.

1. Write SQL to **UPDATE** a table called **invoice:** update the **description** and **amount** columns, in that order. Add a **WHERE** clause to only update the row where the **id** column is equal to a certain value. Use **placeholders** for all the values, including the **id**. Assign your SQL to the `$sql` variable.
2. Pass the correct parameters to the `mysqli_stmt_bind_param` function, using the procedural style. Check [the documentation](https://www.php.net/manual/en/mysqli-stmt.bind-param.php) if necessary. Make sure you get the _type_ string correct - for example, the **amount** is a _float / double_, but the **id** is an integer.
3. Make the **correct function call** to get the number or records affected by the update, making sure you pass in any necessary arguments to the function, (Hint: check out [the documentation for MySQLi prepared statements](https://www.php.net/manual/en/class.mysqli-stmt.php#class.mysqli-stmt). Look for a property that will tell you the number of affected rows. Use the **procedural style** version) Assign the return value to the variable called `$affected_rows`.

Assume that the database connection is in a variable called `$conn`, and this is already set.

exercise.html

```php
<?php

$desc = "Services rendered";
$amount = 23.50;
$id = 9002;

$sql = "UPDATE invoice
        SET description = ?,
            amount = ?
        WHERE id = ?;";  // 1. Write your SQL here

$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {

    echo mysqli_error($conn);

} else {

    $ret = mysqli_stmt_bind_param($stmt, "sdi", $desc, $amount, $id);  // 2. Add the arguments here

    if (mysqli_stmt_execute($stmt)) {

        $affected_rows = mysqli_stmt_affected_rows($stmt);  // 3. Get the number of affected rows here
    }
}
?>
```
