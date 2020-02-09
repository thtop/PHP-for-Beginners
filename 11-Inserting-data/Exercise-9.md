# Coding Exercise 9

## Database - inserting data

Complete this code to insert a value into the database using a MySQLi prepared statement.

1. Write SQL to insert **a string record** into a table called **product**: insert values into the **name**, **description** and **price** columns, in that order. Use **placeholders** for the values. Assign your SQL to the `$sql` variable.
2. Pass the correct parametes to the `mysqli_stmt_bind_param` function, using the procedural style. **Use the declared variables** Check [the documentation](https://www.php.net/manual/en/mysqli-stmt.bind-param.php) if necessary. Make sure you get the *type* string correct - for example, the **name** is a string, but the **prict** has a decimal part (i.e. called a float or double).
3. Make the **correct function call** to get the **ID** of the newly-inserted record, making sure you pass in any neseeary arguments to that function. Assign the return value to the variable called `id`.


Assume that the database connection is in a variable called `$conn`, and this is already set.

exercise.html

```php
<?php

$name = "Radio";
$desc = "A device for listening to radio broadcasts";
$price = 14.99;

$sql = "INSERT INTO product (name, description, price) values (?, ?, ?)";  // 1. Write your SQL here

$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {

    echo mysqli_error($conn);

} else {

    $ret = mysqli_stmt_bind_param($stmt, "ssd", $name, $desc, $price);  // 2. Add the arguments here

    if (mysqli_stmt_execute($stmt)) {

        $id =  mysqli_insert_id($conn);  // 3. Get the ID of the newly-inserted record here
            
    }
}

?>
```
