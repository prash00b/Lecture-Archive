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
		<div class="col-md-12">
			<h3> Welcome <a href="welcomefaculty.php" <?php echo "<span style='color:red'>".$fname." </span>";?> </a></h3>
</div>
</div>
<?php 
include 'database.php';
if (isset($_POST['upload'])) {
	$pdf=$_FILES['file']['name'];
	$pdf_type=$_FILES['file']['type'];
	$pdf_size=$_FILES['file']['size'];
	$pdf_temp_loc=$_FILES['file']['tmp_name'];
	$pdf_store="uploads/".$pdf;
	move_uploaded_file($pdf_temp_loc,$pdf_store);
	$sql="INSERT INTO uploaded_files (name) VALUES ('$pdf')";
	$query=mysqli_query($connect,$sql);

	if ($query) {
		move_uploaded_file($pdf_temp_loc, $pdf);
		echo "<script>alert('Wow! File uploaded successfully.')</script>";
		// Select id from database
		$sql = "SELECT id FROM uploaded_files ORDER BY id DESC";
		$result = mysqli_query($connect, $sql);
		if ($row = mysqli_fetch_assoc($result)) {
			// $link = $base_url . "filelist.php?id=" . $row['id'];
			$link_status = "display: block;";
		}
	}
	 else {
		echo "<script>alert('Woops! Something wong went.')</script>";
	}
	
  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Class-Materials</title>
</head>
<body>
	<div class="file__upload">
		<div class="header">
			<p><i class="fa fa-cloud-upload fa-2x"></i><span><span>up</span>load</span></p>			
		</div>
		<form action="insertfile.php" method="POST" enctype="multipart/form-data" class="body">
			<!-- Sharable Link Code -->
			<input type="checkbox" id="link_checkbox">
			<input type="text" value="<?php echo $link; ?>" id="link" readonly>
			

			<input type="file" name="file" id="upload" required>
			<label for="upload">
				<i class="fa fa-file-text-o fa-3x"></i>
				<p>
					<strong>Drag and drop</strong> files here<br>
					or <span>browse</span> to begin the upload
				</p>
			</label>
			<button name="upload" class="btn">Upload</button>
		</form>
	</div>
	</body>
	<?php include('allfoot.php'); ?>
</html>
