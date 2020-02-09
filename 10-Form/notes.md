# An Introduciton to HTML Forms

## Getting data from the User

---

## Change the method the form Uses to Send its Data: get vs post

GET vs POST

| Description     | get | post |
| --------------- | --- | ---- |
| bookmarkable?   | ✅   | ❌    |
| sensitive data? | ❌   | ✅    |
| size limit?     | ✅   | ❌    |

Get

- Getting some data from the we server
  - search result

Post

- Chaning data on the server
- Inserting
- Updating
- Deleting

---

## Get Different Types of Data from the User: Basic Input Types

- [https://devdocs.io/html/element/input/](https://devdocs.io/html/element/input/)
- [http://mobileinputtypes.com/](http://mobileinputtypes.com/)
- [https://caniuse.com/](https://caniuse.com/)

---

## Access Data from the form on the Server

- `name` attribure
- `hidden` type User can't see (can see in code HTML). and useing the `value` attribure for contain data 

Input 3 types can't control where we can enter a value

- image
- button
- submit

Button Types

- submit — Submits the current form data. (This is default.)
- reset — Resets data in the current form.
- button — Just a button. Its effects must be controlled by something else (that is, with JavaScript).

---

## Add a Multi-line Text Control: the textarea Element

```html
<div>
  textarea: <textarea name="content" rows="7" cols="50" >Hello</textarea>
</div>
```

---

## Present a Fixed List of Options: the Select Element

```html
<select name="marque">
    <option value="bmw">BMW</option>
    <option value="fmc">Ford</option>
    <option value="saab">Saab</option>
</select>
```

multiple

```html
<select name="marque[]" multiple>
  <option value="bmw">BMW</option>
  <option value="fmc">Ford</option>
  <option value="saab">Saab</option>
</select>
```

Groups & default selected

```html

<!-- Group -->
    <select name="country">
      <optgroup label="Europe">
        <option value="geramy">Germany</option>
        <option value="france">France</option>
        <option value="uk">United Kingdom</option>
      </optgroup>
      <optgroup label="American">
        <option value="brazil">Brazil</option>
        <option value="canada">Canada</option>
        <option value="uas">United States</option>
      </optgroup>
    </select>

    <!-- default select -->
    <select name="country">
      <optgroup label="Europe">
        <option value="geramy">Germany</option>
        <option value="france">France</option>
        <option value="uk" selected>United Kingdom</option>
      </optgroup>
      <optgroup label="American">
        <option value="brazil">Brazil</option>
        <option value="canada">Canada</option>
        <option value="uas">United States</option>
      </optgroup>
    </select>

```

---

## Toggle an Option on or off: checkboxes

Checkbox

```html
<div>
  <input type="checkbox" name="terms" value="yes" checked/> I agree to the terms
<div>
```

One by one

```html
<p>Which colours do you like?</p>

<div>
  <input type="checkbox" name="red"> Red
</div>

<div>
  <input type="checkbox" name="green"> Green
</div>

<div>
  <input type="checkbox" name="Blue"> Blue
</div>
```

Array

```html
<p>Which colours do you like?</p>

<div>
  <input type="checkbox" name="colours[]" value="red"> Red
</div>

<div>
  <input type="checkbox" name="colours[]" value="green"> Green
</div>

<div>
  <input type="checkbox" name="colours[]" value="blue"> Blue
</div>

```

---

## Select only one Option from a List: Radio Buttons

```html
<div>
    <p>Which colour do you like?</p>

    <input type="radio" name="colour" value="blue" checked>Blue <br />
    <input type="radio" name="colour" value="red">Red <br />
    <input type="radio" name="colour" value="green">Green
</div>

```

---

## Add an Accessible Caption to Each Input: the Label Element

Labels

```html
<label for="title">Title</label>
<input id="title" name="article_title">
```

Checkbox and Radio

```html
<div>
  <label><input type="checkbox" name="visible" value="yes">Visible</label>
</div>

<div>
  <p>Color: </p>
  <label>
    <input type="radio" name="colour" value="green" checked />Green
  </label><br />

  <label>
    <input type="radio" name="colour" value="red" />Red
  </label><br />
  
  <label>
    <input type="radio" name="colour" value="green">Green
  </label>

</div>
```

---

## Make the Form Easier to Use: fieldsets and placeholders

```html
<fieldset>
    <legend>Article</legend>
    <div>
        <label for="title">Title</label>:
        <input type="text" name="title" id="title" placeholder="Article title">
    </div>

    <div>
        <label for="content">Content</label>:
        <textarea name="content" rows="4" cols="40" id="content" placeholder="Content"></textarea>
    </div>
</fieldset>
```

---

## Common form Control Attributes: readonly, disabled  and autofocus

- readonly
- disable
- autofocus

---

## Validate Input Using HTML5 form Validation

- [http://html5pattern.com/](http://html5pattern.com/)
- HTMLSelectElement.setCustomValidity (disable on mobile)

```html
<form method="post" novalidate>

    <div>
        postcode: <input name="postcode"
        pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}"
        title="Please enter a valid UK postcode">
    </div>

    <div>
        email: <input type="email" name="email" required>
    </div>

    <div>
        url: <input type="url" name="url">
    </div>

    <div>
        number: <input type="number" name="count" min="1" max="10">
    </div>

    <button>Send</button>

</form>
```