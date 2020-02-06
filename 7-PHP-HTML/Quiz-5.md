# Quiz 5: Mixing PHP and HTML

1. What does the **PHP closing tag** look like?
   ❌ php?>
   ✅ ?>
   ❌ -->

---

2. Which of the following will **NOT** display the value of the `$message` variable?

   ❌ `<?php echo $message; ?>`
   ✅ `<?php $message ?>`
   ❌ `<?= $message ?>`

---

3. What is the PHP alternative syntax for this code when mixing it with HTML?

   ```php
   <?php if ($condition) {
     echo "<p>...</p>";
   } ?>
   ```

   ✅

   ```php
     <?php if ($condition): ?>
       <p>...<p>
     <?php endif; ?>
   ```

   ❌

   ```php
     <?= if ($condition) ?>
       <p>...</p>
     <?= endif ?>
   ```

---

4. Whitespace in an HTML document (tabs, newlines, spaces etc.) affects how the document is displayed in the browser

   ❌ True
   ✅ False

---

5. Which is the corrent format for a comment in HTML?

   ❌ `/* this is a comment */`
   ✅ `<!-- this is a comment -->`
   ❌ `// this is a comment`

---

6. Which is the correct format for a comment in **PHP**?

   ❌ `<!-- this is a comment -->`
   ❌ `/* this is a comment`
   ✅ `/* this is a comment */`

---

7. When writing PHP, it's **required** to use a coding standard like PSR-2

   ❌ True
   ✅ False

---
