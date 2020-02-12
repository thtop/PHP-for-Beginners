<?php

// To delete the cookie 
setcookie('example', '', time() - 3600);

echo 'Cookie deleted.';