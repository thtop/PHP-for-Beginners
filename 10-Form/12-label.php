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
      <label for="title">Title:</label>
      <input type="text" name="title" id="title">
    </div>

    <div>
      Content: <textarea name="content" rows="4" cols="40"></textarea>
    </div>

    <div>
      <input type="checkbox" name="visible" value="yes" id="visible"> <label for="visible">Visible</label>
    </div>

    <div>
      <p>Color: </p>
      <input type="radio" name="colour" value="green" id="colour_green"><label for="colour_green">Green</label><br />
      <input type="radio" name="colour" value="red" id="colour_red"><label for="colour_red">Red</label><br />
      <input type="radio" name="colour" value="blue" id="colour_blue"><label for="colour_blue">Blue</label><br />

    </div>

    <button>Send</button>
  </form>
</body>
</html>