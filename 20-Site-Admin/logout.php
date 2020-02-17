<?php

require 'config/config.php';
require 'includes/init.php';

Auth::logout();

Url::redirect($ROOT_PATH);
