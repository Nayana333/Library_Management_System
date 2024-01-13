<html>
<body>
<?php
$tid=$_POST["tid"];
$tname=$_POST["tname"];
$deptm=$_POST["deptm"];
$pos=$_POST["pos"];
$mob=$_POST["mob"];
$gender=$_POST["GENDER"];
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
$query="select * from teacher";
$result=mysql_query($query,$con);
echo "<table border='1'>";
echo "<tr>";
echo "<th>tid</th>";
echo "<th>tname</th>";
echo "<th>department</th>";
echo "<th>position</th>";
echo "<th>mobile no</th>";
echo "<th>gender</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row["tid"]."</td>"."<td>".$row["tname"]."</td>"."<td>".$row["deptm"]."</td>"."<td>".$row["pos"]."</td>"."<td>".$row["mob"]."</td>"."<td>".$row["gender"]."</td>";
?>
<td><a href="fetchT.php?tid=<?php echo $row['tid'];?>">edit</a>
<td><a href="deleteT.php?tid=<?php echo $row['tid'];?>">delete</a>
<?php
echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>
