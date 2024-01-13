<html>
<body>
<?php
$adno=$_POST["ADNO"];
$sname=$_POST["NAME"];
$dept=$_POST["DEPARTMENT"];
$mobno=$_POST["MOBILE_NO"];
$gender=$_POST["gender"];
$year=$_POST["year"];
$con=mysql_connect("localhost","root","toor");
if(!$con)
{
die("couldn't connect to server".mysql_error($con));
}
$db=mysql_select_db("project_65",$con);
if(!$db)
{
die("cannot connect to database".mysql_error($con));
}
$query="select * from student";
$result=mysql_query($query,$con);
echo "<table border='1'>";
echo "<tr>";
echo "<th>adno</th>";
echo "<th>name</th>";
echo "<th>department</th>";
echo "<th>mobile no</th>";
echo "<th>gender</th>";
echo "<th>year</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row["adno"]."</td>"."<td>".$row["sname"]."</td>"."<td>".$row["dept"]."</td>"."<td>".$row["mobno"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["year"]."</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>
