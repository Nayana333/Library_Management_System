<html>
<?php
$adno=$_POST["adno"];
$sname=$_POST["name"];
$dept=$_POST["dept"];
$mobno=$_POST["mobno"];
$year=$_POST["year"];
$con=mysql_connect("localhost","root","");
if(!$con)
{
 echo"couldn't connect to server".mysql_error($con);
}  
$db=mysql_select_db("project_65",$con);
if(!$db)
{
echo"cannot connect to database".mysql_error($con);
}
session_start();
$adno=$_SESSION["adno"];
$q1="select * from student where adno=$adno";
$result=mysql_query($q1,$con);
$row=mysql_fetch_array($result);
$sname1=$row["name"];
echo $sname1;
exit;
$dept1=$row["dept"];
$mobno1=$row["mobno"];
$year1=$row["year"];
?>
<head>
<title>Student registration form</title>
<style>
label{
width:120px;
display:inline-block;
}
</style>
</head>
<body>
<center><h2><u>UPDATION FORM</u></h2></center>
<form>
<center><label>ADNO:</label><input type="text" name="adno" ></center><br>
<center><input type="submit" name="btn" value="GET DETAILS" ></center><br>
<center><label>NAME:</label><input type="text" name="name" value="<?php echo $sname1;?>"></center><br>
<center><label>DEPARTMENT:</label><input type="text" name="dept" value="<?php echo $dept1;?>"></center><br>
<center><label>MOBNO:</label><input type="text" name="mobno" value="<?php echo $mobno1;?>"></center><br>
<center><label>YEAR:</label><input type="text" name="year" value="<?php echo $year1;?>"></center><br>
<center><input type="submit" name="SUBMIT" value="UPDATE"></center>
</form>
</body>
</html>
