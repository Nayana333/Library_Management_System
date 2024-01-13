<?php
$con=mysql_connect("localhost","root","");
if($con)
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
session_start();
$stid=$_SESSION["stid"];
$q="select * from student where stid=$stid";
$result=mysql_query($q,$con);
$row=mysql_fetch_array($result);
$stid=$row["stid"];
$stname=$row["stname"];
$mbno=$row["mbno"];
?>
<form method="POST" action="updateS.php">
<center><label>STID:</label><input type="text" name="adno" value="<?php echo $stid;?>"></center><br>
<center><label>STAFF NAME:</label><input type="text" name="name" value="<?php echo $stname;?>"></center><br>
<center><label>POSITION:</label><input type="text" name="dept" value="<?php echo $posn;?>"></center><br>
<center><label>MOBILE NO:</label><input type="text" name="mobno" value="<?php echo $mbno;?>"></center><br>
<center><input type="submit" name="SUBMIT" value="UPDATE"></center>
</form>
</body>
</html>

