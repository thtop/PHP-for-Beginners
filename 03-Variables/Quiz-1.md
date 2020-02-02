## Quiz 1: PHP concepts, variables and operators

1. **Where is PHP code executed?**
   ✅ On the server
   ❌ In the browser
   ❌ On the server and in the browser
---
2. **PHP code has to start with the PHP opening tag. What does this look like?**
   ❌ `<php>`
   ✅ `<?php`
   ❌ `PHP =`
---
3. **Which one of these is an invalid variable name?**
   ❌ `$message`
   ❌ `$myName`
   ✅ `$my-variable`
   ❌ `$Full_Name`
---
4. **What will be the result of executing this code? `$name = "Dave";`**
   ❌ "Dave" will be printed out in the browser
   ✅ A variable called `$name` will be created and assigned the value "Dave"
   ❌ A variable called `Dave` will be created
---
5. **True or false: when creating a variable in PHP, you have to declare the type of the data it's going to contain.**
   ❌ False
   ✅ True
---
6. **What will the `$answer` variable contain after running this code? `$answer = "true"`;**
   ❌ A boolean value
   ✅ A string value
   ❌ An integer value
---
7. **What will be the result of running this code?** 
   ```php
   $price = 1.99; 
   currency = "GBP"; 
   echo $price . $currentcy;
   ```

   ✅ "1.99GBP" will be displayed
   ❌ "GBP1.99" will be displayed
   ❌ There will be an error
---
8. **Which of these lines of code will cause an error?**
   ❌ `$time = "3 o'clock";`
   ❌ `$time = '3 o\'clock';`
   ✅ `$time = '3 o'clock'`;
---
9.  **Given this variable: 
    `$price = 1.99;` 
    which of the following lines of code will not display "The price is 1.99GBP"?**
    ❌ `echo The price is " . $price . "GBP";`
    ✅ `echo "The price is $priceGBP";`
    ❌ `echo "The price is {$price}GBP`