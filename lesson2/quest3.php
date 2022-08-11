<?php
//ответ стырил с урока сам не догадался. 
do {
  $number = (int)readline("Введите число? ");
} while ($number <= 0);

echo "Счет остановлен на пальце номер ";

//не совсем понимаю логику деления на 8. 
$number %= 8;

switch (true) {
  case $number == 1;
    echo 1;
    break;
  case $number == 2 || $number == 0;
    echo 2;
    break;
  case $number == 3 || $number == 7;
    echo 3;
    break;
  case $number == 4 || $number == 6;
    echo 4;
    break;
  default:
    echo 5;
}

switch ($number % 8) {
  case 1:
    $finger = '1';
    break;
  case 2:
  case 0:
    $finger = '2';
    break;
  case 4:
  case 6:
    $finger = '4';
    break;
  case 5:
    $finger = '5';
    break;
}
