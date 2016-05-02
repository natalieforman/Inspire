<?php
  session_start();
  $username = $_SESSION['username'];

  //as long as the card name isn't blank
  if(!($_POST["cardName"]=="")){
    $card = $_POST["cardName"];
    $card = preg_replace("/[\s]/", "_", $card);
    if(!file_exists("../users/".$username."/".$card.".txt")){
    	//create the text document
       $myfile = fopen("../users/".$username."/".$card.".txt", "w");
    }
  }
?>