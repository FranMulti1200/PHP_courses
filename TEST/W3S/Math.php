<?php

// PHP pi() Function
echo (pi());

echo ('<br/>');
echo ('#-------------min() y max()----------------------#');
echo ('<br/>');

// min() y max() Function
echo('(0, 150, 30, 20, -8, -200)');
echo ('<br/>');
echo('Minimo: '. min(0, 150, 30, 20, -8, -200));
echo ('<br/>');
echo('Mayor: '. max(0, 150, 30, 20, -8, -200));
echo ('<br/>');

// Valor absoluto abs()
echo ('#---------------abs()---------------------#');
echo ('<br/>');
echo('abs(-6.7)');
echo ('<br/>');
echo(abs(-6.7));
echo ('<br/>');

// Raiz cuadrada sqrt()
echo ('#---------------sqrt()---------------------#');
echo ('<br/>');
echo('sqrt(64)');
echo ('<br/>');
echo(sqrt(64));
echo ('<br/>');

// Redondeo float round()
echo ('#---------------round()---------------------#');
echo ('<br/>');
echo('round(0.60)');
echo ('<br/>');
echo('round(0.49)');
echo ('<br/>');
echo(round(0.60));
echo ('<br/>');
echo(round(0.49));
echo ('<br/>');

// Número aleatorio rand()
echo ('#---------------rand()---------------------#');
echo ('<br/>');
echo('rand()');
echo ('<br/>');
echo(rand());
echo ('<br/>');
echo(rand(10, 100)); // con parametros minimos y maximos

