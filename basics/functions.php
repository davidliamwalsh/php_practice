<?php

  function myFunction($name = 'No name'){
    return 'Hello '.$name;
  }

  echo myFunction('David');
  echo '<br>';
  echo myFunction();
  echo '<br>';

  $myNum = 10;

  function addFive(&$num){
    $num += 5;
  }

  addFive($myNum);
  echo "Value: $myNum<br>";
  
?>