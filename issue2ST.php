<?php
$iid=$_POST["iid"];
$bname=$_POST["bname"];
$bid=$_POST["bid"];
$usn=$_POST["usn"];
$idate=$_POST["idate"];
$ddate=$_POST["ddate"];
$iname=$_POST["iname"];
$status=0;
$con=mysql_connect("localhost","root","");
if(!$con)
{
    echo "not ok";
}
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
if($idate<$ddate)
{
$query1="insert into issue values($iid,'$bname',$bid,'$usn','$idate','$ddate','$iname')";
if(mysql_query($query1,$con))
{
echo"<script>alert('book issued');window.location='homepageST.php';</script>";

}
else
{
 echo"error".mysql_error($con);
}
}
else
{
 echo"<script>alert('due date should be greater than issue date');window.location='homepageST.php';</script>";

$q1="update book set status =$status where bid=$bid";
if(mysql_query($q1,$con))
{
    echo "<br>status=0";
}
else
{
 echo"error".mysql_error($con);
}
mysql_close($con);
}
?>