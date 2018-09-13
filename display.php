<html>
<body>
<?php 
include 'dbconnection.php';
$uname= $_POST["username"];
$pwd=$_POST["password"];
echo $uname."<br>";
echo $pwd."<br>";
$sql = "SELECT username, pwdsql FROM mytable WHERE username='$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["username"]."</td><td>".$row["pwdsql"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</body>
</html>