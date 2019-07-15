<!doctype html>
<html>
<head>
  <title>UserInput.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>
  <!-- Web Forms are a common way to get user input in PHP -->

  <!-- To create a form in html first use the form tag to create the form and
  discribe the file its acting on plus what method its using (get, post, etc).
  Then use the input tag within the form to get user input. Lastly create a
  submit button which is used to submit the users input. -->

  <form action="user_input.php" method="get">
    Name: <input type="text" name="nombre">
    <input type="submit">
  </form>

  <br>

  <?php
    echo $_GET["nombre"];     //Call the information entered in the form by using $_GET["NAME"]
  ?>

  <!-- Remember UserInput is evil! Sanatize your text boxes! -->

</body>
</html>
