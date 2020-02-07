<?php

// http://localhost/09-Multiple-Pages/querystring.php?page=2
// var_dump($_SERVER["QUERY_STRING"]); // "page=2"


// http://localhost/09-Multiple-Pages/querystring.php?page=2&color=green&print=true
var_dump($_GET);
/*
 array(3) {
  ["page"]=>
  string(1) "2"
  ["color"]=>
  string(5) "green"
  ["print"]=>
  string(4) "true"
  }
 */