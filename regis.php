<?php
$sname=$_POST["NAME"];
$adno=$_POST["ADNO"];
$dept=$_POST["DEPARTMENT"];
$mobno=$_POST["MOBILE_NO"];
$gender=$_POST["gender"];
$usn=$_POST["usn"];
$year=$_POST["year"];
$psw=$_POST["psw"];
$con=mysql_connect("localhost","root","");
if($con)
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
$query="insert into login (usn,psw,type)values('$usn','$psw','student')";
if(mysql_query($query,$con))
{
echo "login completed";
}
else
{
echo"error".mysql_error($con);
}
$query1="insert into student values($adno,'$sname','$dept','$mobno','$gender','$usn','$year')";
if(mysql_query($query1,$con))
{
echo"registration completed successfully";
}
else
{
 echo"error".mysql_error($con);
}
mysql_close($con);
?>
