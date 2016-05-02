<?php
session_start();
$username = $_SESSION['username'];

$path  = '../users/'.$username;
  if(!is_dir($path)){
  }
  //as long as the path exists
  else{
  $files = scandir($path);
  //pop off "." and ".."
  array_shift($files);
  array_shift($files);
  //list all of the text file names
  foreach($files as $text){
    $title = basename($text, ".txt");
    $value = preg_replace('/_/', ' ', $title);

    ?>
    <option value=<?=$title?>><?=$value?>

<?php
}
}
?>