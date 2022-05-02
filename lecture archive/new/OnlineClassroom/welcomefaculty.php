<?php
session_start();

if ( $_SESSION[ "fidx" ] == "" || $_SESSION[ "fidx" ] == NULL ) {
	header( 'Location:facultylogin' );
}

$userid = $_SESSION[ "fidx" ];
$fname = $_SESSION[ "fname" ];

?>

 <div class="container">
<!-- linked pages here -->
		</div> 

		<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Faculty Dashboard</title>
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
			<!-- <li>
				<i class='bx bx-search' ></i>
				<input type="text" placeholder="Search...">
			
			</li> -->

			<li>
				<a href="#">
				 <i class='bx bx-grid-alt'></i>
				 <span class="links_name">Dashboard</span>
				</a>
				
			</li>

			<li>
			<a href="mydetailsfaculty.php?myfid=<?php echo $userid ?>">
				 <i class='bx bx-user'></i>
				 <span class="links_name"><span style="bold"> <?php echo $fname; ?></span></span>
				</a>
			 
			</li>
             
             <li>
				<a href="insertfile.php">
				 <i class="bx bxs-note"></i>
				 <span class="links_name">Upload Class Materials</span>
				</a>
				
			</li>

			<li>
			<a href="assignment.php">
				 <i class='bx bx-pencil'></i>
				 <span class="links_name">Give  Assignment</span>
				</a>
				
			</li>
			<li>
			<a href="viewstudentdetails.php">
				 <i class='bx bx-file'></i>
				 <span class="links_name">Student details</span>
				</a>
				
			</li>
		
			<li>
			<a href="qureydetails.php">
				 <i class='bx bx-chat'></i>
				 <span class="links_name">Messages</span>
				</a>
			</li>
			<li>
				<a href="assignment.php">
				 <i class="bx bxs-note"></i>
				 <span class="links_name">MCQ</span>
				</a>
				
			</li>

			<li>
				<a href="addclass.php?eid=<?php echo $userid;  ?>"">
		         <i class="bx bx-video"></i>
		        <span class="links_name">Conduct a class</span>
		       </a>
				
			</li>

			<li>
			<a href="videos.php">
		          <i class="bx bxs-videos"></i>
		           <span class="links_name">Related videos</span>
		            </a>
				
			</li>
		
			<li>
				<a href="logoutfaculty">
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
			<img src="images/faculty.jpg" class="pro-img" />
				<p><?php echo "".$fname."";?></p>
		</div>
	</div>


	<div class="col-div-3">
		<div class="box">
			<p><?php include_once('countquery.php');?></p>
			<i class="fa fa-list box-icon"></i>
			<p>Queries</p>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p><?php include_once('countstudent.php');?></p>
			<i class="fa fa-list box-icon"></i>
			<p>Students</p>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
		
		<p><?php include_once('countquery.php');?></p>
			<i class="fa fa-list box-icon"></i>
			<p>Query</p>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
		
		<p><?php include_once('countquery.php');?></p>
			<i class="fa fa-list box-icon"></i>
			<p>Query</p>
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
    					<td>Robert completed assignment </td>
    					<td>January 1,2022</td>
  					</tr>
					  <tr>
    					<td>2</td>
    					<td>New query </td>
    					<td>January 5,2022</td>
  					</tr>
	
				</table>
			</div>
		</div>
	</div>

</div>

</body>
</html>

	