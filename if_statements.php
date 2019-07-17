<!doctype html>
<html>
<head>
  <title>IfStatments.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>

  <form action="if_statements.php" method="post">
    <p>Do you like cats or dogs?</p>
    <input type="text" name="animal">
    <input type="submit">
  </form>
  <br><br>

  <?php
    //Takes user input from textbox and sees if it is male or female.
    $animal = $_POST["animal"];
    if ($animal == "dogs"){
      echo "Doggos are vgood!";
    } else {
      echo "Kitties are good too";
    }

    echo "<br>\n";

    $isCool = True;
    if ($animal == "dogs" && $isCool){
        echo "You're cool and you like dogs!";
    } else {
      echo "You're okay.";
    }
  ?>

</body>
</html>
