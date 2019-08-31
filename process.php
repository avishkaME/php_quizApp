<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php
  //check for score set
  if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
  }

  if ($_POST) {
    $num = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $num+1;


    //get total questions
    $query = "SELECT * FROM questions";

    $results = $conn->query($query) or die($conn->error.__LINE__);
    $total= $results->num_rows;

    //Get correct choice
    $query = "SELECT * FROM choices WHERE question_number = $num AND is_correct = 1";

    //get results
    $result = $conn->query($query) or die($conn->error.__LINE__);

    //get row
    $row = $result->fetch_assoc();

    //set correct choice
    $correct_choice = $row['id'];

    //compare
    if ($correct_choice == $selected_choice) {
      //correct answer
      $_SESSION['score']++;
    }
    //check if last question
    if ($num == $total) {
      header("Location: final.php");
      exit();
    }else {
      header("Location: questions.php?n=".$next);
    }
  }
