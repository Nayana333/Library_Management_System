<html>
<body>
<?php
$stname=$_POST["stname"];
$stid=$_POST["stid"];
$posn=$_POST["posn"];
$mbno=$_POST["mbno"];
$con=mysql_connect("localhost","root","");
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
echo "</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row["stname"]."</td>"."<td>".$row["stid"]."</td>"."<td>".$row["posn"]."</td>"."<td>".$row["mbno"]."</td>"
?>
<td><a href="fetchST.php?stid=<?php echo $row['stid'];?>">edit</a>
<td><a href="deleteST.php?stid=<?php echo $row['stid'];?>">delete</a>
<?php
echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>
