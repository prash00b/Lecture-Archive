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
			
		<?php 
			
			include('database.php');
			$video_id= $_GET['viewid'];
			$sql="SELECT * FROM video WHERE V_id=$video_id";
			$rs=mysqli_query($connect,$sql);?>			
			<?php
			while($row=mysqli_fetch_array($rs))
				{
				?>
					<tr>
						<td>
							<h2>Title: <?PHP echo $row['V_Title'];?></h2>
						</td>
						<br>
						
						<td>
							<?PHP echo $row['V_Url'];?>
						</td>
						<br>
						<td>
							<p> Video Description <?PHP echo $row['V_Remarks'];?> </p>
						</td>
						<br>
						<td><a href="viewvideos.php"> <input type=	"button" Value="Back"  class="btn btn-info" style="border-radius:0%"  data-toggle="modal" data-target="#myModal"></a>
						</td>
					</tr>
				<?php
				}
				?>
		
	</div>

		
	</div>
	<?php include('allfoot.php');  ?>