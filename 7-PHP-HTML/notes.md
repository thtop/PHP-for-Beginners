# Mixing PHP and HTML

## Create Dynamic Content: Mixing HTML and PHP

HTML

- How to display a document
- Send by the server
- Interpreter by web browser (client)

PHP

- A programming language
- Can be used to create manipulate and output data
- Run on the web server and the result sent to the browser
- The browser doesn't know that it's PHP code that has sent it some data it just receives whatever text PHP has outputted.
- No PHP code goes to the browser

PHP tags

- `<p>Hello, <?php echo "Dave"; ?>!</p>`
- `<p>Hello, <?= $name; ?></p>`

---

## Use PHP Control Structures Mixed with HTML

Alternative control structure syntax

```php
<h1>Heading</h1>

<?php if (condition): ?>

  <p>...</p>

 } ?>

 <p>more html</p>
```

```php
<h1>Heading</h1>

<?php if (condition): ?>

  <p>...</p>

 <?php endif; ?>

 <p>more html</p>
```

---

## Make HTML More Readable: Use Whitespace and Comments

- atom: atom-beautify
- vs-code: set save and format
- Comments in HTML: `<!-- this is a comment -->` or multiple lines

---

## Addendum: Changes to the avaliable resources in the following video

In the following video, reference is made to a website that you can upload your code to and it will fix the layout:

[http://phpio.net/tools/csfixer](http://phpio.net/tools/csfixer)

This website is no longer available.

However, it's much easier to use the alternatives mentioned in the same video - download the code fixing tool, or use one that's integrated into your editor.

(this addendum will be removed once the following video has been re-recorded!)

---

## Make PHP Easier To Maintain: Use Comments and Coding Standards

- `// Comment in one line`
- `/* Comment more than one line */`
- `/** Commments */`
- PHP-FIG: [https://www.php-fig.org/](https://www.php-fig.org/)
