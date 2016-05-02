<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>inspire</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css-js/normalize.css">
  <link rel="stylesheet" href="css-js/skeleton.css">
   <link rel="stylesheet" href="css-js/styles.css">

</head>

<body>
<?php include 'php/common.php';
    topheader(); 
    
  //store username as a string
  $name = $_POST["username"];
  $name = strtolower($name);
  $name = preg_replace("/[\s]/", "_", $name);
  //create folder for username
  if(!file_exists("users/".$name)){
    mkdir("users/".$name);
  }
  //if it does exist, state the username already exists
  else{ ?>
<div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="four columns offset-by-four alert">
        <p >Username already exists</p>
        <a href="signup.php">Sign Up Again</a>
      </div>
    </div>
  </div>
</div>
  <?php;
  } 

  //create document for every list item chosen
  $results = $_POST["cat"];
  if($results){
  foreach($results as $doc){
    $myfile = fopen("users/".$name."/".$doc.".txt", "w");
  }
}

?>
<?php  bottomfoot();
?>
    <div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="eight columns offset-by-two registered">
        <div>
          <h2>Welcome to inspire, <span><?php echo $_POST["username"]; ?></span></h2>
          <p><strong>You chose:</strong></p>
          <ul>
            <?php
              //reprint what they chose
              $results = $_POST["cat"];
              if($results){
              foreach($results as $doc){
                $doc = preg_replace('/_/', ' ', $doc);
            ?>
            <li><?= $doc ?></li>
            <?php } }
            else{
              ?>
              <li>No Submissions</li>
            <?php }
            ?>
          </ul>
          <h3><a href="signin.php">Log in</a> now to start bookmarking!</h3>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
