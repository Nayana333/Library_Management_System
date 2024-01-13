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
$mobierr="mobile number is required";
elseif(!is_numeric($_POST["mob"]))
$mobierr="must be an integer";
elseif(strlen($_POST["mbno"])<10||strlen($_POST["mbno"])>10)
$mobierr="mobile number should be 10 digits";
else
$mbno=$_POST["mbno"];
if(empty($_POST["gender"]))
$gendererr="gender is required";
else
$gender=$_POST["gender"];
if(empty($_POST["stid"]))
$stiderr="staff id is required";
else
$tid=$_POST["stid"];
if(empty($_POST["jdate"]))
$jdateerr="join date is required";
else
$jdate=$_POST["jdate"];
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
        <div class="col5 rightalign"> <label>STAFF ID</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="stid" /><span class="error"><?php echo $stiderr;?></span>
         </div>
       
     </div>   
<div class="common">
        <div class="col5 rightalign"> <label>STAFF NAME</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="stname" /><span class="error"><?php echo $nameerr;?></span>
         </div>
       
     </div>   
     <div class="common">
        <div class="col5 rightalign"> <label>POSITION</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="posn" /><span class="error"><?php echo $posnerr;?></span>
         </div>       
     </div>   
<div class="common">
        <div class="col5 rightalign"> <label>JOIN DATE</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="jdate" /><span class="error"><?php echo $jdateerr;?></span>
         </div>
       
     </div>   
     <div class="common">
        <div class="col5 rightalign"> <label>MOBILE NO</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="mbno" /><span class="error"><?php echo $mobierr;?></span>
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
$stname=$_POST["stname"];
$stid=$_POST["stid"];
$posn=$_POST["posn"];
$mbno=$_POST["mbno"];
$gender=$_POST["gender"];
$usn=$_POST["usn"];
$jdate=$_POST["jdate"];
$psw=$_POST["psw"];
$con=mysql_connect("localhost","root","");
if($con)
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
$query="insert into login (usn,psw,type)values('$usn','$psw','staff')";
if(mysql_query($query,$con))
{
echo "login completed";
}
else
{
echo"error".mysql_error($con);
}
$query1="insert into staff values($stid,'$stname','$posn','$mbno','$gender','$jdate','$usn')";
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
