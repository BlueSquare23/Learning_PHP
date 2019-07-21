<!doctype html>
<html>
<head>
  <title>Loops.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>

  <?php

    $index = 1;

    /* There are two parts to a while loop. There is the loop condition and the
    loop body. The loop condition will determine if the code within the while
    loop should be executed. */
    echo "While loop:\n<br>\n";
    while($index <= 5){
      echo "$index \n<br>\n";
      $index++;
    }

    echo "<hr>\n<br>";
    $index = 1;

    //Do while loop
    echo "Do While loop:\n<br>\n";
    do{
      echo "$index \n<br>\n";
      $index++;
    } while($index <= 5);
    /* A do while loop checks the condition after the body has been run. This
    can be useful in situations where the condition will not be met until after
    the body is executed. */

    echo "<hr>\n<br>\n";

    /*For loops take three arguments. First is the iterable over which they
    traverse. Second is the condition which is checked for ever loop. And last
    is the last action they take after each itteration. This is simply the last
    command to be run in the loop and is typically an incrementation of the
    index. It is possible to leave this out of the for loop's parameter section
    and simply run it as the last line of the for loop's body. */
    echo "For loop:\n<br>\n";
    for($i = 1; $i <= 5; $i++){
      echo "$i \n<br>\n";
    }

    echo "<hr>\n<br>\n";

    echo "For loop over an array:\n<br>\n";

    echo "\n<br>\n";

    $luckyNumbers = array(4, 8, 14, 16, 23, 42);
    echo "Lucky Numbers: 4, 8, 14, 16, 23, 42 \n<br>\n";
    //Using a for loop to itterate over the elements in an array
    for($i = 0; $i < count($luckyNumbers); $i++){
        echo "$luckyNumbers[$i] \n<br>\n";
    }
  ?>

</body>
</html>
