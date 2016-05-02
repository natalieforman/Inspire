<div id="container" class="container">
  <div class="row">
    <?php
      session_start();
      $username = $_SESSION['username'];
      $path    = '../users/'.$username;

      //CHECK THAT THE USER EXISTS
      if(!is_dir($path)){
        ?>
        <p>Username not found</p>
        <a href="signup.php">Sign up here</a>

        <?php
      }
      //if they exist, read in all of the files
      else{
      $files = scandir($path);
      array_shift($files);
      array_shift($files);
      foreach($files as $text){
        $temp = basename($text, ".txt");
        //read in each name in the user's file
        $title = preg_replace('/_/', ' ', $temp);
        $newname = json_encode($username);
    ?>
    <div class="four columns bookmark">
        <h3><?= $title ?>
        <!--Link to delete the card-->
        <img src="assets/garbage.png" width="15" height="15" alt="delete" id=<?=$temp?> onclick="del('<?php echo $username ?>', this.id)">
        </h3>
        <dl>
          <?php
          //for each file, print the list of links
          $content = file("../users/".$username."/".$text);
                  foreach ($content as $match){
                    $answer = explode(",", $match);
              ?>
                <dt><a href=<?=$answer[0]?> target="_blank"><?=$answer[1]?></a></dt>
                <?php if(isset($answer[2])){?>
                <dd><?=$answer[2]?></dd>
              <?php } } ?>

        </dl>
    </div>

    <?php
    }
    }
    ?>
  </div>
</div>