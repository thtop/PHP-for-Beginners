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
  <title>Checkboxes</title>
</head>
<body>
  <form method="post">
    <div>
      <input type="checkbox" name="terms" value="yes" checked/> I agree to the terms
    <div>

    <button>Send</button>
  </form>
</body>
</html>