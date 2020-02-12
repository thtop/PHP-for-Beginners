<?php

setcookie('subdir_example', 'hello', time() + 60 * 60 * 24 * 2, '/');

echo 'Subdirectory cookie set.';