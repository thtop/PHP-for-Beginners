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
  <title>Textarea</title>
</head>
<body>
  <form method="post">
    <div>
      text: <input type="text" name="title">
    </div>

    <div>
      textarea: <textarea name="content" rows="7" cols="50" >Hello</textarea>
    </div>

    <button>Send</button>
  </form>
</body>
</html>