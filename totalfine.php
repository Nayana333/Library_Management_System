
<?php
session_start();
include('login.php');
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
$query="select * from returns";
$sum=0;
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
$sum=$sum+$row['fine'];
}
echo "Total Amount".$sum;
mysql_close($con);
?>
