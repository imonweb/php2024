<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Demo</title>
  <style>
    body {
      display: grid;
      place-items: center;
      margin: 0;
      height: 100vh;
      font-family: poppins;
    }
  </style>
</head>
<body>
  <?php 
    $name = 'dark matter';
    $read = false;
  ?>
      <?php 
        if($read){
          $message = "You have read $name"; 
        } else {
          $message = "You have not read $name";
        }
         
        ?>
    
    <h1>
      <?php echo $message; ?>
      <?= $message ?>
  </h1>
</body>
</html>