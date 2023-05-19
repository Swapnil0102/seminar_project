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

// Start measuring time
$start = microtime(true);

$sql = "SELECT * FROM sacramentorealestatetransactions";
$result = $conn->query($sql);

// Process the result if needed
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["COL 1"] . " Name: " . $row["COL 2"] . "<br>";
    }
} else {
    echo "No results found.";
}

// Calculate the time taken
$end = microtime(true);
$execution_time = $end - $start;

// Display the throughput time
echo "Throughput time: " . $execution_time . " seconds";

?>
