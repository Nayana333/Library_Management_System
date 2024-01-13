<html>
<head>
    <style>
label:
width:120px;
display:inline-block;
</style>
<link href ="css/main.css" rel="stylesheet" />
<style>
h1{
font-size:50px;}
.error{
color:red;
}
</style>
                  
        </div>
   
   
       
       </header> 
<div class="bg-image"></div>
<div id="main" class="loginscreen">

 <style>      
h1{
font-size:50px;}
.error{
color:red;
}
</style>
</head>
<?php
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
if(empty($_POST["year"]))
$yearerr="year is required";
else
$year=$_POST["year"];
if(empty($_POST["adno"]))
$adnoerr="admisssion number is required";
else
$adno=$_POST["adno"];
}
?>
<center><h1><u>REGISTRATION FORM</u></h1></center>
<form method="POST" >
<label>ADNO:</label><input type="text" name="adno"><span class="error"><?php echo $adnoerr;?></span><br><br>
<label>NAME:</label><input type="text" name="sname"><span class="error"><?php echo $nameerr;?></span><br><br>
<label>DEPARTMENT:</label><input type="text" name="dept"><span class="error"><?php echo $depterr;?></span><br><br>
<label>MOBILENO:</label><input type="text" name="mobno"><span class="error"><?php echo $moberr;?></span><br><br>
<label>Gender:</label><input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female<span class="error"><?php echo "                ".$gendererr;?></span><br><br>
<label>USERNAME:</label><input type="text" name="usn"><span class="error"><?php echo $usererr;?></span><br><br>
<label>PASSWORD:</label><input type="password" name="psw"><span class="error"><?php echo $passerr;?></span><br><br>
<label>YEAR:</label><input type="text" name="year"><span class="error"><?php echo $yearerr;?></span><br><br>
<center><input type="submit" name="submit" value="REGISTER"></center>
</form>
</body>
<?php
$sname=$_POST["sname"];
$adno=$_POST["adno"];
$dept=$_POST["dept"];
$mobno=$_POST["mobno"];
$gender=$_POST["gender"];
$usn=$_POST["usn"];
$year=$_POST["year"];
$psw=$_POST["psw"];
$con=mysql_connect("localhost","root","toor");
if($con)
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
$query="insert into login (usn,psw,type)values('$usn','$psw','student')";
if(mysql_query($query,$con))
{
echo "login completed";
}
else
{
echo"error".mysql_error($con);
}
$query1="insert into student values($adno,'$sname','$dept','$mobno','$gender','$usn','$year')";
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
<center><h1><u>REGISTRATION FORM</u></h1></center>
<form method="POST">
<label>TID:</label><input type="text" name="tid"><span class="error"><?php echo $tiderr;?></span><br><br>
<label>NAME:</label><input type="text" name="tname"><span class="error"><?php echo $nameerr;?></span><br><br>
<label>DEPARTMENT:</label><input type="text" name="deptm"><span class="error"><?php echo $deptmerr;?></span><br><br>
<label>POSITION:</label><input type="text" name="pos"><span class="error"><?php echo $poserr;?></span><br><br>
<label>MOBILENO:</label><input type="text" name="mob"><span class="error"><?php echo $moberr;?></span><br><br>
<label>Gender:</label><input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female<span class="error"><?php echo "                ".$gendererr;?></span><br><br>
<label>USERNAME:</label><input type="text" name="usn"><span class="error"><?php echo $usererr;?></span><br><br>
<label>PASSWORD:</label><input type="password" name="psw"><span class="error"><?php echo $passerr;?></span><br><br>
<center><input type="submit" name="submit" value="REGISTER"></center>
</form>
</body>
<?php
$sname=$_POST["sname"];
$adno=$_POST["adno"];
$dept=$_POST["dept"];
$mobno=$_POST["mobno"];
$gender=$_POST["gender"];
$usn=$_POST["usn"];
$year=$_POST["year"];
$psw=$_POST["psw"];
$con=mysql_connect("localhost","root","toor");
if($con)
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
$query="insert into login (usn,psw,type)values('$usn','$psw','student')";
if(mysql_query($query,$con))
{
echo "login completed";
}
else
{
echo"error".mysql_error($con);
}
$query1="insert into student values($adno,'$sname','$dept','$mobno','$gender','$usn','$year')";
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


</html>
