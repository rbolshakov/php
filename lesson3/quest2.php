<?php
$name = readline("Назовите ваше имя: ");
$first = ['бесконечного', 'постоянного', 'невероятного', 'космического', 'умопомрачительного', 'сумасшедшего', 'великолепного'];
$second = ['счастья', 'здоровья', 'благополучия', 'воображения', 'терпения', 'исполнения желаний'];
$answer = [];

$count = 3;

for ($i = 0; count($answer) < $count; $i++) {
  $randFirst = array_rand($first);
  $randSecond = array_rand($second);
  $answer[] = "{$first[$randFirst]} {$second[$randSecond]}";
  unset($first[$randFirst]);
  unset($second[$randSecond]);
}

$last = array_pop($answer);
$answer[] = "и {$last}";

$string = implode(", ", $answer);

echo "$name, от всего сердца поздравляю тебя с Днем Рождения, желаю $string";
