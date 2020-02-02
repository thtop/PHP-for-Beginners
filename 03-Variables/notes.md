## Variables

### Write Your First PHP Code: Display a Message in Your Web Browser

**Web server**
- Serve files make a website
- Web address -> localhost
- URL: `localhost/hello.php` (via web browser)
  
**PHP**
- A programing language
- Save the file (`hello.php`) on the web server
- Request -> Execute -> send to the browser

---

### Variables in PHP: What They are, How to Create Them, and How to Name Them

```php
$message
$myName
$message23
$Full_Name

// invalid
$my-variable

```

**Naming PHP Variables**
```php

$x = "Incorrect password";

$error_message = "Incorrect password";

```

**PHP Variables are Case Sensitive**
```php
$message = "Hello";

$Message = "Hello";

```

**Naming recommendations**
```php
$message = "Hello";
$count = 3;
$error_message = "Incorrect password";
$first_name = "Dave";

```


---

### Basic Variable Types: Strings and Numbers

**Strings**
```php
$message = "Hello";
$error = "Invalid password";
$address = 'www.example.com';
$first_name = 'Dave';

```

**Numbers: integers**
```php
$count = 10;
$minimum_age = 18;
$size = 150;
$absolute_zero = -273;

```

**Numbers: floats**
```php
$pi = 3.142;
$price = 2.99;
$exchange_rate = 1.456;
$temperature = -21.34;

```

**Strings containing other values**
```php
$integer = 123;
$string = "123";
```

---

### Basic Variable Types: Boolean and Null

**Booleans**
```php
$logged_in = true;
$is_admin = false;

```

**Null**
```php
// No value assign to it yet.
$user_id = null;

```

**String containing other values**
```php
$boolean = true;
$string = "true";

$boolean = null;
$string = "null";
```

---

### Perform Operations on Variables: Operators

**Logical Operators**
- `and, or, xor, !, &&, ||`

---

### Strings: Using Single or Double Quotes and Variable Interpolation

**Single qouted**
```php
$message = 'Hello';
```

**Double qouted**
```php
$name = "Dave";
```

**Variable Interpolation**
```php
echo "Hello $name"; 
echo "Hello {$name}";
```

**Single qouted** vs **Double qouted**

```php
// 1. Escaped characters
$start2 = "3 o'clock";
$start1 = '3 o\'clock';

// 2. Interpolation support
$name = "Lexa";

echo "Hello $name";  // Hello Lexa
echo "Hello {$name}"; // Hello Lexa

// output all to string
echo 'My name is $name'; // My name is $name
```