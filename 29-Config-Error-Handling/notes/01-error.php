<?php

// $i = 1 / 0; // Warning: Division by zero in D:\www\PHP-for-Beginners\29-Config-Error-Handling\notes\01-error.php on line 3

// Fatal error: Uncaught Exception: DateTime::__construct(): Failed to parse time string
// $datetime = new DateTime('invalid');

// try catch

// try {
//     $datetime = new DateTime('invalid');
// } catch (Throwable $e) {
//     echo 'Caught: ', $e->getMessage();
// }
// Caught: DateTime::__construct(): Failed to parse time string (invalid) at position 0 (i): The timezone could not be found in the database

// Function
function errorHandler($level, $message, $file, $line) {
    echo 'caught error: ', $message;
}

set_error_handler('errorHandler');

$i = 1 / 0; // caught error: Division by zero