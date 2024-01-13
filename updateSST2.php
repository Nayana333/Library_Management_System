<?php
$adno=$_POST["adno"];
$sname=$_POST["sname"];
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
$q1="update student set sname='$sname',dept='$dept',mobno='$mobno',year='$year' where adno=$adno";
if(mysql_query($q1,$con))
echo"<script>alert('updated');window.location='homepageST.php';</script>";
else
echo"<script>alert('not updated');window.location='homepageST.php';</script>";
mysql_close($con);
?>
