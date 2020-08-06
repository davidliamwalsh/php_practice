<?php

  $loggedIn = true;
  $array = [1, 2, 3, 4];
  /*
  if($loggedIn){
    echo 'You are logged in';
  } else {
    echo 'You are NOT logged in';
  }
  
  echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';

  $isRegistered = ($loggedIn == true) ? true : false;
  echo $isRegistered;

  //nested

  $age = 7;
  $score = 10;

  echo 'Your score is: '.($score > 10 ? 
    ($age > 10 ? 'Average' : 'Very good')
    : 
    ($age > 10 ? 'Very bad' : 'Average')
  );

  */
?>

<div>
  <?php if($loggedIn) { ?>
    <h1>Welcome User</h1>
  <?php } else { ?>
    <h1>Welcome Guest</h1>
  <?php } ?>
</div>


<div>
  <?php if($loggedIn) : ?>
    <h1>User</h1>
  <?php else : ?>
    <h1>Guest</h1>
  <?php endif; ?>
</div>

<div>
  <?php foreach($array as $value) : ?>
    <?php echo $value; ?>
  <?php endforeach; ?>
</div>

<div>
  <?php for($i = 0; $i < 10; $i++) : ?>
    <li><?php echo $i; ?></li>
  <?php endfor; ?>
</div>