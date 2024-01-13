<?php
$stname=$_POST["stname"];
$stid=$_POST["stid"];
$posn=$_POST["posn"];
$mbno=$_POST["mbno"];
$gen=$_POST["gen"];
$usn=$_POST["usn"];
$psw=$_POST["psw"];
$jdate=$_POST["jdate"];
$con=mysql_connect("localhost","root","");
if($con)
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
$query1="insert into login (usn,psw,type)values('$usn','$psw','staff')";
if(mysql_query($query1,$con))
{
echo "login completed";
}
else
{
echo"error".mysql_error($con);
}
$query2="insert into staff values('$stname',$stid,'$posn','$mbno','$gen','$usn','$jdate')";
if(mysql_query($query2,$con))
{
echo"registration completed successfully";
}
else
{
 echo"error".mysql_error($con);
}
mysql_close($con);
?>
