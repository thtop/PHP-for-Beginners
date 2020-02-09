# Coding Exercise 8

## HTML Forms

Add some HTML code below to create a form that looks like the image below:

form.html

```html
<?php
$posts = [1 => 'Good news', 3 => 'Read this', 5 => 'Important announcement'];

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
  </head>
  <body>

  <h1>Form</h1>

  <form>
      <div>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" />
      </div>
      
      <div>
          <label for="description">Description</label>
          <textarea></textarea>
      </div>
      <div>
          <label for="size">Size</label>
          <select id="size">
              <option name="size" value="one">One</option>
              <option name="size" value="two">Two</option>
              <option name="size" value="three">Three</option>
          </select>
      </div>
      
  </form>

  </body>
</html>
```
