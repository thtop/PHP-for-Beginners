<?php

// error
function errorHandler($level, $message, $file, $line) {
    throw new ErrorException($message, 0, $level, $file, $line);
}
set_error_handler('errorHandler');

// exception
function exceptionHandler($exception) {
    echo 'caught exception: ', $exception->getMessage();
}
set_exception_handler('exceptionHandler');


// $datetime = new DateTime('invalid');
$i = 1 / 0;