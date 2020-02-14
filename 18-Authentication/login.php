<?php

require 'config/config.php';
require 'includes/url.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

  if ($_POST['username'] == 'dave' && $_POST['password'] == 'secret') {

    session_regenerate_id(true);

   $_SESSION['is_logged_in'] = true;

   redirect($ROOT_PATH);

  } else {

    $error = "login incorrect";

  }

}

?>
<?php require 'includes/header.php'; ?>

<?php if (!empty($error)): ?>
  <p><?= $error ?></p>
<?php endif; ?>

<h2>Login</h2>

<form method="post">
  <div>
    <label for="username">Username</lable>
    <input name="username" id="username" >
  <div>

  <div>
    <label for="password">Password</lable>
    <input type="password" name="password" id="password" >
  <div>
  
  <button>Log in</button>
</form>

<?php require 'includes/footer.php'; ?>