<?php

  /*if (isset($_POST['login']) && !empty($_POST['username']) 
     && !empty($_POST['password'])) {
     if ($_POST['username'] == '123' && 
        $_POST['password'] == '333') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = '123';
        
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