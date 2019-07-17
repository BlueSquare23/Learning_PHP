<!doctype html>
<html>
<head>
  <title>AssociativeArrays.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>

  <!-- An associative array is an array which is able to store key value pairs.
  It is somewhat equivelent to a dictionary in Python. -->

  <!--  -->
  <h2>Associative Arrays</h2>
    <form action="associative_arrays.php" method="post">
      <p>Type in the name of a student to see their grade: </p>
      <input type="text" name="student">
      <input type="submit">
    </form>
    <br><br>

  <?php
    /*Associative arrays are created just like a normal array except that they
    contain a key and a value seperated by the symbol "=>" */
    $grades = array("Jim" => "A+", "Pam" => "B", "Oscar" => "C+");

    /*To access the value stored in the array you have to call the key. For
    example to get Jim's grade out of the array you have to call the key, Jim.*/
    echo $grades["Oscar"];
    echo "<br>\n"; //For output clarity

    /*You can modify the values of a particular key the same way you'd modify
    any element of an array. For example to change Jims grade we do the
    following, */
    $grades["Jim"] = "F";
    echo $grades['Jim'];
    echo "<br>\n";

    /*To see the number of key pairs there are in the array use the count
    method*/
    echo count($grades);
    echo "<br>\n";

    //
    $student = $_POST['student'];
    echo "<p>$student's grade is: ";
    echo $grades[$_POST["student"]];
    echo "<br>\n";
  ?>
</body>
</html>
