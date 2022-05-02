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
		<div class="col-md-2"></div>

			<?php 

			include('database.php');
			$seid=$_GET['eid'];
			//below query will print the existing record of query
			$sql="SELECT * FROM query WHERE Eid='$seid'";
			$rs=mysqli_query($connect,$sql);
			echo "<h2 class='page-header'>Query View</h2>";
			echo "<table class='table table-striped table-hover' style='width:100%'>
			<tr>
			<th>#</th>
			<th>Query</th>
			<th>Answer</th>						
			</tr>";
			$count=1;
			while($row=mysqli_fetch_array($rs))
			{
			?>
			<tr>
				<td>
					<?php echo $count;?>
				</td>
				
				<td>
					<?php echo $row['Query'];?>
				</td>
				<td>
					<?php echo $row['Ans'];?>
				</td>
			</tr>
			<?php
			$count++; }
			?>
			</table>
			<a href="askquery.php?eid=<?php echo $userid;  ?>"> <button  href="" type="submit" class="btn btn-success" style="border-radius:0%">Ask New Query</button></a>
			<td><a href="welcomestudent"><input type="button" Value="Back" style="border-radius:0%" class="btn btn-info"></a></td>
		</div>

		<div class="col-md-2"></div>
	</div>
	<?php include('allfoot.php'); ?>