# Quiz 15: Autoloading classes and requiring files

1. When is the function registered with `spl_autoload_register` called?
   ✅ whenever you create a new object that hasn't been required yet

---

2. What happends when the following code is executed?
   
   ```php
   spl_autoload_register(function ($class) {
      echo "Class: {$class}";
   });
     
    $product = new Product();s
   ```

   ✅ "Class: Product" is displayed

---

3. Which code is correct to get a value returned when using `retuire` to load a file?
   
   ✅ 

   data.php

   ```php
   <?php

   return 1234;
   ```

   index.php

   ```php
   <?php

   $value = require 'data.php'?
   ```

---

5. What is `__DIR__`?
   ✅ A predefined constant that contains the directory of the current script file

---