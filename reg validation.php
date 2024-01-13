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
$usererr=$passerr=$nameerr=$depterr=$moberr=$gendererr=$yearerr=$adnoerr="";
$username=$password=$name=$dept=$mobno=$gender=$year=$adno="";
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
if(empty($_POST["sname"]))
$nameerr="name is required";
else
$name=$_POST["sname"];
if(empty($_POST["dept"]))
$depterr="department is required";
else
$dept=$_POST["dept"];
if(empty($_POST["mobno"]))
$moberr="mobile number is required";
elseif(!is_numeric($_POST["mobno"]))
$moberr="must be an integer";
elseif(strlen($_POST["mobno"])<10||strlen($_POST["mobno"])>10)
$moberr="mobile number should be 10 digits";
else
$mobno=$_POST["mobno"];
if(empty($_POST["gender"]))
$gendererr="gender is required";
else
$gender=$_POST["gender"];
}
if(empty($_POST["year"]))
$yearrr="year is required";
else
$year=$_POST["year"];
}
if(empty($_POST["adno"]))
$adnorrr="admisssion number is required";
else
$adno=$_POST["adno"];
?>
<center><h1><u>REGISTRATION FORM</u></h1></center>
<form method="POST" action="regs.php">
<label>ADNO:</label><input type="text" name="adno"><span class="error"><?php echo $adnoerr;?></span><br><br>
<label>NAME:</label><input type="text" name="sname"><span class="error"><?php echo $nameerr;?></span><br><br>
<label>DEPARTMENT:</label><input type="text" name="dept"><span class="error"><?php echo $depterr;?></span><br><br>
<label>MOBILENO:</label><input type="text" name="mobno"><span class="error"><?php echo $moberr;?></span><br><br>
<label>Gender:</label><input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female<span class="error"><?php echo "                ".$gendererr;?></span><br><br>
<label>USERNAME:</label><input type="text" name="usn"><span class="error"><?php echo $usnerr;?></span><br><br>
<label>PASSWORD:</label><input type="password" name="psw"><span class="error"><?php echo $passerr;?></span><br><br>
<label>YEAR:</label><input type="text" name="year"><span class="error"><?php echo $yearerr;?></span><br><br>
<center><input type="submit" name="submit" value="REGISTER"></center>
</form>
</body>
</html>
