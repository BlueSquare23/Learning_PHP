<!doctype html>
<html>
<head>
  <title>Object&Classes.php</title>
  <meta charset="utf-8">
  <meta name="description" content="basic php">
  <meta name="keywords" content="php">
</head>

<body>

  <?php
  //A class is a specification for a custom data type
    class Book {
      var $title;           //Every class has attributes which can be assigned to it
      var $author;
      var $pages;
    }

    //Creates a new Book data type and stores it within the variable book1
    $book1 = new Book;      //This is an object. An object is an instance of a class
    $book1->title = "Cat's Cradle";
    $book1->author = "Kurt Vonnegut, jr.";
    $book1->pages = 301;

    echo $book1->pages;

    $book2 = new Book;      //This is an object. An object is an instance of a class
    $book2->title = "Leaves of Grass";
    $book2->author = "Walt Whitman";
    $book2->pages = 456;

    echo $book2->title;
    
  ?>

</body>
</html>
