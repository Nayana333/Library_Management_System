<?php
$adno=$_POST["ADNO"];
$sname=$_POST["NAME"];
$dept=$_POST["DEPARTMENT"];
$mobno=$_POST["MOBILENO"];
$year=$_POST["year"];
$con=mysql_connect("localhost","root","toor");
if(!$con)
{
 echo"couldn't connect to server".mysql_error($con);
}  
$db=mysql_select_db("project_65",$con);
if(!$db)
{
echo"cannot connect to database".mysql_error($con);
}
$q1="update student set sname='$sname',dept='$dept',mobno='$mobno',year='$year' where (adno=$adno)";
if(mysql_query($q1,$con))
echo "your details updated successfully";
else
echo "not updated";
mysql_close($con);
?>
