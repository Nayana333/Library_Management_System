<html>
<?php
$bid=$_POST["bid"];
$sname=$_POST["bname"];
$author=$_POST["author"];
$con=mysql_connect("localhost","root","");
if(!$con)
{
 echo"couldn't connect to server".mysql_error($con);
}  
$db=mysql_select_db("project_65",$con);
if(!$db)
{
echo"cannot connect to database".mysql_error($con);
}
$bid=$_GET["bid"];
$q1="select * from book where bid=$bid";
$result=mysql_query($q1,$con);
$row=mysql_fetch_array($result);
$bid1=$row["bid"];
$bname1=$row["bname"];
$author1=$row["author"];
?>
<head>
<title>updation form</title>
<style>
label{
width:120px;
display:inline-block;
}
</style>
</head>
<body>
<center><h2><u>UPDATION FORM</u></h2></center>
<form method="POST" action="updateB.php">
<center><label>BOOK ID:</label><input type="text" name=adno value="<?php echo $bid1;?>"></center><br>
<center><label> BOOK NAME:</label><input type="text" name="sname" value="<?php echo $bname1;?>"></center><br>
<center><label>AUTHOR:</label><input type="text" name="dept" value="<?php echo $author1;?>"></center><br>
<center><input type="submit" name="SUBMIT" value="UPDATE"></center>
</form>
</body>
</html>
