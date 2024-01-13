<?php
$tid=$_POST["tid"];
$tname=$_POST["tname"];
$deptm=$_POST["deptm"];
$mob=$_POST["mob"];
$pos=$_POST["pos"];
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
$q1="update teacher set tname='$tname',deptm='$deptm',mob='$mob',pos='$pos' where (tid=$tid)";
if(mysql_query($q1,$con))
echo"<script>alert('updated');window.location='homepageA.php';</script>";
else
echo"<script>alert('not updated');window.location='homepageA.php';</script>";
mysql_close($con);
?>
