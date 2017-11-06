<?php session_start() ?>

<?php include("include/header.php"); ?>

<div  class="text-right">
    <a href="logout.php"><button class="btn">logout</button></a>
</div>

<?php
    $msg = $_SESSION['msg'];
    $score = 0 + $_SESSION['score'];
    $total = 0 + $_SESSION['total'];

    $rand1 = rand(0, 50);
    $rand2 = rand(0, 50);
    $signs = array('-', '+');
    $sign = $signs[rand(0, 1)];

    echo '<h1>';
        echo "<div class='col-xs-4'>$rand1</div>";
        echo "<div class='col-xs-4'>$sign</div>";
        echo "<div class='col-xs-4'>$rand2</div>";
    echo '</h1>';

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