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
?>
    <div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="four columns offset-by-two login">
          <a href="signup.php">
            <img src="assets/square.png" alt="icon" width="100" height="100"/>
            <p>Sign up for a new account</p>
          </a>
      </div>
      <div class="four columns login">
          <a href="signin.php">
            <img src="assets/profile.png" alt="icon" width="100" height="100"/>
            <p>Log into your account</p>
          </a>
      </div>
    </div>
  </div>
</div> 
<?php
  bottomfoot();
?>
</body>
</html>
