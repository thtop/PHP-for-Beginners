# Quiz 3: Arrays

1. What is displayed when this code is executed?
   ```php
   if (false) {
     echo "stip";
   } else {
     echo "go!";
   }
   ```
   ❌ stop!
   ✅ go!

---

2. What is the value of `$message` after running this code?
   ```php
   $size = 40;

   if ($size <= 40) {
     $message = "Forty or under";
   } else {
     $message = "More than forty";
   }
   ```

   ❌ More than forty
   ✅ Fprty or under

---

3. What value of `$count` is displayed after this code is executed?
  
    ```php
    $count = 1;

    while ($count <5) {
      $count = $count + 1;
    }

    echo $count;

    ```
   ✅ 5
   ❌ 4
   
---

4. What's the problem with this code?
   ```php
   $count = 1;

   while ($count < 10) {
     echo $count;
   }
   ```
   ❌ You can't echo out a number, only a string
   ✅ The value of count isn't incremented inside the loop, so the loop will never end
   ❌ $count should start at zero

---

5. What will be displayed when this code is executed?
   ```php
   $primes = [2, 3, 5, 7, 11, 13, 17, 19];

   for ($i = 1; $i <= 3; $i++) {
     echo $primes[$i] . ", ";
   }
   ```

   ❌ 2, 3, 5
   ✅ 3, 5, 7
   ❌ 1, 2, 3

---

6. With an `if` statement and multiple `elseif` statements, when is the `else` block executed?

   ```php
   if ($hour < 12) {
     echo "Good morning";
   } elseif ($hour < 18) {
     echo "Good afternoon";
   } elseif ($hour < 22) {
     echo "Good night";
   } else {
     echo "Good night";
   }
   ```
   ❌ It's never executed
   ✅ Only if none of the conditions in the `if` statement and `elseif` statements math
   ❌ It's always executed

---

7. What is displayed after running this code containing a `switch` statement?

   ```php
   $count = 1;

   switch($count) {
     case 1:
      echo "One";
     case 2:
      echo "Two"
   }
   ```

   ✅ OneTwo
   ❌ One
   ❌ Two

8. What case is used in a swith statement to match anything that isn't matched by other case?
   ```php
   switch ($i) {
    case 0:
        echo '$i is zero';
        break;
    case 1:
        echo '$i is one';
        break;
    ??????????:
       echo '$i is not equal to zero or one';
    }

   ```

   ❌ else:
   ```php
   switch ($i) {
     case 0:
      echo '$i is zero';
      break;
     case 1:
      echo '$i is one';
      break;
     else:
      echo '$i is not equal to zero or one';
   }
   ```

   ✅ default:
   ```php
    switch ($i) {
      case 0:
        echo '$i is zero';
        break;
      case 1:
        echo '$i is now';
        break;
      default:
        echo: '$i is not equal to zero or one';
    }
   ```

   ❌ otherwise:
   ```php
    switch ($i) {
      case 0:
        echo '$i is zero';
        break;
      case 1;
        echo '$i is one';
        break;
      otherwise:
        echo '$i is not equal to zero or one';
    }
   ```