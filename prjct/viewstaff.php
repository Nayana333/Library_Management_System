<html>
<body>
<?php
$stname=$_POST["NAME"];
$stid=$_POST["STAFF_ID"];
$posn=$_POST["POSITION"];
$mbno=$_POST["MOBILENO"];
$gen=$_POST["GENDER"];
$jdate=$_POST["jdate"];
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
$query="select * from staff";
$result=mysql_query($query,$con);
echo "<table border='1'>";
echo "<tr>";
echo "<th>STAFFNAME</th>";
echo "<th>STID</th>";
echo "<th>POSITION</th>";
echo "<th>MOBILENO</th>";
echo "<th>GENDER</th>";
echo "<th>JOIN DATE</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row["stname"]."</td>"."<td>".$row["stid"]."</td>"."<td>".$row["posn"]."</td>"."<td>".$row["mbno"]."</td>"."<td>".$row["gen"]."</td>"."<td>".$row["jdate"]."</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>
