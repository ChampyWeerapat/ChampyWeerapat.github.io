<style media="screen">
table, th, td {
   border: 1px solid black;
}
</style>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dreamhome";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT position, MAX(salary) FROM staff Group by position";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "GROUP By 17";
     echo "<table>
              <tr>
              <th>Position</th>
              <th>Max(salary)</th>
              </tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr>
                   <td>". $row["position"]. "</td>
                   <td>". $row["MAX(salary)"]. "</td>
              </tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>
