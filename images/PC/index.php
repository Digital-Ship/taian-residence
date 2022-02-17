<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: #000;
    }
  </style>
</head>

<body>
  <?php
  $files = array_diff(scandir(__DIR__, 1), array('..', '.', 'index.php'));
  foreach ($files as $file) {

  ?>
    <img src="./<?php echo $file; ?>" alt="" width="500">
  <?php
  }
  ?>
</body>

</html>
