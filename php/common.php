<?php
function topheader(){
?>
<div class="wrapper wrapper-head">
  <div class="container">
    <div class="row title">
      <div class="four columns offset-by-four">
        <h1><a href="index.php">inspire</a></h1>
      </div>
    </div>
    <div class="row title">
      <div class="six columns offset-by-three">
        <h2>a way to bookmark all of your hobbies in a visual way</h2>
      </div>
    </div>
  </div>
</div>
<?php
}
?>

<?php
function bottomfoot(){
?>
<footer>
<div class="wrapper wrapper-footer">
  <div class="container footer">
    <div class="row">
        <div class="six columns offset-by-three">
          <p>All content developed by Natalie Forman
        </div>
     </div>
  </div>
</div>
</footer>
<?php
}
?>

<?php
function defaultTabs(){
  $array = array(
    "Graphic Design",
    "Computer Science",
    "Profiles",
    "Resumes",
    "Blogs",
    "Tutorials",
    "Jobs",
    "Typography"
    );

  return $array;
}
?>

