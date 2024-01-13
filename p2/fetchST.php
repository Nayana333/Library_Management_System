<html>
<?php
$stid=$_POST["stid"];
$stname=$_POST["stname"];
$posn=$_POST["posn"];
$mbno=$_POST["mbno"];
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
$stid=$_GET["stid"];
$q1="select * from staff where stid=$stid";
$result=mysql_query($q1,$con);
$row=mysql_fetch_array($result);
$stid1=$row["stid"];
$stname1=$row["stname"];
$posn1=$row["posn"];
$mbno1=$row["mbno"];
?>
<head>
<title>updation</title>
<style>
label{
width:120px;
display:inline-block;
}
</style>
</head>
<body>
<center><h2><u>UPDATION FORM</u></h2></center>
<form method="POST" action="updateST.php">
<center><label>STID:</label><input type="text" name=stid value="<?php echo $stid1;?>"></center><br>
<center><label>STAFF NAME:</label><input type="text" name="stname" value="<?php echo $stname1;?>"></center><br>
<center><label>POSITION:</label><input type="text" name="posn" value="<?php echo $posn1;?>"></center><br>
<center><label>MOBILE NO:</label><input type="text" name="mbno" value="<?php echo $mbno1;?>" ></center><br>
<center><input type="submit" name="SUBMIT" value="UPDATE"></center>
</form>
</body>
</html>
