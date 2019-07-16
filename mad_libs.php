<!doctype html>
<html>
<head>
  <title>MadLibs.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>
  <h2>Mad Libs</h2>
    <form action="mad_libs.php" method="get">
      Color: <input type="text" name="color"><br>
      Plural Noun: <input type="text" name="pluralNoun"><br>
      Noun: <input type="text" name="noun"><br>
      <input type="submit">
    </form>
  <?php
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $noun = $_GET["noun"];

    echo "Roses are $color<br>";
    echo "$pluralNoun are blue<br>";
    echo "I love $noun<br>";
  ?>
</body>
</html>
