# Using Sessions to Login and Restrict Access

## Make the Web Browser Remember you Between Visits

- HTTP is stateless
- Using sessions to remember state
- Server generates a unique identifier that is sent back to the browser along with the requested content.
- When you request another page this identifier is send back along with the request as well.
- So the server knows you are really been there before and can respond accordingly.
- PHP:  `session_start()`
- It sets a cookie in the browser that contains the same session identify.
- Cookie is simply a short string of text stored in the web browser
- PHP: `$_SESSION[]`

Remember when using sessions

- The session data is written to a file by default. This can be slow and is slower. The more data you write to it. So we only store in the session small values like a boolean or a numberic id of a record for example
- The `session_start()` line needs to be call before you send any content to the browser. This is because the session uses cookies and the cookie data is sent in the headers just like the code we saw in redirection earlier.
  
---

## Store Data in the Browser: Cookies in PHP

What are coolies?

- Cookies are basically small strings of text that a website can store in a browser.
- PHP: `setcookie('name', 'value')`
- PHP: `$_COOKIE`

---

## Store a Value in hte Session to Log in and Log out a User

- index.php
- login.php
- logout.php

---

## Add a Login form and Process the User's Login Credentials

---

## Completely Destroy the Sessin on Logout and Redirect Back to the Index Page

- PHP: `session_destroy()`
- [session_destroy](https://www.php.net/manual/en/function.session-destroy.php)
- logout.php

---

## Increase Security: Prevent Session Fixation Attacks

- [Session fixation](https://owasp.org/www-community/attacks/Session_fixation)
- [session_regenerate_id](https://www.php.net/manual/en/function.session-regenerate-id.php)
- `session_regenerate_id(true);`
- login.php

---

## Restrict Access to a Page to a Logged-in User Only

- auth.php
- new-article.php
- index.php
