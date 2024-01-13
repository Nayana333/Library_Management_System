<?php
$bid=$_GET["bid"];
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
$result2="delete from book where bid='$bid'";
if(mysql_query($result2,$con))
{
echo"<script>alert('book deleted');window.location='homepageST.php';</script>";

}
else
{
echo"<script>alert('not deleted');window.location='homepageST.php';</script>";
}
mysql_close($con);
?>


