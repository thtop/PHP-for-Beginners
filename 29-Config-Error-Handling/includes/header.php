<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Posts</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

<div class="container">
  <header>
    <h1>My blog</h1>
  </header>

  <nav>
    <ul class="nav">
      <!-- CHECK LOGIN OR LOGOUT -->
      <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
      <?php if (Auth::isLoggedIn()) : ?>

        <li  class="nav-item"><a class="nav-link" href="/admin/">Admin</a></li>
        <li  class="nav-item"><a class="nav-link" href="/logout.php">Log out</a>

      <?php else : ?>

        <li  class="nav-item"><a class="nav-link" href="/login.php">Log in</a>

      <?php endif; ?>
      <!-- /CHECK LOGIN OR LOGOUT -->

      <li  class="nav-item"><a class="nav-link" href="/contact.php">Contact</a>
    </ul>
  </nav>

  <main>