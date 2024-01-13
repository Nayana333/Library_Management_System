<?php
if($_POST)
{
$bname=$_POST["bname"];
$con=mysql_connect("localhost","root","");
if(!$con)
{
echo "couldn't";
}
$db=mysql_select_db("project_65",$con);
if(!$db)
{
echo "cannot connect db";
}
$val="select * from book where bname='$bname'";
$q=mysql_query($val);
if(mysql_num_rows($q)>0)
{
echo"<script>alert('book is not available');window.location='homepageS.php';</script>";
}
else 
{
echo"<script>alert('book is not available');window.location='homepageS.php';</script>";
}
mysql_close($con);
}
?>