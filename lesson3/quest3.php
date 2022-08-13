<?php
$arr = [1, 2, 3, 4, 5, 0, 0, 0, 0, 0];

for ($i = 0; $i <= count($arr); $i++) {
  if ($arr[$i] == 0) {
    unset($arr[$i]);
  }
}

print_r($arr);
