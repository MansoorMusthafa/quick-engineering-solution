<?php
		$servername = "localhost";
		$database = "qespl";
		$username = "root";
		$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$data_name = $_REQUEST['param'];


if ($data_name == 'humid'){

// Query to fetch data
$sql = "SELECT `humid` FROM `humidity` ORDER BY `id` DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Generate URL with the humidity value
        $data = $row["humid"];
        
        echo $data;
    }
} else {
    echo "0 results";
} 

}elseif ($data_name == 'temp'){

// Query to fetch data
$sql = "SELECT `temp` FROM `temperature` ORDER BY `id` DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Generate URL with the humidity value
        $data = $row["temp"];
        
        echo $data;
    }
} else {
    echo "0 results";
} 

}elseif ($data_name == 'rain'){

// Query to fetch data
$sql = "SELECT `rain` FROM `rain` ORDER BY `id` DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Generate URL with the humidity value
        $data = $row["rain"];
        
        echo $data;
    }
} else {
    echo "0 results";
} 

}elseif ($data_name == 'road_temp'){

// Query to fetch data
$sql = "SELECT `road_temp` FROM `road_temp` ORDER BY `id` DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Generate URL with the humidity value
        $data = $row["road_temp"];
        
        echo $data;
    }
} else {
    echo "0 results";
} 

}elseif ($data_name == 'visibility'){

// Query to fetch data
$sql = "SELECT `visibility` FROM `visibility` ORDER BY `id` DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Generate URL with the humidity value
        $data = $row["visibility"];
        
        echo $data;
    }
} else {
    echo "0 results";
} 

}elseif ($data_name == 'wind_dir'){

// Query to fetch data
$sql = "SELECT `wind_dir` FROM `wind_dir` ORDER BY `id` DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Generate URL with the humidity value
        $data = $row["wind_dir"];
        
        echo $data;
    }
} else {
    echo "0 results";
} 

}elseif ($data_name == 'wind_speed'){

// Query to fetch data
$sql = "SELECT `wind_speed` FROM `wind_speed` ORDER BY `id` DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Generate URL with the humidity value
        $data = $row["wind_speed"];
        
        echo $data;
    }
} else {
    echo "0 results";
} 

}
$conn->close();
?>
