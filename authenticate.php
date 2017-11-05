<?php

  /*
   $str = file_get_contents("credentials.config");
  $passwords = explode(' ',$str);
  for ($i=0; $i<count($passwords); $i++) {
      if ($i%2==0) {
          $username=passwords[$i];
      } else {
          $password=passwords[$i];
      }
  } 
  if (isset($_POST['login']) && !empty($_POST['username']) 
     && !empty($_POST['password'])) {
     if ($_POST['username'] == $username && 
        $_POST['password'] == $password) {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $username;
        
        echo 'You have entered valid use name and password';
     }else {
        $msg = 'Invalid login credentials.';
     }
  }*/

  $str = file_get_contents("credentials.config");
  $passwords = explode(' ',$str);
  for ($i=0; $i<count($passwords); $i++) {
      echo $passwords[$i];
  } 
>
