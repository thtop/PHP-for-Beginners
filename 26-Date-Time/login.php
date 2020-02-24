<?php

require 'includes/init.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

  $conn = require 'includes/db.php';

  if (User::authenticate($conn, $_POST['username'], $_POST['password'])) {

    Auth::login();

    Url::redirect('/admin/index.php');

  } else {

    $error = "login incorrect";

  }
}

?>
<?php require 'includes/header.php'; ?>

<?php if (!empty($error)) : ?>
  <p><?= $error ?></p>
<?php endif; ?>

<h2>Login</h2>

<form method="post">
  <div>
    <label for="username">Username</lable>
    <input name="username" id="username">
  </div>

  <div>
    <label for="password">Password</lable>
    <input type="password" name="password" id="password">
  </div>

  <button>Log in</button>
</form>

<?php require 'includes/footer.php'; ?>