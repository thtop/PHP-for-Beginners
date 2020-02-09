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

    <!-- One by one -->
    <!-- <p>Which colours do you like?</p>

    <div>
      <input type="checkbox" name="red"> Red
    </div>

    <div>
      <input type="checkbox" name="green"> Green
    </div>

    <div>
      <input type="checkbox" name="Blue"> Blue
    </div> -->


    <!-- Array -->
    <p>Which colours do you like?</p>

    <div>
      <input type="checkbox" name="colours[]" value="red"> Red
    </div>

    <div>
      <input type="checkbox" name="colours[]" value="green"> Green
    </div>

    <div>
      <input type="checkbox" name="colours[]" value="blue"> Blue
    </div>
    <button>Send</button>
  </form>
</body>
</html>