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
<div id="main">
   

     <div class="common">
        <div class="col5 rightalign"> &nbsp;         </div>
         <div class="col5 leftalign">
            <h2><u>REGISTRATION FORM</u></h2>
         </div>
<form method="POST">
 <div class="common">
        <div class="col5 rightalign"> <label>ADMISSION NO</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="adno" /><span class="error"><?php echo $adnoerr;?></span>
         </div>
       
     </div>   
<div class="common">
        <div class="col5 rightalign"> <label>STUDENT NAME</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="sname" /><span class="error"><?php echo $nameerr;?></span>
         </div>
       
     </div>   
     <div class="common">
        <div class="col5 rightalign"> <label>DEPARTMENT</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="dept" /><span class="error"><?php echo $depterr;?></span>
         </div>       
     </div>   
<div class="common">
        <div class="col5 rightalign"> <label>YEAR</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="year" /><span class="error"><?php echo $yearerr;?></span>
         </div>
       
     </div>   
     <div class="common">
        <div class="col5 rightalign"> <label>MOBILE NO</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="mob" /><span class="error"><?php echo $moberr;?></span>
         </div>
     </div>
       
     </div> 
     <div class="common">
        <div class="col5 rightalign"> <label>GENDER</label>   
         </div>
         <div class="col5 leftalign">
           MALE <input class="php-input" type="radio" name="gender" /><br>
          FEMALE  <input class="php-input" type="radio" name="gender" />
          <span class="error"><?php echo $gendererr;?></span>
         </div>
     </div>
        <div class="col5 rightalign"> <label>USERNAME</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="usn" /><span class="error"><?php echo $usererr;?></span>
         </div>
     </div>
     <div class="common">
        <div class="col5 rightalign"> <label>PASSWORD</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="psw" /><span class="error"><?php echo $passerr;?></span>
         </div>
     </div>
      <div class="common">
        <div class="col5 rightalign">  &nbsp;
         </div>
         <div class="col5 leftalign">
            <input type="submit" class="php-form-btn" name="SUBMIT" value="REGISTER">
         </div>
       
     </div>
 </div> 
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
</html>
