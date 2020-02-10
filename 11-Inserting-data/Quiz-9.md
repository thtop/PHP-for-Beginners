# Quiz 9: Forms in HTML

1. If you don't specify an `action` attribure on a from, where is the data submitted to?

   ✅ to the same script where the form is

---

2. Which form method should be used for a search form?
   ✅ GET

---

3. Which form method should be used for a login form?

   ✅ POST

---

4. Whick one of these is **NOT** a valid input type?
   ✅ `<input type="textares">`

---

5. Which one of these will NOT aubmit a form?
   ✅ `<a>Send</a>`

---

6. Which code is correct for a control with multiple lines of text?
   ✅ `<textarea></textarea>`

---

7. Which code is correct for showing the following select control with the **second** element already selected?

   ```html
   <select>
     <option value="1">One</option>
     <option value="2">Two</option>
     <option value="3">Three</option>
   </select>
   ```

   ✅

   ```html
   <select>
     <option value="1">One</option>
     <option value="2" selected>Two</option>
     <option value="3">Three</option>
   </select>
   ```

---

8. What value is submitted for this checkbox if it's checked when the form is submitted?
   `input type="checkbox" name="acknowledged">`

   ✅ "on"

---

9. Which is the correct HTML for list of three options using radio buttons, where only one can be checked at once?

   ✅

   ```html
   <input type="radio" name="colour" value="blue" />Blue
   <input type="radio" name="colour" value="rad" />Red
   <input type="radio" name="colour" value="green" />Green
   ```

---

10. How do you make the text next to radio inputs and checkboxes clickable so that that clicking the text selects or deselects the control?
    ✅ Use an associated `label` element

---

11. How do you associate a label element with an input element?
    ✅ The `for` attribute on the label must match the `id` attribute on the input

---
