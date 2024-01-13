<?php
$iid=$_POST["iid"];
$bname=$_POST["bname"];
$bid=$_POST["bid"];
$usn=$_POST["usn"];
$idate=$_POST["idate"];
$ddate=$_POST["ddate"];
$iname=$_POST["iname"];
$con=mysql_connect("localhost","root","toor");
if($con)
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
$query1="insert into issue values($iid,'$bname',$bid,'$usn','$idate','$ddate','$iname')";
if(mysql_query($query1,$con))
{
echo"book issued successfully";
}
else
{
 echo"error".mysql_error($con);
}
mysql_close($con);
?>
