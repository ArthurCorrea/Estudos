 <?php

 $a = 100;
 $b = 200;

 $x = ($a < $b) && ($a < 1000);         #AND -> true
 $x = ($a > $b) || ($a > 1000);         #OR  -> false
 $x = ($a < 150) && ($b > 300);         #false
 $x = ($a > 300) || ($a + $b > 500);    #false
 $x = ($a <= 100) && ($b > 150);        #true
 $x = ($a < $b) || ($b == 100);         #true


 $x = (10 > 4) && (2 < 7);
 $x = (true && true);                   #true

 $x = (3 == 4) || (6 > 3);
 $x = (false || true);                  #true

 $x = (5 > 3) && (9 <= 2);
 $x = (true && false);                  #false

 $x = (3 <= 8) || (4 > 6);
 $x = (false || false);                 #false


 $a = false;
 $x = !$a;                              # NOT -> true
