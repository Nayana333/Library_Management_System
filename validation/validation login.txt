<html>
<head>
<style>
h1{
font-size:70px;}
label{width:150px;
margin-left:5px;
display:inline-block;}
.error{
color:red;
}
</style>
</head>
<body bgcolor="lightblue" text="purple"><center>
<?php
$usererr=$passerr="";
$userid=$password="";
if($_POST)
{
if(empty($_POST["userid"]))
$usererr="userid is required";
else
$userid=$_POST["userid"];
if(empty($_POST["password"]))
$passerr="password is required";
else
$password=$_POST["password"];
}
?>
<form method="POST">
<h1><u>HOME PAGE</u></h1>
<label>Enter Userid:</label><input type="text" name="userid"><span class="error"><?php echo $usererr;?></span><br><br>
<label>Password:</label><input type="password" name="password"><span class="error"><?php echo $passerr;?></span><br><br>
<input type="submit" name="submit" value="LOGIN"><BR><BR>
<a href="registration.php">NEW USER</a>
</form></center>
<?php
$con=mysql_connect("localhost","root","toor");
if(!$con)
{
 echo "couldn't connect to server".mysql_error($con);
}
$db=mysql_select_db("project_7558",$con);
if(!$db)
{
echo "cannot connect to database".mysql_error($con);
}
$q="select *from usertable where userid='$userid' and password='$password'";
$result=mysql_query($q,$con);
if(mysql_num_rows($result)>0)
{
$_SESSION["userid"]=$userid;
$row=mysql_fetch_array($result);
$r=$row['role'];
if($r=='admin')
header('location:adminhome.php');
else if($r=='donor')
header('location:donorhome.php');
else if($r=='receipient')
header('location:receipienthome.php');
}
else
echo "invalid username or password";
mysql_close($con);
?>
</body>
</html>
