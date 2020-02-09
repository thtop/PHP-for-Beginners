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
  <title>Label</title>
</head>
<body>
  <form method="post">
  
    <div>
      <label><input type="checkbox" name="visible" value="yes">Visible</label>
    </div>

    <div>
      <p>Color: </p>
      <label>
        <input type="radio" name="colour" value="green" checked>Green
      </label><br />

      <label>
        <input type="radio" name="colour" value="red" />Red
      </label><br />
      
      <label>
        <input type="radio" name="colour" value="green">Green
      </label>

    </div>

    <button>Send</button>
  </form>
</body>
</html>