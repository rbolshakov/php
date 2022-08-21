<?php
$arr = [];

while (count($arr) <= 200) {
  $rand = rand(1, 201);
  if (!in_array($rand, $arr)) {
    $arr[] = $rand;
  }
}

print_r($arr);
