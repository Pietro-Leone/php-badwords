<?php

$paragraph = $_POST["paragraph"];
$censored = $_POST["censored"];

$result = str_replace($censored, "***", $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
  <title>Php-Badwords</title>
</head>

<body>
  <div class="container">
    <div class="row py-3">
      <div class="col">
        <h1 class="text-center">
          <?php echo $result ?>
        </h1>
        <a href="./index.php">Torna indietro</a>
      </div>
    </div>
  </div>
</body>