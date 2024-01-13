<?php
echo "hi";
$query="insert into login values ('$usn',$psw',"student")";
if(mysql_query($query,$con))
{
echo "login completed";
}
else
{
echo"error".mysql_error($con);
}
$query1="insert into student values($adno,'$sname','$dept',$mobno,'$gender','$usn',$psw,$year)";
if(mysql_query($query,$con))
{
echo"registration completed successfully";
}
else
{
 echo"error".mysql_error($con);
}
mysql_close($con);

?>

