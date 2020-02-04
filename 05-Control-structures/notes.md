# Control structures

## Run Code conditionally: the if Construct

The if construct

```php
if (condition) {
  // code to run if condition is true
}
```

```php
if (true) {
  echo "The condition is true";
}

if (false) {
  echo "The condition is false";
}
```

The if else construct

```php
if (condition) {
  // code to run if condition is true
} else {
  // code to run if condition is false
}
```

## Compare One Value to another: Comparison Operators

Comparison Operators

| Operator | Name                     | Example  |
| -------- | ------------------------ | -------- |
| ==       | equal                    | $a == $b |
| !=       | not equal                | $a != $b |
| <        | less than                | $a < $b  |
| >        | greater than             | $a > $b  |
| <=       | less than or equal to    | $a <= $b |
| >=       | greater than or equal to | $a >= $b |

## Run Code Multiple Times Based on a Confition: While Loops

The whole loop

```php
while (condition) {
  // code to run while condition is true
}

$month = 1;

while ($month <= 12) {
  echo $month . ", ";
  $month = $month + 1;
}
```

## Run Code a specific Number Of Times: For Loops

The for loop

```php
for (init; test) {
  // code to run while test is true
}
s
for ($i = 1; $i <= 10; $i++) {
  echo $i . ", ";
}

```

Increment/decrement Operators
`++$a`, `$a++`, `--$a`, `$a--`

## Add More Confitions to an If Statement Using Elseif

The elseif statement

```php
$hour = 20;

if ($hour < 12) {
  echo "Good moring";
} elseif ($hour < 18) {
  echo "Good afternoon";
} elseif ($hour < 22) {
  echo "Good evening";
} else {
  echo "Good night";
}
```

## Preform Diffent Actions Based on Different Conditions: The Switch Statement

```php
$day = "Tue";

switch ($day) {
  case "Mon":
    echo "Monday";
    break;
  case "Tue":
    echo "Tuesday";
    break;
  case "Wed":
    echo "Wednesday";
    break;
  case "Thu":
    echo "Thursday";
    break;
  case "Fri":
    echo "Friday";
    break;
  case "Set":
    echo "Saturday";
    break;
  case "Sun":
    echo "Sunday";
    break;
  default:
    echo "No information available for that day.";
}

```