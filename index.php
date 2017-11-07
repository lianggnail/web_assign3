<?php session_start() ?>
<?php 
    if ($_SESSION['valid'] != true) {
        header("Location:login.php");
        die();
    }
?>

<?php include("include/header.php"); ?>

<div  class="text-right">
    <a href="logout.php"><button class="btn">logout</button></a>
</div>

<?php

    //session variables for updating score and total number of questions 
    $msg = $_SESSION['msg'];
    $score = 0 + $_SESSION['score'];
    $total = 0 + $_SESSION['total'];

    //random generate numbers and operation signs
    $rand1 = rand(0, 50);
    $rand2 = rand(0, 50);
    $signs = array('-', '+');
    $sign = $signs[rand(0, 1)];

    //html displays questions
    echo '<h1>';
        echo "<div class='col-xs-4'>$rand1</div>";
        echo "<div class='col-xs-4'>$sign</div>";
        echo "<div class='col-xs-4'>$rand2</div>";
    echo '</h1>';

    //pass user answer and values needed for calculations to calculation.php
    echo '<form action="calculation.php" method="post">';
        echo "<input type='hidden' name='rand1' value='$rand1' />";
        echo "<input type='hidden' name='rand2' value='$rand2' />";
        echo "<input type='hidden'  name='sign' value='$sign' />";
        echo "<input type='hidden'  name='score' value='$score' />";
        echo "<input type='hidden'  name='total' value='$total' />";
        echo "<input type='text' name='answer' placeholder='Enter answer' />";
        echo "<input type='submit' class='btn btn-primary btn-sm' />";
    echo '</form>';
?>

<?php
    //display green color if answer is correct(class correct) or red for incorrect
    echo '<h2 ';
    if ($msg == 'correct'){
        echo "class='correct'";
    } else {
        echo "class='incorrect'";
    }
    echo '>';
    echo "$msg</h2>";

    echo "<b>Score: $score / $total</b>"
?>

<?php include("include/footer.php"); ?>