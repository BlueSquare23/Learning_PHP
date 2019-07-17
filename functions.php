<!doctype html>
<html>
<head>
  <title>Functions.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>

    <form action="functions.php" method="post">

      <input type="submit">
    </form>
    <br><br>

  <?php
    //Functions are usful for wrapping up pieces of code
    function sayHi(){
      echo "Hello User!!";
    }

    //Calling the function in php
    sayHi();

    echo "<br>\n"; //For output clarity

    //Parameters
    function sayHiAgain($name){
      echo "Hello $name <br>";
    }

    //Passing the function an argument
    sayHiAgain("John!");
    echo "<br>\n"; //For output clarity

    //Function can be called multiple times w/ different arguments
    sayHiAgain("Dude!");
    echo "<br>\n"; //For output clarity
    sayHiAgain("Man!");
    echo "<br>\n"; //For output clarity
    sayHiAgain("Bro!");

    /*Functions allow us to write code once and call it multiple time*/

    //Return Statments
    function cubeNum($num){
      return $num * $num * $num;
    }
    //Return allow functions to return a value when called
    $cubeResult = cubeNum(4);
    echo $cubeResult
  ?>
</body>
</html>
