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
  <title>List of Group</title>
</head>
<body>
  <form method="post">

    <!-- Group -->
    <select name="country">
      <optgroup label="Europe">
        <option value="geramy">Germany</option>
        <option value="france">France</option>
        <option value="uk">United Kingdom</option>
      </optgroup>
      <optgroup label="American">
        <option value="brazil">Brazil</option>
        <option value="canada">Canada</option>
        <option value="uas">United States</option>
      </optgroup>
    </select>

    <!-- default select -->
    <select name="country">
      <optgroup label="Europe">
        <option value="geramy">Germany</option>
        <option value="france">France</option>
        <option value="uk" selected>United Kingdom</option>
      </optgroup>
      <optgroup label="American">
        <option value="brazil">Brazil</option>
        <option value="canada">Canada</option>
        <option value="uas">United States</option>
      </optgroup>
    </select>

    <button>Send</button>
  </form>
</body>
</html>