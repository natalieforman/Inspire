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

<script>
//make sure that they enter a username before continuing
    function validateForm()
    {
    var x=document.forms["newUser"]["username"].value;
    if (x==null || x=="")
      {
      alert("username must be filled out");
      return false;
      }
    }
</script>
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
      <form name="newUser" action="signup-submit.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <h3>New User Signup</h3>
        <fieldset>

        <!-- name, 16 char -->
        <strong>Name:</strong>
        <input type ="text" name="firstname" size="16"><br>
        
        <strong>Email:</strong>
        <input type ="text" name="email" size="30"><br>

        <strong>Username:</strong>
        <input type ="text" name="username" size="30"><br>
        
        <!-- dropdown select -->
        <strong>Categories</strong>
      <br>
      <ul class="checkbox">
        <?php
        //load the different default options
        $catList = defaultTabs();
        foreach($catList as $cat){
          $valv = preg_replace('/\s+/', '_', $cat);
           ?>
        <li><input type="checkbox" name="cat[]" value=<?= $valv?>><?=$cat?></li>
        <?php } ?>
      </ul>
        
        <!-- sign up - submit button to signup-submit.php -->
        <input type="submit" value="Submit">
      </fieldset>
      <p><a href="signin.php">Already a user?</a></p>
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
