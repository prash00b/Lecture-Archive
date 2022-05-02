<?php
session_start();

if ( $_SESSION[ "sidx" ] == "" || $_SESSION[ "sidx" ] == NULL ) {
	header( 'Location:studentlogin' );
}

$userid = $_SESSION[ "sidx" ];
$userfname = $_SESSION[ "fname" ];
$sEno = $_SESSION[ "seno" ];
$userlname = $_SESSION[ "lname" ];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Student Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<!--Boxicons CDN Link -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="Width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="sidebar">
		<div class="logo_content">
			<div class="logo">
			<i class='bx bxs-archive'></i>
			<div class="logo_name">Lecture Archive</div>	
			</div>
			<i class='bx bx-menu' id="btn"></i>
		</div>
		<ul class="nav_list">
			<li>
				<a href="#">
				 <i class='bx bx-grid-alt'></i>
				 <span class="links_name">Dashboard</span>
				</a>
	
			</li>

			<li>
			<a href="mydetailsstudent.php?myds=<?php echo $userid;  ?>" target="_top">
				 <i class='bx bx-user'></i>
				 <span class="links_name"><?php echo "<span style='bold'>".$userfname."</span>";?></span>
				</a>

			</li>
            

			<!-- <li>
			<a href="takeassessment.php?seno=<?php echo $sEno; ?>">
				 <i class='bx bx-pencil'></i>
				 <span class="links_name">Take Assesment</span>
				</a>
			</li> -->

			<li>
			<a href="filelist.php?eid=<?php echo $userid;  ?>">
				 <i class='bx bxs-spreadsheet'></i>
				 <span class="links_name">Class Materials</span>
				</a>
			</li>

			<li>
				<a href="assignmentsubmit.php?myds=<?php echo $userid;  ?>">
				 <i class="bx bxs-book-open"></i>
				 <span class="links_name">Assignment</span>
				</a>
			</li>

			<li>
				<a href="submitassignment.php?myds=<?php echo $userid;  ?>">
				 <i class="bx bxs-book-open"></i>
				 <span class="links_name">Submit assignment</span>
				</a>
			</li>

		

			<li>
			<a href="viewclass.php?eid=<?php echo $userid;  ?>">
		         <i class="bx bxs-videos"></i>
		        <span class="links_name">Join a class</span>
		       </a>
				 
			</li>
			<!-- <li>
			<a href="viewattendance.php?eid=<?php echo $userid;  ?>">
				 <i class='bx bx-check-list'></i>
				 <span class="links_name">Attendance</span>
				</a>
				 
			</li> -->
			
			<li>
			<a href="askquery.php?eid=<?php echo $userid;  ?>">
				 <i class='bx bx-send'></i>
				 <span class="links_name">Leave a message</span>
				</a>
				 
			</li>
			<li>
			<a href="viewquery.php?eid=<?php echo $userid;  ?>"> 

				 <i class='bx bx-message'></i>
				 <span class="links_name">Messages</span>
				</a>
				
			</li>
			<li>
				<a href="logoutstudent.php">
				 <i class='bx bx-log-out'></i>
				 <span class="links_name">Logout</span>
				</a>
			</li>	
		</ul>
		
</div>

<div class="content">

	<div class="head">
		<div class="col-div-6">
			<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
			<!-- <span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span> -->
		</div>
	</div>

	
	<div class="col-div-6">
		<div class="profile">
			<img src="images/user.png" class="pro-img" />
				<p><?php echo "".$userfname." ".$userlname."";?></p>
		</div>
	</div>


	<div class="col-div-3">
		<div class="box">
			<p><?php include_once('countvideos.php');?></p>
			<i class="fa fa-list box-icon"></i>
			<p>Video</p>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			
			<p><?php include_once('countassignment.php');?></p>
			<i class="fa fa-list box-icon"></i>
			<p>Messages</p>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
		
		<p><?php include_once('countmaterials.php');?></p>
			<i class="fa fa-list box-icon"></i>
			<p>Materials</p>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
		
		<p><?php include_once('countcourses.php');?></p>
			<i class="fa fa-list box-icon"></i>
			<p>Work</p>
		</div>
	</div>

	<div class="col-div-8">
		<div class="box-8">
			<div class="content-box">
				<p>Notifications<span>here</span></p>
				<br/>
				<table>
  					<tr>
    					<th>SN.no</th>
    					<th>Description</th>
    					<th>Date</th>
  					</tr>
					  <tr>
    					<td>1</td>
    					<td>Assignment due </td>
    					<td>January 1,2022</td>
  					</tr>
					  <tr>
    					<td>2</td>
    					<td> Rober uploaded notes </td>
    					<td>January 2,2022</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

</div>
</body>
</html>