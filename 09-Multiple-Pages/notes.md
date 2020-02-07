# Multiple Pages in PHP

## Add a New Page to Show a Single Article

---

## Passing Data in the URL: Send the Article ID Using the Query String

The query string
`http://example.com/page.php?page=2`

Superglobals

- `$_SERVER`
- `QUERY_STRING` The query string, if any, via which the page was accessed.
- `$_GET`
  
---

## Avoid SQL Injection: Validate the ID Passed in form the Query String

- `is_numeric`
- `isset`
- Logicle Perators

---

## Don't Repeat Yourself: Extract Repeated Code to a Separate File

- Removing repeated code
- `include`
- `include_once`
- `require`
- `require_once`

---

## Organise and Secure Access to the Included Files

- .htaccess files (Apache HTTP Server)