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
      <div class="eight columns offset-by-two">
        <div>
      <form action="profile.php <?php $_GET["username"] ?> " method="get">
        <h3>Returning User</h3>
        <fieldset>

        <!-- name, 16 char -->
        <strong>Username:</strong>
        <input type ="text" name="username" size="30">
        
        <!-- sign up - submit button to matches-submit.php -->
        <input type="submit" value="Log In">
        </fieldset>
        <p><a href="signup.php">Need an account?</a></p>
      </form>
    </div>
      </div>
    </div>
  </div>
</div>

<?php
  bottomfoot();
?>

</body>
</html>
