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
<form>
<input type="submit" name="home" value="HOME">
</form>
<?php
if(isset($_POST["home"])=="HOME")
    {
header('location:regformS.html');
    }
$usererr=$passerr=$nameerr=$deptmerr=$moberr=$gendererr=$poserr=$tiderr="";
$username=$password=$name=$deptm=$mob=$gender=$pos=$tid="";
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
if(empty($_POST["tname"]))
$nameerr="name is required";
else
$name=$_POST["tname"];
if(empty($_POST["deptm"]))
$deptmerr="department is required";
else
$deptm=$_POST["deptm"];
if(empty($_POST["mob"]))
$moberr="mobile number is required";
elseif(!is_numeric($_POST["mob"]))
$moberr="must be an integer";
elseif(strlen($_POST["mob"])<10||strlen($_POST["mob"])>10)
$moberr="mobile number should be 10 digits";
else
$mobno=$_POST["mob"];
if(empty($_POST["gender"]))
$gendererr="gender is required";
else
$gender=$_POST["gender"];
}
if(empty($_POST["pos"]))
$poserr="year is required";
else
{
$pos=$_POST["pos"];
}
if(empty($_POST["tid"]))
$adnorrr="teacher id is required";
else
$tid=$_POST["tid"];
?>
<center><h1><u>REGISTRATION FORM</u></h1></center>
<form method="POST" >
<label>TID:</label><input type="text" name="tid"><span class="error"><?php echo $tiderr;?></span><br><br>
<label>NAME:</label><input type="text" name="tname"><span class="error"><?php echo $nameerr;?></span><br><br>
<label>DEPARTMENT:</label><input type="text" name="deptm"><span class="error"><?php echo $depterr;?></span><br><br>
<label>POSITION:</label><input type="text" name="pos"><span class="error"><?php echo $poserr;?></span><br><br>
<label>MOBILENO:</label><input type="text" name="mob"><span class="error"><?php echo $moberr;?></span><br><br>
<label>Gender:</label><input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female<span class="error"><?php echo "                ".$gendererr;?></span><br><br>
<label>USERNAME:</label><input type="text" name="usn"><span class="error"><?php echo $usnerr;?></span><br><br>
<label>PASSWORD:</label><input type="password" name="psw"><span class="error"><?php echo $passerr;?></span><br><br>
<center><input type="submit" name="submit" value="REGISTER"></center>
</form>
</body>
<?php
$tname=$_POST["tname"];
$tid=$_POST["tid"];
$deptm=$_POST["deptm"];
$mob=$_POST["mob"];
$gender=$_POST["gender"];
$usn=$_POST["usn"];
$pos=$_POST["pos"];
$psw=$_POST["psw"];
$con=mysql_connect("localhost","root","toor");
if($con)
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
$query="insert into login (usn,psw,type)values('$usn','$psw','teacher')";
if(mysql_query($query,$con))
{
echo "login completed";
}
else
{
echo"error".mysql_error($con);
}
$query1="insert into teacher values($tid,'$tname','$deptm','$pos','$mob','$gender','$usn'$pos')";
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
</html>
