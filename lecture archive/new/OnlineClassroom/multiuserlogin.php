<!doctype html>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="multiuserlogin";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['Login'])){
$user=$_POST['user'];
$pass = $_POST['pass'];
$usertype=$_POST['usertype'];
$query = "SELECT * FROM `multiuserlogin` WHERE username='".$user."' and password = '".$pass."' and usertype='".$usertype."'";
$result = mysqli_query($conn, $query);
if($result){
while($row=mysqli_fetch_array($result)){
echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['usertype'].'")</script>';

}
if($usertype=="admin"){
?>
<script type="text/javascript">
window.location.href="welcomefaculty.php"</script>
<?php

}else{
?>
<script type="text/javascript">
window.location.href="welcomestudent.php"</script>
<?php

}
}else{
echo 'no result';
}
}
$_SESSION['login'] = true;

?>
<html>
<head>
<meta charset="utf-8">
<title>Multi user login system</title>
</head>

<body>
<form method="post">
<table>
<tr>
<td>Username:<input type="text" name="user" placeholder="enter your username"</td>

</tr>
<tr>
<td>Password:<input type="text" name="pass" placeholder="enter your password"</td>
</tr>
<tr>
<td>
Select user type: <select name="usertype">
<option value="student">student</option>
<option value="faculty">faculty</option>
</select>
</td>
</tr>
<tr>
<td><input type="submit" name="Login" value="Login"></td>
</tr>
</table>
</form>
</body>
</html>
