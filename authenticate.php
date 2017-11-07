<?php session_start(); ?>
<?php
  $_SESSION['valid'] = false;
  $str = file("credentials.config");
  for ($i=0;$i<count($str);$i++){
      $valid = explode(', ',$str[$i]); 
      //if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
          if ($_POST['username'] == $valid[0] && ($_POST['password']."\r\n") == $valid[1]) {
              $_SESSION['valid'] = true;
          } 
      //}
  }
  if ($_SESSION['valid'] == true) {
      header("Location:index.php");
      die();
        } else {
      header("Location:login.php?message=Invalid login credentials.");
      die();
      }
?>