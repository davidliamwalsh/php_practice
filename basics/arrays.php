<?php

// Indexed array

  $people = array('Kevin', 'Peter', 'Tom');
  $ids = array(23, 44, 39);
  $cars = ['Honda', 'Toyota', 'Ford'];
  $cars[] = 'BMW';

  //echo count($cars);
  //print_r($cars);
  //var_dump($cars);

// Associative array

  $people = ['Kevin' => 23, 'Peter' => 44, 'Tom' => 39];
  $ids = array(23 => 'Kevin', 44 => 'Peter', 39 => 'Tom');
  $people['Mark'] = 55;

  //echo $people['Kevin'];
  //echo $ids[23];
  //echo $people['Mark'];
  //print_r($people);

// Multi-dimensional array

  $cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12)
  );

  //echo $cars[1][0];

?>