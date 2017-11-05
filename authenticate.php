<?php
  $str = file_get_contents("credentials.config");
  $passwords = explode(' ',$str);
  for ($i=0; $i<count($passwords); $i++) {
      echo $passwords[$i];
  } 
>