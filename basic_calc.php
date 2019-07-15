<!doctype html>
<html>
<head>
  <title>BasicCalculator.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>
  <!-- Web Forms are a common way to get user input in PHP -->

  <h1>Basic Calculator</h1>

  <hr>

  <h2>Addition</h2>
    <form action="basic_calc.php" method="get">
      <p>Enter a Number: <input type="number" name="num1"></p>
      <br>
      <p>Enter a Number: <input type="number" name="num2"></p>
      <br>
      <input type="submit" value="Add">
    </form>

    <p> Answer:
      <?php
        echo $_GET["num1"] + $_GET["num2"];
      ?>
    </p>

  <hr>

  <h2>Multiplication</h2>
    <form action="basic_calc.php" method="get">
      <p>Enter a Number: <input type="number" name="num3"></p>
      <br>
      <p>Enter a Number: <input type="number" name="num4"></p>
      <br>
      <input type="submit" value="Multiply">
    </form>

  <p> Answer:
    <?php
      echo $_GET["num3"] * $_GET["num4"];
    ?>
  </p>

  <hr>

  <h2>Division</h2>
    <form action="basic_calc.php" method="get">
      <p>Enter a Number: <input type="number" name="num5"></p>
      <br>
      <p>Enter a Number: <input type="number" name="num6"></p>
      <br>
      <input type="submit" value="Divide">
    </form>

  <p> Answer:
    <?php
      echo $_GET["num5"] / $_GET["num6"];
    ?>
  </p>

</body>
</html>
