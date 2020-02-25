<?php


// Function
function exceptionHandler($exception) {
    echo 'caught exception: ', $exception->getMessage();
}

set_exception_handler('exceptionHandler');

$datetime = new DateTime('invalid');

// caught exception: DateTime::__construct(): Failed to parse time string (invalid) at position 0 (i): The timezone could not be found in the database