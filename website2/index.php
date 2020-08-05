<?php include 'server-info.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>Server &amp; File Info</h1>

    <?php if($server): ?>
      <?php foreach($server as $key => $value): ?>
        <li class="list-group-item">
          <strong><?php echo $key; ?></strong>
          <?php echo $value; ?>
        </li>
      <?php endforeach; ?>
    <?php endif; ?>

    <h1>Client Info</h1>

    <?php if($client): ?>
      <?php foreach($client as $key => $value): ?>
        <li class="list-group-item">
          <strong><?php echo $key; ?></strong>
          <?php echo $value; ?>
        </li>
      <?php endforeach; ?>
    <?php endif; ?>

  </div>
  
</body>
</html>