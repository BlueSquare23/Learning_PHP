<!doctype html>
<html>
<head>
  <title>Arithmetic.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>
  
  <!-- PHP supports arithmentic opperations -->
  <?php
    echo "1 + 1 = ";
    echo 1 + 1;       //Addition
    echo "<br>\n";    //newline for output clarity

    echo "2 - 1 = ";
    echo 2 - 1;       //Subtration
    echo "<br>\n";

    echo "5 * 5 = ";
    echo 5 * 5;       //Multiplication
    echo "<br>\n";

    echo "21 / 3 = ";
    echo 21 / 3;      //Division
    echo "<br>\n";

    echo "19 % 3 = ";
    echo 19 % 3;      //Modulus
    echo "<br>\n";

    echo "2.5 * 2 = ";
    echo 2.5 * 2;     //Floating point
    echo "<br>\n";

    echo "15.0 / 6 = ";
    echo 15.0 / 6;    //More floating point
    echo "<br>\n";

    echo "(5 + 1) - 2 = ";
    echo (5 + 1) - 2; //Order of opperations
    echo "<br>\n";

    $num = 23;
    echo $num;        //Variable manipulation
    echo "<br>\n";

    $num++;
    echo $num;        //Incrementation
    echo "<br>\n";

    $num += 12;
    echo $num;        //Operations shorthand ("+=", "-=", "*=", ect)
    echo "<br>\n";

    /* There are also math functions built into PHP */

    echo abs(-100);   //Absolute Value
    echo "<br>\n";

    echo pow(3, 2);   //Exponentiation syntax: pos([BASE], [EXPONENT])
    echo "<br>\n";

    echo sqrt(144);   //Square root
    echo "<br>\n";

    echo max(2, 10);  //Max
    echo "<br>\n";

    echo min(5, 100); //Min
    echo "<br>\n";

    echo round(5.3);  //Round
    echo "<br>\n";

  ?>
</body>
</html>
