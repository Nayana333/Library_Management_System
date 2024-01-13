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
<body>
<?php
$usererr=$passerr=$nameerr=$poserr=$moberr=$gendererr=$poserr=$tiderr=$deptmerr="";
$usn=$psw=$name=$deptm=$mob=$gender=$pos=$tid="";
if($_POST)
{
if(empty($_POST["usn"]))
$usererr="username is required";
else
$usn=$_POST["usn"];
if(empty($_POST["psw"]))
$passerr="password is required";
else
$psw=$_POST["psw"];
if(empty($_POST["tname"]))
$nameerr="name is required";
else
$name=$_POST["tname"];
if(empty($_POST["deptm"]))
$deptmerr="department is required";
else
$deptm=$_POST["deptm"];
if(empty($_POST["mob"]))
$mobnerr="mobile number is required";
elseif(!is_numeric($_POST["mob"]))
$moberr="must be an integer";
elseif(strlen($_POST["mob"])<10||strlen($_POST["mob"])>10)
$moberr="mobile number should be 10 digits";
else
$mob=$_POST["mob"];
if(empty($_POST["gender"]))
$gendererr="gender is required";
else
$gender=$_POST["gender"];
if(empty($_POST["pos"]))
$poserr="position is required";
else
$pos=$_POST["pos"];
if(empty($_POST["tid"]))
$tiderr="teacher id is required";
else
$tid=$_POST["tid"];
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
        <div class="col5 rightalign"> <label>TID</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="tid" /><span class="error"><?php echo $tiderr;?></span><br>
         </div>
       
     </div>   
<div class="common">
        <div class="col5 rightalign"> <label>NAME</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="tname" /><span class="error"><?php echo $nameerr;?></span><br>
         </div>
       
     </div>   
     <div class="common">
        <div class="col5 rightalign"> <label>DEPARTMENT</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="deptm" /><span class="error"><?php echo $deptmerr;?></span><br>
         </div>
       
     </div>   
<div class="common">
        <div class="col5 rightalign"> <label>POSITION</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="pos" /><span class="error"><?php echo $poserr;?></span><br>
         </div>
       
     </div>   
     <div class="common">
        <div class="col5 rightalign"> <label>MOBILE NO</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="mob" /><span class="error"><?php echo $moberr;?></span><br>
         </div>
     </div>
       
     </div> 
     <div class="common">
        <div class="col5 rightalign"> <label>GENDER</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="radio" name="gender" />MALE<br>
            <input class="php-input" type="radio" name="gender" />FEMALE<span class="error"><?php echo $gendererr;?></span><br>
         </div>
         
        <div class="col5 rightalign"> <label>USERNAME</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="usn" /><span class="error"><?php echo $usererr;?></span><br>
         </div>
     </div>
     <div class="common">
        <div class="col5 rightalign"> <label>PASSWORD</label>   
         </div>
         <div class="col5 leftalign">
            <input class="php-input" type="text" name="psw" /><span class="error"><?php echo $passerr;?></span><br>
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
$deptm=$_POST["deptm"];
$mob=$_POST["mob"];
$gender=$_POST["gender"];
$usn=$_POST["usn"];
$year=$_POST["pos"];
$psw=$_POST["psw"];
$con=mysql_connect("localhost","root","");
if($con)
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
$query2="insert into login (usn,psw,type)values('$usn','$psw','teacher')";
if(mysql_query($query2,$con))
{
echo "login completed";
}
else
{
echo"error".mysql_error($con);
}
$query2="insert into teacher values('$tname',$tid,'$deptm','$pos','$mob','$gender','$usn')";
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
