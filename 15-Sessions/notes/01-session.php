<?php

session_start();

// if (isset($num)) {
//   $num++;
// } else {
//   $num = 1;
// }

// var_dump($num);


if (isset($_SESSION['count'])) {
  $_SESSION['count']++;
} else {
  $_SESSION['count'] = 1;
}

var_dump($_SESSION['count']);

