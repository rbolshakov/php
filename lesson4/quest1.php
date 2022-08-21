<?php
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function evenNotEven($arr)
{
  for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 == 0) {
      $arr[$i] = "четное => $arr[$i]";
    } else {
      $arr[$i] = "не четное => $arr[$i]";
    }
  }
  return $arr;
}


print_r(evenNotEven($arr));
