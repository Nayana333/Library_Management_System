<?php
$con=mysql_connect("localhost","root","");
if($con)
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
session_start();
 $d=$_SESSION["due"];
$rid=$_POST["rid"];
$rdate=$_POST["rdate"];
$id=$_POST["userid"];
$return_by=$_POST["rname"];
$status=0;
$fine=10;
$role=$_POST["role"];
if($role=="student")
{
if($rdate>$d)
{
$query="insert into returns(rid,rdate,rname,fine,userid,role) values($rid,'$rdate','$return_by',$fine+5,$id,'student')";
if(mysql_query($query,$con))
{
   echo"<script>alert('book returned');window.location='totalfine.php';</script>";
}
}
}
else
{
$query1="insert into returns(rid,rdate,rname,userid,role) values($rid,'$rdate','$return_by',$id,'student')";
if(mysql_query($query1,$con))
{
echo"<script>alert('book returned');window.location='totalfine.php';</script>";

}
}
if($role=="teacher")
{
if($rdate>$d)
{
$query2="insert into returns(rid,rdate,rname,fine,userid,role) values($rid,'$rdate','$return_by',$fine+5,$id,'teacher')";
if(mysql_query($query2,$con))
{
 echo"<script>alert('book returned');window.location='totalfine.php';</script>";

}
}
else
{
$query3="insert into returns(rid,rdate,rname,userid,role) values($rid,'$rdate','$return_by',$id,'teacher')";
if(mysql_query($query3,$con))
{
echo"<script>alert('book returned');window.location='totalfine.php';</script>";

}
else
{
 echo"error".mysql_error($con);
}
}
}
mysql_close($con);
?>

