<?php
//Задание оказалось намного проще чем я думал.
//Я думал что на вход могут приходить массивы вида [0, 0, 2, 3, 0, 5, 0 ,1, 4, 0]
//А на вход мы просто всегда получаем массив где в конце 5 нулевых значений. 
$arr = [1, 2, 3, 4, 5, 0, 0, 0, 0, 0];

for ($i = 4; $i >= 0; $i--) {
  $arr[$i * 2 + 1] = $arr[$i * 2] = $arr[$i];
}

print_r($arr);
