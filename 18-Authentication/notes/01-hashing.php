<?php

$password = 'secret';

// $hash = password_hash($password, PASSWORD_DEFAULT);

// echo $hash;

// $2y$10$VnJAzI.cTP7gz5ccfGMMZuegAHHsDHxoDY32bd4gab1uHMpjuWoXi

$hash = '$2y$10$VnJAzI.cTP7gz5ccfGMMZuegAHHsDHxoDY32bd4gab1uHMpjuWoXi';

var_dump(password_verify($password, $hash)); // bool(true) 