<?php
$stid=$_GET["stid"];
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("couldn't connect to server".mysql_error($con));
}
$db=mysql_select_db("project_65",$con);
if(!$db)
{
die("cannot connect to database".mysql_error($con));
}
$result2="delete from staff where stid='$stid'";
if(mysql_query($result2,$con))
{
echo"<script>alert('staff record deleted success');window.location='homepageA.php';</script>";
}
else
{
echo"<script>alert('not deleted');window.location='homepageA.php';</script>";
}
mysql_close($con);
?>


