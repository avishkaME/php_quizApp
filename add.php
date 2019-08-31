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
        <h2>Add a Question</h2>
        <form class="" action="add.php" method="post">
          <p>
            <label for="">Question number</label>
            <input type="number" name="question_number" value="">
          </p>
          <p>
            <label for="">Question Text</label>
            <input type="text" name="question_text" value="">
          </p>
          <p>
            <label for="">Choice #1</label>
            <input type="text" name="choice1" value="">
          </p>
          <p>
            <label for="">Choice #2</label>
            <input type="text" name="choice2" value="">
          </p>
          <p>
            <label for="">Choice #3</label>
            <input type="text" name="choice3" value="">
          </p>
          <p>
            <label for="">Choice #4</label>
            <input type="text" name="choice4" value="">
          </p>
          <p>
            <label for="">Choice #5</label>
            <input type="text" name="choice5" value="">
          </p>
          <p>
            <label for="">Correct choice number</label>
            <input type="number" name="correct_choice" value="">
          </p>
          <p>
            <input type="submit" name="submit" value="submit">
          </p>
        </form>
      </div>
    </main>
    <footer></footer>
  </body>
</html>
