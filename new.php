<html>
	<head>
		<style>
			body
            {
                background-image: url("https://images.unsplash.com/photo-1604147495798-57beb5d6af73?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                font-family: "Open Sans", sans-serif;
                color: #333333;
            }
			.top{
				
				height: 80px;
				font-family: Franklin Gothic Medium;
				margin-top : -10px;
				margin-left: -10px;
				margin-right: -10px;
          		
          		padding-top: 10px;
				padding-bottom: 10px;
          		background-color:black;
          		color:white;
			}
			.title{
						font-family: Franklin Gothic Medium;
						font-size: 35px;
						padding-top:10px;
						color : #ffffff;
						text-align:center;
						
						margin-top: -5%;
						
			}
			.title2
			{
				font-size: 23px;
				padding-top:2.5%;
				margin-left: -400px;
				margin-top: -3%;
				color : #ffffff;
			}
			.title3
			{
				font-size: 23px;
				padding-top:2.5%;
				margin-left: 0px;
				margin-top: -3%;
				color : #ffffff;
			}
			.title4
			{
				font-size: 23px;
				padding-top:1.8%;
				margin-left: 0px;
				margin-top: -3%;
				color : #ffffff;
			}
			.t1 input[type=text]{
				border: 1px solid #fff;
				font-size: 16px;
				color: black;
				background: white;
				width:400px;
				margin-left: 228px;
				padding: 10px 20px;
				margin-top: -4%;
				border-radius: 10px;
			}
			.t2 input[type=text]{
				border: 1px solid #fff;
				font-size: 16px;
				color: black;
				background: white;
				width:400px;
				margin-left: 220px;
				padding: 10px 20px;
				margin-top: -3.1%;
				border-radius: 10px;
			}
			.group{
				margin-top : 60px;
				margin-left: 40px;
			}
			.t1 input[type=password]{
				border: 1px solid #fff;
				font-size: 16px;
				color: black;
				background: white;
				width:400px;
				margin-left: 228px;
				padding: 10px 20px;
				margin-top: -3.1%;
				border-radius: 10px;
			}
			.msub input[type=submit]{
				border: 1px solid #000000;
				color: #fff;
				background: white;
				width: 20%;
				height:12%;
				color:black;
				font-size: 30px;
				margin-top: 0.6%;
				
				
				padding: 10px 10px;
				border-radius: 10px;
			}
			.msub input[type=submit]:hover {
    			background: #000;
				color:white;
			}
			.msub input[type=reset]{
				border: 1px solid #000000;
				color: #fff;
				background: white;
				width: 20%;
				height:12%;
				color:black;
				font-size: 30px;
				margin-top: 0.6%;
				
				padding: 10px 10px;
				border-radius: 10px;
			}
			.msub input[type=reset]:hover {
    			background: #000;
				color:white;
			}
		</style>
	</head>
	<body>
	<div class="top">
		<div class="title"><h1><p align="center">REGISTRATION FORM</p></h1></div>	
	</div>
				<div class="group">
				<form action="registration.php" method="POST">
				<center>
					<div class="title2">ADMISSION NO</div><div class="t1"><input type="text" name="fname"></div><span class="error"><?php echo $adnoerr;?></span><br><br>
					<div class="title2">STUDENT NAME :</div><div class="t1"><input type="text" name="lname"></div><br><br>
					<div class="title2">DEPARTMENT :</div><div class="t1"><input type="text" name="lname"></div><br><br>
					<div class="title2">YEAR :</div><div class="t1"><input type="text" name="pincode"></div><br><br>
					<div class="title2">MOBILE NO :</div><div class="t1"><input type="text" name="mob"></div><br><br>
					<div class="title2">GENDER :</div><div class="t1"><input type="text" name="email"></div><br><br>
					<div class="title2">USERNAME :</div><div class="t1"><input type="text" name="username"></div><br><br>
					<div class="title2">PASSWORD :</div><div class="t1"><input type="password" name="password"></div><br><br>
					<div class="msub" align="center">
            			<input type="submit" value="SUBMIT">
						<input type="reset" value="RESET">
					</div>
				</center>
				</form>
			</div>
			<br><br>
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

$sname=$_POST["sname"];
$adno=$_POST["adno"];
$dept=$_POST["dept"];
$mobno=$_POST["mobno"];
$gender=$_POST["gender"];
$usn=$_POST["usn"];
$year=$_POST["year"];
$psw=$_POST["psw"];
$con=mysql_connect("localhost","root","");
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
$query1="insert into student values($adno,'$sname','$dept','$mobno','$gender','$year','$usn')";
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
    </body>

</html>
