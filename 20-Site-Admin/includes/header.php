<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Posts</title>
</head>
<body>
  <header>
    <h1>My blog</h1>
  </header>

  <nav>
    <ul>
      <!-- CHECK LOGIN OR LOGOUT -->
      <li><a href="/">Home</a></li>
      <?php if (Auth::isLoggedIn()) : ?>

        <li><a href="/admin/">Admin</a></li>
        <li><a href="/logout.php">Log out</a>

      <?php else : ?>

        <li><a href="/login.php">Log in</a>

      <?php endif; ?>
      <!-- /CHECK LOGIN OR LOGOUT -->
    </ul>
  </nav>

  <main>