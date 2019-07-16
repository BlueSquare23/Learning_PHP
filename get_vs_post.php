<!doctype html>
<html>
<head>
  <title>GetVsPost.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>
  <!-- Get and Post are two formed methods used for interacting with pages -->
  <h2>GET and POST</h2>
  <!-- The password type input in html makes it so that the text box is
  obfuscated -->
    <form action="get_vs_post.php" method="post">
      Password: <input type="password" name="password"><br>
      <input type="submit">
    </form>
    <br><br>

  <!-- One difference between Get and Post is that Post does not display
  information in the URL and so is more secure. -->

  <?php
    echo $_POST["password"];
  ?>
</body>
</html>
