<html>
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
<?php
$con=mysql_connect("localhost","root","");
if($con)
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
session_start();
$tid=$_SESSION["tid"];
$q="select * from teacher where tid=$tid";
$result=mysql_query($q,$con);
$row=mysql_fetch_array($result);
$tid=$row["tid"];
$tname=$row["tname"];
$deptm=$row["deptm"];
$pos=$row["pos"];
$mob=$row["mob"];
?>
<form method="POST" action="updateT.php">
<center><label>TID:</label><input type="text" name="tid" value="<?php echo $tid;?>"></center><br>
<center><label>NAME:</label><input type="text" name="tname" value="<?php echo $tname;?>"></center><br>
<center><label>DEPARTMENT:</label><input type="text" name="deptm" value="<?php echo $deptm;?>"></center><br>
<center><label>MOBNO:</label><input type="text" name="mob" value="<?php echo $mob;?>"></center><br>
<center><label>POSITION:</label><input type="text" name="pos" value="<?php echo $pos;?>"></center><br>
<center><input type="submit" name="SUBMIT" value="UPDATE"></center>
</form>
</body>
</html>
