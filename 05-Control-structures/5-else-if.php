<?php

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