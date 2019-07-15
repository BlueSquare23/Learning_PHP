<!doctype html>
<html>
<head>
  <title>Variables.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>
  <!-- newline '\n' makes a new line in the html source code -->
  <!-- break '<br>' inserts a break html tag which is rendered -->
  <!-- use both '\n<br>' to get a new line in source code and displayed on the page -->
  <?php
    $char_name = "John";
    $char_age = 35;

    echo "There once was a man named $char_name.\n";
    echo "He was $char_age years old.\n";
    echo ("He really liked the name $char_name.<br>");
    echo ("But didn't like being $char_age.\n<br>");
    echo "$char_name had a friend named ";
    $char_name = Tom;
    echo "$char_name. <br>";
  ?>
</body>
</html>
