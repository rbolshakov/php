<?php
(string)$name = readline("Введите ваше ИМЯ: ");
(string)$quest1 = readline("Введите ПЕРВУЮ задачу на сегодня: ");
(int)$quest1Time = readline("Сколько примерно времени эта задача займет?: ");
(string)$quest2 = readline("Введите ВТОРУЮ задачу на сегодня: ");
(int)$quest2Time = readline("Сколько примерно времени эта задача займет?: ");
(string)$quest3 = readline("Введите ТРЕТЬЮ задачу на сегодня: ");
(int)$quest3Time = readline("Сколько примерно времени эта задача займет?: ");
(int)$res = $quest1Time + $quest2Time + $quest3Time;

echo "\n\n\n" . $name . " " . 'у вас запланировано 3 приоритетных задачи на день:' . "\n";
echo '-' . " " . $quest1 . " " . '(' . $quest1Time . 'ч)' . "\n";
echo '-' . " " . $quest2 . " " . '(' . $quest2Time . 'ч)' . "\n";
echo '-' . " " . $quest3 . " " . '(' . $quest3Time . 'ч)' . "\n";
echo 'Примерное время выполнения плана = ' . $res . 'ч';
