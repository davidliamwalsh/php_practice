<?php

  // variables
  
  $string1 = 'Hello';
  $string2 = 'World';
  $greeting1 = $string1 .' '. $string2;
  $greeting2 = "$string1 $string2";
  $num1 = 2;
  $num2 = 4;
  $sum = $num1 + $num2;
  $float1 = 5.5;
  $bool1 = true;

  // constant -- will never change

  define('GREETING', 'Hello Everyone');

  echo GREETING;
?>