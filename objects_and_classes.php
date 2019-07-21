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

  //For output clarity
  function NewLine(){
    echo "\n<br>\n";
  }

  //A class is a specification for a custom data type
  echo "<h4>Classes:</h4>";
  echo "\n";
    class Book {
      var $title;           //Every class has attributes which can be assigned to it
      var $author;
      var $pages;

      //Using constructors
      function __construct($name){
        echo "New Book: $name, Created! \n<br>\n";
      }
    }
    /*Constructors are just functions which get called everytime an object is
    created. They have to be created using the "__construct()" method.
    Constructors can be useful when creating of objects (see below). */

    //Creates a new Book data type and stores it within the variable book1
    $book1 = new Book("Cat's Cradle");      //This is an object. An object is an instance of a class
    $book1->title = "Cat's Cradle";
    $book1->author = "Kurt Vonnegut, jr.";
    $book1->pages = 301;

    echo "Pages: ";
    echo $book1->pages;
    NewLine();

    $book2 = new Book("Leaves of Grass");       //This is an object. An object is an instance of a class
    $book2->title = "Leaves of Grass";
    $book2->author = "Walt Whitman";
    $book2->pages = 456;

    echo "Title: ";
    echo $book2->title;
    NewLine();

    //Using Constructors in the creation of objects
    echo "<h4>Constructors:</h4>";
    echo "\n";

    class Painting {
      var $artist;
      var $title;
      var $date;

      function __construct($anArtist, $aTitle, $aDate){
        $this->artist = $anArtist;              //Use the bulitin "$this" PHP var to refer to the current object
        $this->title = $aTitle;
        $this->date = $aDate;
      }
    }

    //Once the constructor has been created, simply pass in the objects properties as arguments
    $JoyofLife = new Painting("Henri Matisse", "Bonheur de Vivre", "1905");
    $TheScream = new Painting("Edvard Munch", "The Scream", "1893");

    echo $JoyofLife->title;
    NewLine();

    echo $TheScream->artist;
    NewLine();

    $JoyofLife->title = "The Joy of Life";      //Object attributes can still be modified after initial assignment
    echo $JoyofLife->title;
    NewLine();

    //Additional Object Functions
    echo "<h4>Additional Object Functions:</h4>";
    echo "\n";
    class Student {
      var $name;
      var $major;
      var $gpa;

      function __construct($name, $major, $gpa){
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
      }

      //Create an object function just like any other function.
      function hasHonors(){
        if($this->gpa >= 3.5){                  //This function just tests if a student has above a 3.5 gpa
          return "The student, $this->name has honors.";
        } else {
        return "The student, $this->name does not have honors.";
        }
    /*The "$this->gpa" or "$this->name" means that when the function is called
    by an object, it will use the gpa or name information for that object. */
      }
    }

    $student1 = new Student("Jim", "Business", 2.8);
    $student2 = new Student("Pam", "Art", 3.6);

    //Call an object function the same way you'd check an objects attributes
    echo $student1->hasHonors();
    NewLine();
    echo $student2->hasHonors();
    NewLine();
    /*Object functions are useful because they're baked into any object of the
    class where the function is defined. So the honors functions is defined only
    once but it can be called on any student object. */


    //Getters and Setters
    echo "<h4>Getters and Setters:</h4>";
    echo "\n";
    /*Getters and Setters are PHP classes which allow us to control the degree
    of access which users have to the attributes of classes. */
    class Movie {
      public $title;                            //These are what are known as visibility modifiers
      private $rating;
    /*since the visibility modifier for $rating is private it cannot be accessed
    from outside of the class. Uncomment the line with the "#" below to see the
    error. */

      function __construct($title, $rating){
        $this->title = $title;
        $this->setRating($rating);              //Ensures that the rating can only be set through the setter function.
      }

      //Getter
      function getRating(){
        return $this->rating;
      }

      //Setter
      function setRating($rating){
        //We only want the rating to be able to be set one of the following,
        if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
          $this->rating = $rating;
        } else {
          $this->rating = "NR";
        }
      }
    }

    $avengers = new Movie("Avengers", "PG-13");

    //#echo $avengers->rating;

    echo "Avengers Rating: ";
    echo $avengers->getRating();
    NewLine();

    //Valid Rating
    echo $avengers->setRating("R");
    echo "Reset Avengers Rating: ";
    echo $avengers->getRating();
    NewLine();

    //Invalid Rating
    //echo $avengers->setRating("Dog");

    /*Getter and Setter are a way of locking down classes so they can only be
    accessed through those functions. They are like the semipermiable membrain
    of a cell wall through which all changes must be checked. At the core or the
    getter and setter functions is the concept of visibility modifier scope.
    Most realworld class attributes will have their modifiers set to private and
    use getter and setter functions. */


    //Inheritance
    echo "<h4>Inheritance:</h4>";
    echo "\n";

    class Chef {
      function makeTofu(){
        echo "The chef makes tofu. \n<br>\n";
      }
      function makeSalad(){
        echo "The chef makes salad. \n<br>\n";
      }
      function makeSpecial(){
        echo "The chef makes the special. \n<br>\n";
      }
    }

    class ItalianChef extends Chef {              //The "extend" keyword enables the ItalianChef class to inherit all of the attributes from the regular Chef class
      function makePasta(){
        echo "The Italian chef makes pasta. \n<br>\n";
      }
      function makeSpecial(){
        echo "The Italian chef makes european debt crisis. \n<br>\n";
      }
    }

    $chef = new Chef();
    $chef->makeTofu();

    $italianChef = new ItalianChef();
    $italianChef->makeTofu();
    $italianChef->makePasta();
    $italianChef->makeSpecial();                  //Overriding an inherited function
  ?>

</body>
</html>
