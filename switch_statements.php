<!doctype html>
<html>
<head>
  <title>SwitchStatements.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>

  <form action="switch_statements.php" method="post">
    <p>What was your grade?</p>
    <input type="text" name="grade">
    <input type="submit">
  </form>

  <br>

  <?php
  /*Switch statements are like if statements. In fact anything you can do with
  a switch statement you can do with an if statement. However, switch statements
  are useful for compairing one value against a varity of cases. */

  $grade = $_POST["grade"];
  //A switch statement has the following syntax.
  switch($grade){               //Pass switch the value to be compaired
    case "A":                   //Then pass it a number of cases for compairison
      echo "You did very well!";
      break;                    //Lastly end the compairson with a break.
    case "B":
      echo "You did well!";
      break;
    case "C":
      echo "You did average.";
      break;
    case "D":
      echo "You did poorly.";
      break;
    case "F":
      echo "You failed!";
      break;
    default:                    //Switch also supports a default option (somewhat akin to the else at the end of a series of if statements)
      echo "Please enter a valid grade:";
  }
  ?>

</body>
</html>
