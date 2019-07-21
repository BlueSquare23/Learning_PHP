<!doctype html>
<html>
<head>
  <title>IncludeStatement.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>

  <?php
  //Inclue an HTML header page
    include "header.html";
  ?>

  <?php
  //Assign values to the vars defined in the included article_header.php file
    $title = "Learning PHP";
    $author = "Me";
    $wordCount = 4;
  //Include an article header php page
    include "article_header.php";
  ?>
  <p>This is a website.</p>

  <?php
  //Include an HTML footer page
    include "footer.html";
  ?>

</body>
</html>
