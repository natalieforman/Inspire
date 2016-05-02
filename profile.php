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
  <script type="text/javascript" src="css-js/jquery-2.2.3.min.js"></script>
  <script type="text/javascript" src="css-js/ajaxform.js"></script>

<script>
//code for two buttons
$(document).ready(function(){
    $("#toggle").click(function(){
        $("#newCard").toggle();
        if ($(this).text() == "New Card") { 
           $(this).text("Hide"); } 
        else { 
           $(this).text("New Card");  }; 
    });
    $("#toggle2").click(function(){
        $("#newLink").toggle();
        if ($(this).text() == "New Link") { 
           $(this).text("Hide"); } 
        else { 
           $(this).text("New Link");  };

    });
});
</script>
</head>


<body>
<?php include 'php/common.php';

  //create session to know current user
   session_start();
   $_SESSION['username'] = $_GET["username"];

    topheader(); 
?>
    <div class="wrapper profile">
  <div class="container">
    <div class="row">
      <div class="four columns offset-by-four">
        <div>
          <h2>Inspiration for <span><?php echo $_GET["username"]; ?></span></h2>
        </div>
      </div>
      <div class="two columns">
        <div>
          <p><a href="signin.php">Log Out</a></p>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="wrapper">
  <div class="container">
          <div class="six columns offset-by-three buttons">
        <div>
          <button id="toggle">New Card</button>
          <button id="toggle2">New Link</button>
        </div>
      </div>
    <div class="row add">
        <div class="six columns offset-by-three" id="newCard">

      <!--NEW CARD FOR USER -->
        <form action="php/addCard.php" method="post" class="ajaxform">
          <h3>new inspiration card</h3>
          <fieldset>
            <span>New Card:</span>
            <input type ="text" name="cardName">
            <input type="submit" value="Submit">
            </fieldset>
        </form>
      </div>
        <div class="eight columns offset-by-two bookmark newLink" id="newLink">

      <!--NEW LINK FOR CARD -->
        <form action="php/addLink.php" method="post" class="ajaxform">
          <h3>add inspiration</h3>
          <fieldset>
            <span>Title:</span>
            <input type ="text" name="shortName">
            <span>Link:</span>
            <input type ="text" name="newLink" size="30">
          <br>
            <span>Description:</span>
            <input type ="text" name="desc">
          <span>inspire card:</span>
            <select name="category" id="dropList">
            <script>
            $("#dropList").load("php/dropList.php");
            </script>
          </select>
        <br>
            <input type="submit" value="Submit">
            </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="wrapper" id="lists">
  <div class="container">
    <!--LOAD USER DATA -->
    <div class="row">
            <script>
      $("#lists").load("php/loadProfile.php");
      </script>
    </div>
  </div>
</div>


</body>
</html>
