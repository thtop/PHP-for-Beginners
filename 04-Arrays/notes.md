## Array

### Introduction to Arrays: Create an Array and Access its Elements

**Unknown number of variables**

```php
$article1 = "First post";
$article2 = "Another post";
$article3 = "Read this!";
//...
$article247 = "In my opinion";
```

**Array**

- an array is simple a list of other values a single variable containing
- an array can contain as few as many values as you want.



```php
$articles = [
  "First post",
  "Another post",
  "Read this!"
];
```

**Createing an array**

- use square brackets: `[ ]`

```php
$articles = [
  "First post",
  "Another post",
  "Read this!"
];
```

- use array funciton: `array()`

```php
$articles = array(
  "First post",
  "Another post",
  "Read this!"
);
```

**Array elements and indexes**
```php
$articles = [ "First post", "Another post", "Read this!"];
//                 0             1              2

$articles[0];
$articles[1];
$articles[2];

```

---

### Assign Manual Array Indexes and Create Associative Arrays

**Array indexes**
```php
$articles = [
  1 => "First post",
  3 => "Another post",
  "Read this!"
];
```

**Associative array**
```php
$articles = [
  "two" => "First post",
  "four" => "Another post",
  "six" => "Read this!"
];
```


---

### Create and Access Multidimensional Arrays

| Name  | email             | Height |
| ----- | ----------------- | ------ |
| Alice | alice@example.com | 1.80   |
| Bob   | bob@example.com   | 1.67   |
| Carol | carol@example.com | 1.74   |

```php
$alice = [
  "name"    => "Alice",
  "email"   => "alice@example.com",
  "height"  => 1.80
];

$bob = [
  "name"    => "bob",
  "email"   => "bob@example.com",
  "height"  => 1.67
];

$carol = [
  "name"    => "carol",
  "email"   => "carol@example.com",
  "height"  => 1.74
];

$people = [ $alice, $bob, $carol];
```

**Accessing multidimensional array elements**

```php
$people2 = [
  [ "name" => "Alice", "email" => "alice@example.com", "height" => 1.80 ],
  [ "name" => "bob", "email"   => "bob@example.com", "height" => 1.67],
  [ "name" => "carol", "email" => "carol@example.com", "height" => 1.74]
];

var_dump($people2);

$alice_email = $people[0]["email"];

```

---

### Process Each Element of an Array: foreach Loops

```php
$articles = [
  "First post",
  "Another post",
  "Read this!"
];

foreach ($articles as $article) {
  echo $article, ", ";
}
```


--- 

### Process the value and index of each array element using a foreach loop

