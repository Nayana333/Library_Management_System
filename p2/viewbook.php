<html>
<body>
<?php
$bid=$_POST["bid"];
$bname=$_POST["bname"];
$author=$_POST["author"];
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
$query="select * from book";
$result=mysql_query($query,$con);
echo "<table border='1'>";
echo "<tr>";
echo "<th>BID</th>";
echo "<th>BNAME</th>";
echo "<th>AUTHOR</th>";
echo "<th>STATUS</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row["bid"]."</td>"."<td>".$row["bname"]."</td>"."<td>".$row["author"]."</td>"."<td>".$row["status"]."</td>";
?>
<td><a href="fetchB.php?bid=<?php echo $row['bid'];?>">edit</a>
<td><a href="deleteB.php?bid=<?php echo $row['bid'];?>">delete</a>
<?php
echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>
