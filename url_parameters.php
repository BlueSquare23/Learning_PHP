<!doctype html>
<html>
<head>
  <title>URLParameters.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>
  <h2>URL Parameters</h2>
    <form action="url_parameters.php" method="get">
      Name: <input type="text" name="name"><br>
      <input type="submit">
    </form>
    <br><br>
    <!-- Notice how the information submitted to the form is stored in the URL?
    This is a feature of PHP and it can be useful. This information can be used
    when bookmarking a page for example. It also means that it can be changed by
    simply changing the URL. Try entering '&age=20' after the name in the URL.
    -->

  <?php
    echo $_GET["name"];
    echo " ";
    echo $_GET["age"];
  ?>

  <!-- URL Parameters can be useful to store information within the URL of the
  page. However they are insecure because the information is available within
  the page's URL. -->
</body>
</html>
