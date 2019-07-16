<!doctype html>
<html>
<head>
  <title>UsingCheckboxes.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>
  <h2>What fruits do you like?</h2>
    <form action="using_checkboxes.php" method="post">
      Apples:  <input type="checkbox" name="fruits[]" value="apples"><br>
      Oranges:  <input type="checkbox" name="fruits[]" value="oranges"><br>
      Pears:  <input type="checkbox" name="fruits[]" value="pears"><br>
      Bananas:  <input type="checkbox" name="fruits[]" value="bananas"><br>
      <input type="submit">
    </form>
    <br><br>

  <?php
    $fruits = $_POST["fruits"];
    echo $fruits[0];
  ?>
</body>
</html>
