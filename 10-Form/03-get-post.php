<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  var_dump($_POST);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get vs Post</title>
</head>
<body>
  <form method="post">
    <label for="username">Username: </label>
    <input name="username" id="username" />
    <br /><br />
    <label for="password">Password: </label>
    <input name="password" type="passwors" id="password">
    <button>Send</button>
  </form>
</body>
</html>