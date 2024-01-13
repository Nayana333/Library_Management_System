<?php
$tname=$_POST["NAME"];
$tid=$_POST["TID"];
$deptm=$_POST["DEPARTMENT"];
$mob=$_POST["MOBILENO"];
$pos=$_POST["POSITION"];
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
$q1="update teacher set tname='$tname',deptm='$deptm',mob='$mob',pos='$pos' where (tid=$tid)";
if(mysql_query($q1,$con))
echo "your details updated successfully";
else
echo "not updated";
mysql_close($con);
?>