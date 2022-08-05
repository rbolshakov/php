<?php
$name = readline("Введите ваше ИМЯ: ");
$quest1 = readline("Введите ПЕРВУЮ задачу на сегодня: ");
$quest1Time = (int)readline("Сколько примерно времени эта задача займет?: ");
$quest2 = readline("Введите ВТОРУЮ задачу на сегодня: ");
$quest2Time = (int)readline("Сколько примерно времени эта задача займет?: ");
$quest3 = readline("Введите ТРЕТЬЮ задачу на сегодня: ");
$quest3Time = (int)readline("Сколько примерно времени эта задача займет?: ");
$res = $quest1Time + $quest2Time + $quest3Time;

echo "\n\n\n" . $name . " " . 'у вас запланировано 3 приоритетных задачи на день:' . "\n";
echo "- $quest1 ({$quest1Time}ч)\n";
echo "- $quest2 ({$quest2Time}ч)\n";
echo "- $quest3 ({$quest3Time}ч)\n";
echo 'Примерное время выполнения плана = ' . $res . 'ч';
