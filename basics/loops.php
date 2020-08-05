<?php

/*
// For loop

  for($i = 0; $i <= 10; $i++){
    echo 'For loop: '.$i;
    echo '<br />';
  }

// While loop

  $i = 0;

  while($i < 10){
    echo 'While loop: '.$i;
    echo '<br />';
    $i++;
  }

// Do While loop

  $i = 0;

  do{
    echo 'Do While loop: '.$i;
    echo '<br />';
    $i++;
  }

  while($i < 10);

*/

// Foreach loop

  $people = array('Kevin' => 44, 'Peter' => 22, 'Tom' => 55);

  foreach($people as $person => $age){
    echo $person.': '.$age;
    echo '<br />';
  }

?>