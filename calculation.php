<?php session_start(); ?>
<?php
    extract($_POST);
    $score = $_POST['score'];
    $total = $_POST['total'];

    if (empty($answer) || !is_numeric($answer)){
            $msg='You must enter a number for your answer.';
        } else {
            $total ++;

            if ($sign == '+'){
                $result = $rand1 + $rand2;
            } else {
                $result = $rand1 - $rand2;
            }

            if ($result == $answer){
                $score++;
                $msg= 'correct';
            }else{
                $msg='incorrect, ' . "$rand1" . ' ' . $sign .' ' . $rand2 . ' is ' . $result;
            }
    }

    $_SESSION['msg'] = $msg;
    $_SESSION['score'] = $score;
    $_SESSION['total'] = $total;
    header('Location:index.php');
    die();
?>