<?php
$answer = true;

while ($answer) {
  echo "В каком году произошло крещение Руси? 

Варианты ответов: 
810 год
990 год
740 год
988 год
";
  switch ((int)readline("Введите ответ: ")) {
    case 810;
    case 990;
    case 740;
      echo "Вы ответили неверно, правильный ответ 988год";
      $answer = false;
      break;
    case 988:
      echo "Верно, вы выйграли!";
      $answer = false;
      break;
    default:
      echo "Ваш вариант не входит в перечень ответов, повторите ввод.\n";
      $answer = true;
  }
}
