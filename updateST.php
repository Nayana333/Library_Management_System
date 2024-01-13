<?php
$stid=$_POST["stid"];
$stname=$_POST["stname"];
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
$q1="update staff set stname='$stname',mbno='$mbno'where stid=$stid";
if(mysql_query($q1,$con))
echo"<script>alert('updated succesfully ');window.location='homepageA.php';</script>";
else
echo"<script>alert('not updated');window.location='homepageA.php';</script>";
mysql_close($con);
?>
