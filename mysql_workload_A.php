<?php

// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "office_automation";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function simulateReadOperation($conn)
{
    $sql = "SELECT * FROM sacramentorealestatetransactions WHERE id = 1"; // Change 'your_table' and 'id' as per your actual table structure
    $result = $conn->query($sql);
    
    if ($result > 0) {
        while ($row = $result->fetch_assoc()) {
            // Perform any necessary processing with the retrieved data
            // ...
        }
    }
}

// Function to simulate update operation
function simulateUpdateOperation($conn)
{
    $sql = "UPDATE sacramentorealestatetransactions SET sl_no = '1' WHERE id = 1"; // Change 'your_table', 'column_name', and 'id' as per your actual table structure
    $conn->query($sql);
}


$start_time = microtime(true);
$total_operations = 20;

for ($i = 1; $i <= $total_operations; $i++) {
    if ($i % 2 == 0) {
        simulateReadOperation($conn);
    } else {
        simulateUpdateOperation($conn);
    }
}

$end_time = microtime(true);
$execution_time = $end_time - $start_time;

echo "Throughput time: " . $execution_time . " seconds";

?>