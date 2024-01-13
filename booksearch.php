
<?php
if($_POST)
{
$bname=$_POST["BNAME"];
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
echo "<center>book is available</center>";
}
else 
{
echo "book is not available";
}
mysql_close($con);
}
?>

