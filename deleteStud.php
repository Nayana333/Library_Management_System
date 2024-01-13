<html>
<head>
<title>home page</title>
<style>
label{
width:120px;
display:inline-block;
</style>
<link href ="css/main.css" rel="stylesheet" />
<body>
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
echo"<script>alert('student removed');window.location='homepageA.php';</script>";

}
else
{
echo"<script>alert('student not removed');window.location='homepageA.php';</script>";

}
mysql_close($con);
?>
</head>
</body>
</html>


