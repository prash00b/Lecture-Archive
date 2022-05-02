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
		

		<div class="col-md-12">
			<h3> Welcome <a href="welcomestudent.php" <?php echo "<span style='color:red'>".$userfname."</span>";?> </a></h3>
		
		
		<div class="iframe-container" style="overflow: hidden; padding-top: 56.25%; position: relative;">
			<iframe allow="microphone; camera" style="border: 0; height: 100%; left: 0; position: absolute; top: 0; width: 100%;" src="https://us04web.zoom.us/j/72081153688?pwd=SyDwEiD9kdnwWZLfuUyWyWq0Rr6sAu.1" frameborder="0"></iframe>
	</div>
		</tr>
		<?php
		$count++;
		?>	
		</table>
		
	</div>

		
	</div>
	<?php include('allfoot.php');  ?>