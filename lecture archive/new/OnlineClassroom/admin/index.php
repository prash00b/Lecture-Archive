<?php
include 'database.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Admin Area | Dashboard </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin_style.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>

  </head>

  <body>

<!-- Nav bar -->

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin Panel</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Dashboard</a></li>
<!--             <li><a href="questions.php">Questions</a></li>
        <li><a href="users.php">Users</a></li> -->

      </ul>

       <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#"><?php echo $_SESSION['Aid']; ?></a></li> -->
        <li><a href="../logout.php">Logout</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Lecture Archive</small></h1>
      </div>
     <!--  <div class="col-md-2">
        <div class="dropdown create">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"   aria-haspopup="true" aria-expanded="true">
            Create Content
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a type="button" data-toggle="modal" data-target="#addQuestions"> Add Questions</a></li>
            <li><a type="button" data-toggle="modal" data-target="#addUsers" >Add User</a></li>
          </ul>
        </div>
      </div> -->
    </div>
  </div>
</div>

<section id="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="active">Dashboard</li>
    </ol>
  </div>
</section>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
       
        <div class="list-group">
          <a href="index.php" class="list-group-item" style="background-color: grey;">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
          </a>
          <a href="studentdetails.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Student Details <!-- <span class="badge">12</span> --></a>
          <a href="facultydetails.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Faculty Details <!-- <span class="badge">5</span> --></a>
          <a href="guestdetails.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Guest <!-- <span class="badge">5</span>--></a>
        </div>


      </div>
      <div class="col-md-9">

        <!--Website Overview-->

        <div class="panel panel-default">
          <div class="panel-heading" style="background-color: grey">
            <h3 class="panel-title">Website Overview</h3>
          </div>
          <div class="panel-body">
            <div class="col-md-4">
              <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <?php include_once('countstudentadmin.php');?>
                </h2>
                <h4> Students </h4>
              </div>
            </div>

            <div class="col-md-4">
              <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                <?php include_once('countfacultyadmin.php');?></h2>
                <h4> Faculty Members </h4>
              </div>
            </div>
            <div class="col-md-4">
              <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                <?php include_once('countguestadmin.php');?></h2>
                <h4> Guests </h4>
              </div>
            </div>
          </div>
        </div>
          </div>
        </div>

      <!--Latest Users



      </div>
    </div>
  </div>
</section>

    <footer id="footer">
      <p>Copyright LA, &copy; 2021</p>
    </footer>


  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
