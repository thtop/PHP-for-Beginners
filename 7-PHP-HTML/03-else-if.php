<?php
  $hour = 12;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>elseif</title>
</head>
<body>
  <h1>Lorem ipsum</h1>

  <?php if ($hour < 12): ?>
    Good morning
  <?php elseif ($hour < 18): ?>
    Good afternoon
  <?php elseif ($hour < 22): ?>
    Good evening
  <?php else: ?>
    Good night
  <?php endif; ?>

</body>
</html>