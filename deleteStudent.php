<?php
$adno=$_GET["adno"];
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
$result="delete from student where adno=$adno";
if(mysql_query($result,$con))
{
echo "record deleted succesfully";
}
else
{
echo "not deleted";
}
mysql_close($con);
?>


