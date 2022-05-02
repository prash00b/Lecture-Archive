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
	<div class="row">
		
			
		<?php 
			
			include('database.php');
			$sql="SELECT * FROM video";
			$rs=mysqli_query($connect,$sql);
			echo "<h2 class='page-header'>Videos Details</h2>";
			echo "<table class='table table-striped table-hover' style='width:100%'>
			<tr>
				<th>#</th>
				<th>Video Title</th>
				<th>Description</th>
				<th>View</th>		
			</tr>";
			$count=1;
			while($row=mysqli_fetch_array($rs))
			{
			?>
		<tr>
			<td>
				<?PHP echo $count;?>
			</td>
			<td>
				<?PHP echo $row['V_Title'];?>
			</td>
			

			<td>
				<?PHP echo $row['V_Remarks'];?>
			</td>
			
					
							
			<td><a href="viewvideos2.php?viewid=<?php echo $row['V_id']; ?>"> <input type="button" Value="View" style="border-radius:0%"  class="btn btn-info btn-sm"  data-toggle="modal" data-target="#myModal"></a>
			</td>
		</tr>
		
		<?php
		$count++;}
		?>	
		
		<td><a href="welcomestudent.php"><input type="button" Value="Back" class="btn btn-info btn-sm" style="border-radius:0%;"></a></td>
		
		</table>
		
	</div>

		
	</div>
	<?php include('allfoot.php');  ?>