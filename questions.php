<?php include 'db.php' ?>
<?php session_start(); ?>
<?php
  //set question number
  $num = (int) $_REQUEST['n'];
  // $num = rand(1,5);

  //get total questions
  $query = "SELECT * FROM questions";

  $results = $conn->query($query) or die($conn->error.__LINE__);
  $total= $results->num_rows;

  //get questions
  $query = "SELECT * FROM questions WHERE question_number = $num";

  //get result
  $result = $conn->query($query) or die($conn->error.__LINE__);

  $question = $result->fetch_assoc();

  //get choices
  $query = "SELECT * FROM choices WHERE question_number = $num";

  //get result
  $choices = $conn->query($query) or die($conn->error.__LINE__);



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
        <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?> </div>
        <p class="question">
          <?php echo $question['text']; ?>
        </p>
        <form class="" action="process.php" method="post">
          <ul class="choices">
            <?php while ($row = $choices->fetch_assoc()):?>
              <li> <input type="radio" name="choice" value="<?php echo $row['id'];  ?>"> <?php echo $row['text']; ?> </li>
            <?php endwhile; ?>
          </ul>
          <input type="submit" name="submit" value="submit">
          <input type="hidden" name="number" value="<?php echo $num; ?>">
        </form>
      </div>
    </main>
    <footer></footer>
  </body>
</html>
