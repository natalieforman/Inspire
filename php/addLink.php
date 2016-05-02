<?php
   session_start();
   $username = $_SESSION['username'];

   //if link and name not blank
     if(!($_POST["newLink"]=="") && !($_POST["shortName"]=="")){
      $link = $_POST["newLink"].",". $_POST["shortName"].",". $_POST["desc"];
      $dir = $_POST["category"];
      $dir = preg_replace("/[\s]/", "_", $dir);
      //change the name to the file name
      $file = "../users/"."$username"."/".$dir.".txt";
      $current = file_get_contents($file);
      $current .= $link."\n";
      //add the new content
      file_put_contents($file, $current);
    }
?>