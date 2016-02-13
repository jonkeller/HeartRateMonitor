<?php
header('Content-type: text/json');
$servername = "localhost";
$username = "hrm";
$password = "heartbeat";
$dbname = "HeartRate";

// Create connection
#$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
#$query = "SELECT timestamp, COUNT(*) from $dbname.Beats GROUP BY HOUR(timestamp), MINUTE(timestamp) ORDER BY TIMESTAMP ASC";
$query = "SELECT UNIX_TIMESTAMP(timestamp)*1000 AS t, timestamp AS r, COUNT(*) from $dbname.Beats GROUP BY HOUR(timestamp), MINUTE(timestamp) ORDER BY TIMESTAMP ASC";
$result = $conn->query($query);
#echo "{\n  beatsPerMinute:\n";
echo "[\n";
$i = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "    {\n";
        echo "      \"timestamp\":\"" . $row["t"] . "\",\n";
        echo "      \"formatted_timestamp\":\"" . $row["r"] . "\",\n";
        echo "      \"beats\":" . $row["COUNT(*)"] . "\n";
        if ($i == $result->num_rows - 1) {
            echo "    }\n";
        } else {
            echo "    },\n";
        }
        $i++;
    }
}
echo "  ]\n";
#echo "}";
$conn->close();
?>
