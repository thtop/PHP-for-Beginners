## Quiz 2: Arrays

1. How many elements can an array have in PHP?
   ❌ 1,024
   ✅ As many as you like
   ❌ 1,073,741,824

---

2. What is the value of `$colours[2]`?
   `$colours = ["red", "green", "blue", "orage"];`
   ❌ "green"
   ✅ "blue"
   ❌ "red"

---

3. Which is not corrent syntax for creating an array?
   ❌ `$data = array()`;
   ❌ `$data = [];`
   ✅ `$data = new array();`

---

4. What is the index of the last element of this array, "Wednesday"?
   ```php
   $data = array(
     "Monday",
     3 => "Tuesday",
     "Wednesday"
   );
   ```
   ❌ 3
   ✅ 4
   ❌ 2

---

5. Which data type can not be used as an array index?
   ✅ boolean
   ❌ integer
   ❌ string

---

6. In this multidimensional array, how do we access Carol's email address?

   ```php
   $people =  [
      [ "name" => "Alice", "email" => "alice@example.com", "height" => 1.80 ],
      [ "name" => "bob", "email"   => "bob@example.com", "height" => 1.67],
      [ "name" => "carol", "email" => "carol@example.com", "height" => 1.74]
   ];
   ```

   ✅ `$people[2]["email"]`
   ❌ `$people["Carol"]["email"]`
   ❌ `$carol["email"]`

---

7. What is displayed after running this code?

   ```php
   $fruits = [ 'apple', 'banana', 'pear', 'pomegranate'];

   foreach($fruits as $fruit) {
     echo "$fruit, ";
   }
   ```

   ❌ apple, pear, banana, pomegranate,
   ✅ apple, banana, pear, pomegranate,
   ❌ 0, 1, 2, 3
