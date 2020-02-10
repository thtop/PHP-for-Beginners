# An Introduction to Functions and Validation in PHP

## Functions: Define and Call a Function in PHP

Functions

```php
function functionName() {
  // code to be executed;
}

// call
function();
```

Function arguments

```php
function functionName($arg1, $arg2) {
  // code to be executed;
}

// call
functionName(value1, value2);
```

Optional arguments (defalut value)

```php
function functionName($arg1 = true) {
  // code to be executed;
}

// call
functionName(false);
```

Return value

```php
function functionName($arg1) {
  return $arg1;
}

// call
echo functionName('Lexa');
$value = functionName('The 100');
```

- [Function Reference](https://www.php.net/manual/en/funcref.php)
- [phpDocumentor](https://docs.phpdoc.org/latest/)

---

what is a DocBlock?

```php
/**
 * Get the message
 *
 * @param boolean $morning true if morning, false otherwise
 *
 * @return string a message relevant to if it's morning or nor
 */

function getMessage($morning) {
  if ($morning) {
    return "Good morning";
  } else {
    return "Good afternoon";
  }
}

$message = getMessage(false);
echo $message;
```

## Create a Function to Connect to the Database

```php
<?php

/**
 * Get the database connection
 *
 * @return object Connection to a MySQL server
 */

function getDB()
{
  $db_host = "localhost";
  $db_name = "cms";
  $db_user = "cms_www";
  $db_pass = "febBDH2b5UPyFp3j";

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
  }

  return $conn;
}
```

---

## Validate the Form Data and redisplay the Form with Error Messages if Invalid

```php
  $errors = [];

  if ($_POST['title'] == '') {
    // die('Title is required');
    $errors[] = 'Title is required';
  }

  if ($_POST['content'] == '') {
    $errors[] = 'Content is required';
  }

  var_dump($errors); exit;
```

```html
<!-- show errors -->
<?php if (!empty($errors)): ?>
<ul>
  <?php foreach($errors as $error): ?>
  <li><?= $error; ?></li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
<!-- end of show errors -->
```

---

## Maintain Previously-supplied Data When redisplaying an Invalid Form

```html
<form method="post">
  <div>
    <label for="title">Title</label>
    <input name="title" id="title" placeholder="Article title" value="<?= $title ?>" />
  </div>

  <div>
    <label for="content">Content</lable>
    <textarea name="content" rows="4" cols="40" id="content" placeholder="Article content"><?= $content; ?></textarea>
  </div>

  <div>
    <label for="published_at">Publication date and time</label>
    <input type="datetime-local" name="published_at" id="published_at" value="<?= $published_at; ?>">
  </div>

  <button>Add</button>

</form>
```

---

## Avoid Cross-site Scripting (XSS) Attacks: Escape Untrusted Content

Code injection

- `<input value="Hello">`
- `<inpit value="">Danger">`

```html
<!-- Input to <textarea> -->
</textarea><script>alert('hacked!');</script>

<!--
- cookie
- login
- e.g.
-->
```

- [Reserved characters](https://developer.mozilla.org/en-US/docs/Glossary/Entity#Reserved_characters)
- [htmlspecialchars](https://www.php.net/manual/en/function.htmlspecialchars.php)

---

## Insert NULL if the Publication Date is Empty

```php
if ($published_at == '') {
  $published_at = null;
}

mysqli_stmt_bind_param($stmt, "sss", $title, $content, $published_at);
```

---

## Validate the Publication Date is a Valid Date and Time

- [DATETIME literals](https://mariadb.com/kb/en/date-and-time-literals/#datetime-literals)
- [DateTime::createFromFormat](https://www.php.net/manual/en/datetime.createfromformat.php)
- [DateTime::getLastErrors](https://www.php.net/manual/en/datetime.getlasterrors.php)

```php
if ($published_at != '') {
    $date_time = date_create_from_format('Y-m-d H:i:s', $published_at);

    if ($date_time === false) {
      $errors[] = 'Invalid date and time';
    } else {
      // echo date_format($date_time, 'Y-m-d H:i:s'); exit;

      $date_errors = date_get_last_errors();

      // var_dump($date_errors); exit;

      if ($date_errors['warning_count'] > 0) {
        $errors[] = 'Invalid date and time';
      }
    }
```

---

## Redirect to the Article Page After Inserting a New Article

What is a redirect?

- get `example.com/page1.php`
- redirect to `example.com/page2.php`
- get `example.com/page2.php`
- HTML file

Response headers

- send before the actual content of the page
- [PHP header function](https://www.php.net/manual/en/function.header.php)
- [\$\_SERVER](https://www.php.net/manual/en/reserved.variables.server.php)
