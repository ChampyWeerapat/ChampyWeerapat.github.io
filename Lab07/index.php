<?php 
  function fetch_data() {
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
        $output = '';
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $output .= "
            <tr>
              <td>". $row["position"]. "</td>
              <td>". $row["MAX(salary)"]. "</td>
            </tr>";
        }
        return $output;
    }

    $conn->close();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="jquery.tabletoCSV.js"></script>
    
    <script type="text/javascript" src="tableExport.js"></script>
    <script type="text/javascript" src="jquery.base64.js"></script>

    <script>
      function createPDF() {
        document.getElementById('create_pdf').value = document.getElementById('result_table').innerHTML;
        document.getElementById('form').submit();
      }
      function createCSV() {
        $("#result_table").tableToCSV();
      }
      function createExcel() {
        $('#result_table').tableExport({type:'excel',escape:'false', ignoreColumn: []});
      }
    </script>
    
  </head>
  <body>
    <p>GROUP By (17)</p>

    <div id='result_table'>
      <table border="1" cellspacing="0" cellpadding="5">
      <tr align="center">
        <th>Position</th>
        <th>Max(salary)</th>
      </tr>
      <?php  
      echo fetch_data();
      ?>
    </table>
    </div>

    <br>

    <div class="dropdown">
      <button class="dropbtn">Export</button>
      <div class="dropdown-content">
        <a href="#" onclick="createPDF()">PDF</a>
        <a href="#" onclick="createCSV()">CSV</a>
        <a href="#" onclick="createExcel()">Excel</a>
      </div>
    </div>
    <div hidden>
      <form action="createPDF.php" method="post" id="form">
        <input type="text" id="create_pdf" name="create_pdf">
      </form>
    </div>
    
  </body>
</html>
