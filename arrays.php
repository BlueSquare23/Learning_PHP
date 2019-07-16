<!doctype html>
<html>
<head>
  <title>Arrays.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>

  <!-- Arrays are used to store many pieces of information all at once -->

  <?php
    $friends = array("Me", "Myself", "I");
    //in php arrays have a zero based index
    echo $friends[0];
    $friends[1] = "Cats";
    echo $friends[1];
    //arrays can store different data types at the same time
    $friends[2] = 20.5;
    echo $friends[2];
    //arrays can be appended to by adding an element to the next possition
    $friends[3] = "boi";
    echo $friends[3];
    //use the count function to count the number of elements in an array
    echo count($friends);
  ?>
</body>
</html>
