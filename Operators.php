<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
  echo "<h1>Operators</h1><br>";
  echo "<h3>Relational Operators</h3><br>";
  // == , > , < , >= , <= , <> , ===
  $num1 = 5;
  $num2 = 8;
  echo $num1 == $num2;
  echo "<br>";
  echo $num1 > $num2;
  echo "<br>";
  echo $num1 < $num2;
  echo "<br>";
  echo $num1 >= $num2;
  echo "<br>";
  echo $num1 <= $num2;
  echo "<br>";
  echo $num1 <> $num2;
  echo "<br>";
  echo $num1 === $num2;
  echo "<br>";

  echo "<h3>Logical Operators</h3><br>";
  // && , || , !
  echo $num1 == 5 && $num2 == 7;
  echo "<br>";
  echo $num1 == 5 || $num2 == 6;
  echo "<br>";
  echo !($num1 == 6 || $num2 == 6);



  echo "Bitwise Operaotrs";


?>
</body>
</html>