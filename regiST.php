<html>
<head>
<style type="text/css">
body{ border:double black;}
label{
width:250px;
margin-left:380px;
display:inline-block;}
h1{
font-size:50px;}
.error{
color:red;
}
</style>
</head>
<body text="brown" bgcolor="lightyellow">
<?php
$usererr=$passerr=$nameerr=$posnerr=$mbnoerr=$gendererr=$jdateerr=$stiderr="";
$username=$password=$name=$jdate=$mbno=$gender=$posn=$stid="";
if($_POST)
{
if(empty($_POST["usn"]))
$usererr="username is required";
else
$username=$_POST["usn"];
if(empty($_POST["psw"]))
$passerr="password is required";
else
$password=$_POST["password"];
if(empty($_POST["stname"]))
$nameerr="name is required";
else
$name=$_POST["stname"];
if(empty($_POST["posn"]))
$posnerr="position is required";
else
$posn=$_POST["posn"];
if(empty($_POST["mbno"]))
$mbnoerr="mobile number is required";
elseif(!is_numeric($_POST["mob"]))
$moberr="must be an integer";
elseif(strlen($_POST["mbno"])<10||strlen($_POST["mbno"])>10)
$moberr="mobile number should be 10 digits";
else
$mbno=$_POST["mbno"];
if(empty($_POST["gender"]))
$gendererr="gender is required";
else
$gender=$_POST["gender"];
}
if(empty($_POST["stid"]))
$tiderr="teacher id is required";
else
$tid=$_POST["stid"];
}
if(empty($_POST["jdate"]))
$jdateerr="join date is required";
else
$jdate=$_POST["jdate"];
}
?>
<center><h1><u>REGISTRATION FORM</u></h1></center>
<form method="POST" >
<label>STID:</label><input type="text" name="stid"><span class="error"><?php echo $stiderr;?></span><br><br>
<label>STAFF NAME:</label><input type="text" name="stname"><span class="error"><?php echo $nameerr;?></span><br><br>
<label>POSITION:</label><input type="text" name="posn"><span class="error"><?php echo $posnerr;?></span><br><br>
<label>MOBILENO:</label><input type="text" name="mbno"><span class="error"><?php echo $mbnoerr;?></span><br><br>
<label>Gender:</label><input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female<span class="error"><?php echo "                ".$gendererr;?></span><br><br>
<label>JOIN DATE:</label><input type="date" name="jdate"><span class="error"><?php echo $jdateerr;?></span><br><br>
<label>USERNAME:</label><input type="text" name="usn"><span class="error"><?php echo $usererr;?></span><br><br>
<label>PASSWORD:</label><input type="password" name="psw"><span class="error"><?php echo $passerr;?></span><br><br>
<center><input type="submit" name="submit" value="REGISTER"></center>
</form>
</body>
<?php
$tname=$_POST["tname"];
$tid=$_POST["tid"];
$posn=$_POST["posn"];
$mbno=$_POST["mbno"];
$gender=$_POST["gender"];
$usn=$_POST["usn"];
$jdate=$_POST["jdate"];
$psw=$_POST["psw"];
$con=mysql_connect("localhost","root","toor");
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
$query2="insert into staff values('$stname',$stid,'$posn','$mbno','$gen','$jdate','$usn')";
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
