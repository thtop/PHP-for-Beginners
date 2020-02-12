# Quiz 13: Object-oriented PHP

1. How do you create a new object of a class in PHP?
   ✅ Using the `new` keyword: `$user = new User();`

---

2. Given a `$user` object that has a `name` property, how do you access the value of that property?
   ✅ `$user->name`

---

3. How do you access the current **object** inside a method?
   ✅ Using `$this`

---

4. Which is the correct constructor method?
   ✅ 

   ```php
   class Thing
   {
      funciton __construct() {

      }
   }
   ```

---

5. What happens when the following code is executed?

   ```php
   class Item
   {
      private $name;
   }

   $item = new Item();
   $item->name = "example";
   ```

   ✅ An error occurs

---

6. Ture or false: static methods are called on a specific object instance of a class
   ✅ False

---

7. What happens when this code is executed?
   
   ```php
   class Item 
   {
      public CONST COLOUR = "blue";
   }
   
   $item = new Item();
   $item->COLOUR = "pink";
   
   echo Item::COLOUR;
   ```

   ✅ "blue" is displayed

---

8. What happens when this code is executed?
   
   ```php
   define('COLOUR', 'blue');
   define('COLOUR', 'red');
   
   echo COLOUR;
   ```

   ✅ An error occurs and "blue" is displayed

---
   
9.  What is desplayed when the following code is executed?
   
   ```php
   class User {
    public function showMessage() {
        echo "Hello";
    }
   }
   
   class Administrator extends User {
   
   }
   
   $person = new Administrator();
   echo $person->showMessage();
   ```

   ✅ "Hello"

---

10. What is desplayed when the following code is executed?
    
   ```php
   class User {
      public function showMessage() {
         echo "Hello";
      }
   }

   class Administrator extends User {
      public function showMessage() {
         echo "Hi there";
      }
   }
    
   $person = new Administrator();
   echo $person->showMessage();
   
   ```

   ✅ "Hi there"