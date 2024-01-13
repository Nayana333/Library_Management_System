<?php
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
$bid=$_POST["bid"];
$bname=$_POST["bname"];
$author=$_POST["author"];
$q1="update book set bname='$bname',author='$author'where bid=$bid";
if(mysql_query($q1,$con))
{
echo"<script>alert('updated');window.location='homepageST.php';</script>";
}
else
echo"<script>alert('not updated');window.location='homepageST.php';</script>";
mysql_close($con);
?>
