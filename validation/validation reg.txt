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
header('location:login.html');
    }
$usererr=$passerr=$nameerr=$ageerr=$moberr=$gendererr=$emailerr=$locerr="";
$userid=$password=$name=$age=$mobileno=$gender=$emailid=$location="";
if($_POST)
{
if(empty($_POST["userid"]))
$usererr="userid is required";
else
$userid=$_POST["userid"];
if(empty($_POST["password"]))
$passerr="password is required";
else
$password=$_POST["password"];
if(empty($_POST["name"]))
$nameerr="name is required";
else
$name=$_POST["name"];
if(empty($_POST["age"]))
$ageerr="age is required";
else
$age=$_POST["age"];
if(empty($_POST["mobileno"]))
$moberr="mobile number is required";
elseif(!is_numeric($_POST["mobileno"]))
$moberr="must be an integer";
elseif(strlen($_POST["mobileno"])<10||strlen($_POST["mobileno"])>10)
$moberr="mobile number should be 10 digits";
else
$mobileno=$_POST["mobileno"];
if(empty($_POST["gender"]))
$gendererr="gender is required";
else
$gender=$_POST["gender"];
if(empty($_POST["emailid"]))
$emailerr="emailid is required";
else
{
$emailid=$_POST["emailid"];
if(!filter_var($emailid,FILTER_VALIDATE_EMAIL))
echo "email id is invalid";
}
if(empty($_POST["location"]))
$locerr="location is required";
else
$location=$_POST["location"];
}
?>
<center><h1><u>REGISTRATION FORM</u></h1></center>
<form method="POST">
<label>Create Userid:</label><input type="text" name="userid"><span class="error"><?php echo $usererr;?></span><br><br>
<label>Password:</label><input type="password" name="password"><span class="error"><?php echo $passerr;?></span><br><br>
<label>Role:</label><select name="role"><br><br>
<option value="donor">donor</option>
<option value="receipient">receipient</option>
</select><br><br>
<label>Name:</label><input type="text" name="name"><span class="error"><?php echo $nameerr;?></span><br><br>
<label>Age:</label><input type="number" name="age"><span class="error"><?php echo $ageerr;?></span><br><br>
<label>Blood group:</label><select name="b_grp" >
<option value="A+ve">A+ve</option>
<option value="A-ve">A-ve</option>
<option value="B+ve">B+ve</option>
<option value="B-ve">B-ve</option>
<option value="O+ve">O+ve</option>
<option value="O-ve">O-ve</option>
<option value="AB+ve">AB+ve</option>
<option value="AB-ve">AB-ve</option>
</select><br><br>
<label>Mobile no:</label><input type="text" name="mobileno"><span class="error"><?php echo $moberr;?></span><br><br>
<label>Gender:</label><input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female<span class="error"><?php echo "                ".$gendererr;?></span><br><br>
<label>Email id:</label><input type="email" name="emailid"><span class="error"><?php echo $emailerr;?></span><br><br>
<label>Location:</label><input type="text" name="location"><span class="error"><?php echo $locerr;?></span><br><br>
<label>select parts:</label>
<input type="checkbox" name="organ[]" value="eye" checked>EYE
<input type="checkbox" name="organ[]" value="liver">LIVER
<input type="checkbox" name="organ[]" value="kidney">KIDNEY
<input type="checkbox" name="organ[]" value="bonemarrow">BONEMARROW
<input type="checkbox" name="organ[]" value="heart">HEART
<input type="checkbox" name="organ[]" value="pancreas">PANCREAS<br><br>
<center><input type="submit" name="submit" value="REGISTER"></center>
</form>
<?php
$role=$_POST["role"];
$b_grp=$_POST["b_grp"];
$con=mysql_connect("localhost","root","toor");
if(!$con)
{
 echo"couldn't connect to server".mysql_error($con);
}  
$db=mysql_select_db("project_7558",$con);
if(!$db)
{
echo"cannot connect to database".mysql_error($con);
}
$query="insert into regtable values('$userid','$password','$role','$name',$age,'$gender','$b_grp','$location','$emailid','$mobileno')";
if(mysql_query($query,$con))
echo " you registered successfully";
else
echo "error".mysql_error($con);
if(!empty($_POST["organ"]))
{ 
foreach($_POST["organ"] as $o)
{
$q1="insert into organs(userid,organ)values('$userid','$o')";
mysql_query($q1,$con);
}}
$q="insert into usertable values('$userid','$password','$role')";
mysql_query($q,$con);
mysql_close($con);
?>
</body>
</html>
