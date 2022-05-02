<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FILES</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php
        include 'database.php';
        $sql="SELECT name from uploaded_files";
        $query=mysqli_query($connect,$sql);
        while ($info=mysqli_fetch_array($query)) {
          ?>
        <embed type="application/pdf" src="uploads/<?php echo $info['name'] ; ?>" width="900" height="500">
        ?>
  </body>
</html>
<?php include('allfoot.php'); ?>