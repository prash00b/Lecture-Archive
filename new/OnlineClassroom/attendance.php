<?php
session_start();
if ( $_SESSION[ "fidx" ] == "" || $_SESSION[ "fidx" ] == NULL ) {
	header( 'Location:facultylogin' );
}
$userid = $_SESSION[ "fidx" ];
$fname = $_SESSION[ "fname" ];
?>

<?php include('fhead.php');  ?>

<!-- try -->
<link href="layout/css/ui.css" rel="stylesheet" type="text/css" />
    <style>
        .container{
            padding: 5px;
        }
        .head{
            margin-top: 10px;
            background-color:#f7efef;
            border-bottom:1px solid black;
            padding: 10px 20px;
        }
        .atn{
            margin-left: 10px;
        }
    </style>
<body>
<?php include( "database.php" ); ?>
    <h3> Welcome Faculty : <a href="welcomefaculty.php" ><span style="color:#FF0004"> <?php echo $fname; ?></span></a> </h3>
        <div class="container">
            <div class="head">
            <h5 >Check Attendance</h5>
            </div>
        <?php
                    if(isset($_POST['submit']))
                    {   
                        $date=$_POST['date'];
                        $checkbox=$_POST['tick'];
                        $query="INSERT into attendance (date,status) VALUES ('$date','$checkbox')";
                        if ( mysqli_query( $connect, $query ) ) {

                            echo "<br>
                            <br><br><br><br>
                            <div class='alert alert-success fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Success!</strong> New attendance Addded sucesfully <strong></strong></div>";
        
                        } else {
                            //error message if SQL query Fails
                            echo "<br><Strong>New attendance Adding Faliure. Try Again</strong><br> Error Details: " . $query . "<br>" . mysqli_error( $connect );
                        }
                        //close the connection
                        
                    }
                    
            ?>
<div class="row">
    <div class="col-lg-6 col-md-4">    
        <?php
		    $sql= "SELECT * from subjects";
				if(mysqli_query( $connect, $sql )) 
                    {
						$result = mysqli_query($connect, $sql);
                    }
		?>


<form action="attendance.php" method="POST">
<label for="Semester"> Subject Name </label><br>

					<select id="subjectid" name="subjectid">
		            <?php
						while($row = mysqli_fetch_assoc($result))
                    {
                    ?>
					<option value="<?=$row['subjectid']?>"><?=$row['subjectname']?></option>    
                <?php
					}	
				?>
				</select>
                </div>
            <div class="col-lg-6 col-md-4">
                <label for="">Date</label>
                <input type="date" class="form-control" name="date" id="">
            </div>
        </div>  
        <hr>

        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student</th>
                    <th>Attendance</th>
                </tr>
            </thead>
            <tbody>
            <tr>
            <?php
				$sql= "SELECT * from studenttable";
					if(mysqli_query( $connect, $sql )) 
                    {
						$result = mysqli_query($connect, $sql);
                    }
			?>
            <?php $count=1;?>
            <?php
                while($row = mysqli_fetch_assoc($result))
            {
            ?>
                <td><?php echo $count;?></td>
                <td name=""><?php echo $row['FName'].' ' .$row['LName'];?></td>
                <td>
                    <input type="checkbox" name="tick[]" value="0" >Present
                    <input type="checkbox" name="tick[]" value="1" >Absent<br/>
                </td>
            </tr>
            <?php
             $count++;
            }
            ?>
        </table> 
        
        <div style="display:flex; justify-content:center; align-self:center;">
            <button type="submit" style="width: 300px;" class="btn btn-primary" name="submit" >Save</button>
        </form>
        
        </div>
</div>


</body>
<?php include('allfoot.php');  ?>
