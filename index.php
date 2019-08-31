<?php include 'db.php' ?>
<?php session_start(); ?>
<?php
  $rand = rand(1,5);

  if (isset($_POST['submitted'])) {
    header("Location: login.php");
    // header("Location: questions.php?n=".$rand);
  }
 ?>
<?php
  //get total questions
  $query = "SELECT * FROM questions";

//Get results
  $results = $conn->query($query) or die($conn->error.__LINE__);
  $total = $results->num_rows;
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>QuizBuddy</title>
    <link rel="stylesheet" href="css/stlye.css">
  </head>
  <body>
    <header>
      <div class="container">
        <h1>QuizBuddy</h1>
      </div>
    </header>
    <main>
      <div class="container">
        <h2>lets have a look, what you know..</h2>
        <p>This is random generating quiz</p>
        <ul>
          <li> <strong>Number of questions:</strong> <?php echo $total; ?> </li>
          <li> <strong>Question Type:</strong>Multiple Choice </li>
        </ul>
        <form  action="index.php" method="post">
          <input type="submit" name="submitted" value="Lets go">
        </form>

        <!-- <a href="questions.php?n=1" class="start">Lets go</a> -->
      </div>
    </main>
    <footer></footer>
  </body>
</html>
