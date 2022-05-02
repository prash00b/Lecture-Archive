<?php
session_start();

if ( $_SESSION[ "fidx" ] == "" || $_SESSION[ "fidx" ] == NULL ) {
	header( 'Location:facultylogin' );
}

$userid = $_SESSION[ "fidx" ];
$fname = $_SESSION[ "fname" ];

?>
<?php include('fhead.php'); ?>
<div class="container">
		<div class="row">
			<h3> Welcome <a href="welcomefaculty.php" <?php echo "<span style='color:black'>".$fname."</span>"; ?></a></h3>
<div class="container">

      
<?php
  $directory = "attendance";
  $contents = scandir($directory);
    echo "<ol>";
    foreach($contents as $k => $v) {
      if($v == "." || $v == "..") {
        continue;
        }
      echo "<li><a href=\"$directory/" . $v . "\"> $v </a></li>";
  }
  echo "</ol>";
  
?>
    </div>
    </div>
    
<?php include('allfoot.php'); ?>