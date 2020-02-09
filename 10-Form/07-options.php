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
  <title>List of Options</title>
</head>
<body>
  <form method="post">
    <!-- <select name="marque">
        <option value="bmw">BMW</option>
        <option value="fmc">Ford</option>
        <option value="saab">Saab</option>
    </select> -->

    <select name="marque[]" multiple>
      <option value="bmw">BMW</option>
      <option value="fmc">Ford</option>
      <option value="saab">Saab</option>
    </select>

    <button>Send</button>
  </form>
</body>
</html>