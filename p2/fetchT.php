<html>
<?php
$tid=$_POST["tid"];
$tname=$_POST["tname"];
$deptm=$_POST["deptm"];
$pos=$_POST["pos"];
$mob=$_POST["mob"];
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
$tid=$_GET["tid"];
$q1="select * from teacher where tid=$tid";
$result=mysql_query($q1,$con);
$row=mysql_fetch_array($result);
$tid1=$row["tid"];
$tname1=$row["tname"];
$deptm1=$row["deptm"];
$pos1=$row["pos"];
$mob1=$row["mob"];
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
<form method="POST" action="updateT.php">
<center><label>TID:</label><input type="text" name=tid value="<?php echo $tid1;?>"></center><br>
<center><label>NAME:</label><input type="text" name="tname" value="<?php echo $tname1;?>"></center><br>
<center><label>DEPARTMENT:</label><input type="text" name="deptm" value="<?php echo $deptm1;?>"></center><br>
<center><label>POSITION:</label><input type="text" name="pos" value="<?php echo $pos1;?>" ></center><br>
<center><label>MOBILE NO:</label><input type="text" name="mob" value="<?php echo $mob1;?>"></center><br>
<center><input type="submit" name="SUBMIT" value="UPDATE"></center>
</form>
</body>
</html>
