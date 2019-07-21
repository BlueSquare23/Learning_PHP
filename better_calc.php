<!doctype html>
<html>
<head>
  <title>BetterCalculator.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>

  <!-- Use the "step" method to take decimal numbers with the number input box
  in html forms -->
    <form action="better_calc.php" method="post">
      <p>First Number:   <input type="number" step="0.1" name="num1"> <br></p>
      <p>Operation:      <input type="text" name="op"> <br></p>
      <p>Second Number:  <input type="number" step="0.1" name="num2"> <br></p>
      <input type="submit">
    </form>
    <br>

  <?php

    //For output clarity
    function newLine(){
      echo "\n<br>\n";
    }

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+") {
      echo $num1 + $num2;
    } elseif($op == "-") {
      echo $num1 - $num2;
    } elseif($op == "*") {
      echo $num1 * $num2;
    } elseif($op == "/") {
      echo $num1 / $num2;
    } else {
      echo "Invalid Operator";
    }
  ?>
</body>
</html>
