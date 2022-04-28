<?php

# os valores são iguais?

$a = (2 == 3);          #false
$a = (100 == 100);      #true
$a = (50 == '50');      #true
$a = (50 === '50');     #false



# os valores são diferentes?

$a = (2 != 3);          #true
$a = (50 != 50);        #false
$a = (50 != '50');      #false
$a = (50 !== '50');     #true



# os valores são maiores ou menores?

$a = (2 > 3);       #false
$a = (2 < 3);       #true
$a = (50 >= 50);    #true
$a = (50 <= 50);    #true
$a = (50 < 50);     #false

# Spaceship operator
$x = 1 <=> 1;       # 0 (1 == 1)
$x = 3 <=> 2;       # 1 (3 > 2)
$x = 1 <=> 2;       # -1 (1 < 2)