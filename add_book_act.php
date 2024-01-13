<?php
 if(isset($_POST))
 {
$bid1=$_POST["bid"];
$bname1=$_POST["bname"];
$author1=$_POST["author"];
$status1=$_POST["status"];
$con=mysql_connect("localhost","root","");
if($con)
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
//  if(isset($_POST['bid']))
//         $bid1=$_POST["bid"];
// else if(isset($_POST['bname']))
// $bname1=$_POST["bname"];
//     else if(isset($_POST['author']))
// $author1=$_POST["author"];
//        else if(isset($_POST['status']))
//             $status1=$_POST["status"];
$query1="insert into book values($bid1,'$bname1','$author1',$status1)";
if(mysql_query($query1,$con))
{
echo"<script>alert('book added successfully');window.location='homepageA.php';</script>";
}
else
{
    echo"<script>alert('not added');window.location='homepageA.php';</script>";
 echo"error".mysql_error($con);
}
}
mysql_close($con);
?>