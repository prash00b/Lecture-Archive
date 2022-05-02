<?php
session_start();

if ( $_SESSION[ "fidx" ] == "" || $_SESSION[ "fidx" ] == NULL ) {
	header( 'Location:facultylogin' );
}

$userid = $_SESSION[ "fidx" ];
$fname = $_SESSION[ "fname" ];

?>
<?php include('fhead.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Attendance Record</title>
</head>
<body style="background: #dcdcdc;">

<section class="atten">
	<div class="container">
		<div class="atten-title">
			<h4>Attendance Record's</h4>
		</div>
		<div class="search-tag">
			<form>
				<label>Class per Subjects</label>
				<select>
					<option value="">Course</option>
					<option value="">course2</option>
				</select>
				<input type="date" name="">
				<button type="submit">Filter</button>
			</form>
		</div>
		<div class="info">
			<ul>
				<li>Course:<span class="sub-text"> Sample Course</span></li>
				<li>Class:<span class="sub-text"> 1-B</span></li><br>
				<li>Subject:<span class="sub-text"> Subject 2</span></li>
				<li>Date of Class:<span class="sub-text"> Mar 01,2020</span></li>
			</ul>
		</div>
		<div class="info-table">
			<table>
				<tr>
					<th>#</th>
					<th>Student</th>
					<th>Attendance</th>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>
	</div>
</section>

<style type="text/css">
.atten {
	padding: 0 10%;
}
.container {
	background: #fff;
	padding-bottom: 30px;
	border-radius: 5px;
}
.atten .atten-title {
	background: #f7f7f7;
	border-bottom: 1px solid #dfdfdf;
}	
.atten .atten-title h4 {
	padding: 20px 20px 0 20px;
}
.atten .info ul{
	padding: 0;
	margin: 0;
}
.atten .info ul li {
	display: inline-block;
	width: 40%;
	margin-bottom: 20px;
}
.atten .search-tag {
	padding: 30px 0 30px 80px;
}
.atten .search-tag label {
	padding-right: 10px;
}
.atten .search-tag select {
	height: 35px;
	width: 350px;
	padding-left: 5px;
	margin-right: 30px;
}
.atten .search-tag input {
	height: 32px;
	padding-left: 5px;
	width: 200px;
	margin-right: 30px;
}
.atten .search-tag button {
	background-color: #0069d9;
    color: #fff;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}
.atten .info {
	padding:  30px 30px;
}
.atten .info .sub-text {
	font-weight: bold;
}
.atten .info-table {
	padding: 0 30px;
}
.atten table {
	width: 100%;
	padding: 0 30px;
}
.atten table, th, td {
    border-collapse: collapse;
    padding: 6px;
    text-align:center;
}
.atten tr:nth-child(even){
	background: #dbdbdb;
}
</style>
</body>
</html>

	<?php include('allfoot.php');  ?>