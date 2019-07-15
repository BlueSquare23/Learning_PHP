<!doctype html>
<html>
<head>
  <title>String.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>
  <!-- Strings are one of the most common data types.
   For more string functions checkout the php docs linked below.
   https://www.php.net/manual/en/ref.strings.php -->
  <?php
    $string = "This is a String!<br>\n";
    echo $string;

    echo strtolower($string); //lower case function
    echo strtoupper($string); //upper case function
    echo strlen($string);     //string length function
    echo "<br>\n";
    echo $string[0];          //string index (starts at zero)
    echo $string[15];
    echo "<br>\n";
    $string[6] = "z";         //replace a letter at a specific index
    echo $string;
    echo str_replace("This", "Dis", $string); //replace whole sub-strings with str_replace
    echo substr($string, 5, 3);  //Takes a sub-string ($var, INDEX, STR_LEN)
  ?>
</body>
</html>
