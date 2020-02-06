# Coding Exercise 4

## HTML basics

Create a simple HTML document. It must include:

- The doctype
- An `html` element
- A `head` element, containing a `title`
- A `bocy` element

Inside the `body` element, the following:

- An `h1` heading element
- A paragraph
- An unordered list, with at least three list items
- An image, where the image source file is "example.png"

index.html

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HTML basics</title>
  </head>
  <body>
    <h1>HTML basics</h1>
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat ipsa
      aliquid quisquam iure a ut adipisci, harum expedita cupiditate,
      repellendus repellat nesciunt at ullam odit natus! Error eaque fuga enim?
    </p>

    <h2>Unordered list</h2>
    <ul>
      <li>One</li>
      <li>Two</li>
      <li>Three</li>
    </ul>

    <h2>Link</h2>
    <p><a href="page2.html">Page 2</a></p>

    <img src="example.png" alt="Example image" />
  </body>
</html>
```
