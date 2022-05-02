<?php
session_start();

if ( $_SESSION[ "sidx" ] == "" || $_SESSION[ "sidx" ] == NULL ) {
	header( 'Location:studentlogin' );
}

$userid = $_SESSION[ "sidx" ];
$userfname = $_SESSION[ "fname" ];
$userlname = $_SESSION[ "lname" ];
?>
<?php include('studenthead.php'); ?>
<div class="container">
		<div class="row">
			<h3> Welcome <a href="welcomestudent.php" <?php echo "<span style='color:red'>".$userfname." ".$userlname."</span>"; ?></a></h3>
      
<?php
  $directory = "uploads/";
  $contents = scandir($directory);
    if ($contents) {
      if ($contents) {
        foreach($contents as $key => $value) {
              if ($value == "." || $value == "..") {
              unset($key);
              }
        }
     }
        echo "<ol>";
    foreach($contents as $k => $v) {
      echo "<li><a href=\"$directory/" . $v . "\"> $v </a></li>";
    }
        echo "</ol>";
  }
?>
    </div>
    </div>
    
<?php include('allfoot.php'); ?>