<?php
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function maxAvgMin($arr)
{
  $max = max($arr);
  $avg = round(array_sum($arr) / count($arr));
  $min = min($arr);
  return $asnwer[] = array('Максимальное значение' => $max, 'Среднее арифметическое' => $avg, 'Минимальное значение' => $min);
}

print_r(maxAvgMin($arr));
