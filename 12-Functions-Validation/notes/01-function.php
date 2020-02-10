<?php

// function showMessage() {
//   echo "Hello!";
// }

// showMessage();


// argument
// function showMessage($name) {
//   echo "Hello $name";
// }

// showMessage('Lexa');

// Default value
// function showMessage($name = "Clarke") {
//   echo "Hello $name";
// }

// showMessage();

// return value
// function getMessage($name = 'Bob') {
//   return "Hello $name";
// }

// $message = getMessage();
// echo $message;


// if else

/**
 * Get the message
 * 
 * @param boolean $morning true if morning, false otherwise
 * 
 * @return string a message relevant to if it's morning or nor
 */

function getMessage($morning) {
  if ($morning) {
    return "Good morning";
  } else {
    return "Good afternoon";
  }
}

$message = getMessage(false);
echo $message;


// 