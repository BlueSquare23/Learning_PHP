<!doctype html>
<html>
<head>
  <title>IfStatments.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>

  <p>Change the files PHP variables to print out different results:</p>

  <?php

    //For output clarity
    function newLine(){
      echo "\n<br>\n";
    }
    
    $isMale = false;
    $isTall = true;
    $likesDogs = false;

    //Prints message based off bool value
    if ($isMale && $isTall){            //Use "&&" as and operator (aka both conditions must be met)
      echo "You are a tall male";
    } elseif ($isMale && !$isTall){     //Use "!" as a negation operator
      echo "You are a short male";
    } elseif (!$isMale && $isTall){
      echo "You are not male and are tall";
    } else{
      echo "You are not male and are not tall";
    }

    newLine();

    if ($isMale || $likesDogs){         //Use "||" as or operator (aka either one or the other must be met)
      echo "You are either male or you like dogs";
    } elseif (!$isMale && !$likesDogs){
      echo "You are not male and do not like dogs";
    }

    newLine();

    //Using compairson operators with if statements
    /*Create function to get max or two numbers (in reality the "max()"
    function already exists. But this is for demonstration)*/
    function getMax($num1, $num2){
      if ($num1 > $num2){                //Use ">", "<", "==", "!=", "<=", and ">=" as compairson operators
        return $num1;
      } else {
        return $num2;
      }
    }

    echo getMax(300, 90);

    newLine();

    //Create a max num compairer with 3 numbers
    function getMax3($num1, $num2, $num3){
      if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
      } elseif($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
      } else {
        return $num3;
      }
    }

    echo getMax3(77,10,20);
  ?>

</body>
</html>
