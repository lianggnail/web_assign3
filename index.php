<?php
    session_start();
?>
<?php
    $num1=rand(0,50);
    $num2=rand(0,50);
    $op=rand(0,1);
    if ($op==0) {
        $num3=$num1+$num2;
        $operation="+";
    } else {
        $num3=$num1-$num2;
        $operation="-";
    }
        
    //for test use, is going to be associated with session as $_SESSION['correct']
    $correct = 0;
    $attempt = 0;
    //for test use, is going to be associated with session as $_SESSION['attempt']

    extract($_POST);
    if (isset($answer)) {
        if (!is_numeric($answer)) {
        header("Location:index.php?message=You must enter a number for your answer.");
        die();
        } else if ($answer==$num3){
            $correct++;
            $attempt++;
        } else {
            $attempt++;
        }
    }
    //$score= $_SESSION["correct"] / $_SESSION["attempt"];
?>
<?php include("include/header.php"); ?>
    <div class="container">
        <form action="index.php" method="post" role="form" class="form-horizontal">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4"><h1>Math Game</h1></div>
                <div class="col-sm-4"><a href="logout.php" class="btn btn-default btn-sm">Logout</a></div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-sm-offset-3"><?php print($num1); ?></label>
                <label class="col-sm-2"><?php print($operation); ?></label>
                <label class="col-sm-2"><?php print($num2); ?></label>
                <div class="col-sm-3"></div>
            </div>
            
            <?php print("<input type='hidden' name='first_number' value='".$num1."'/>"); ?>
            <?php print("<input type='hidden' name='operation' value='".$operation."'/>"); ?>
            <?php print("<input type='hidden' name='second_number' value='".$num2."'/>"); ?>
            <?php print("<input type='hidden' name='total' value='".$num3."'/>"); ?>
            <?php print("<input type='hidden' name='score' value='".$score."'/>"); ?>
            
            <div class="form-group">
                <div class="col-sm-3 col-sm-offset-4">
                    <input type="text" class="form-control" id="answer" name="answer" placeholder="Enter answer" size="6">
                </div>
                <div class="col-sm-5"></div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-sm-offset-4">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary btn-sm">
                        Submit</button>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
        <hr />
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">        
            <?php 
            $msg=$_GET['message'];
            echo "<b style='color:red'>$msg</b>";
            ?>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">Score: <?php print($correct); ?> / <?php print($attempt); ?></div>
            <div class="col-sm-4"></div>
        </div>
    </div>
<?php include("include/footer.php"); ?>