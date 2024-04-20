<?php
		$servername = "localhost";
		$database = "qespl";
		$username = "root";
		$password = "";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);
		// Check connection
		if (!$conn) {
			  die("Connection failed: " . mysqli_connect_error());
		}

$data_name = $_REQUEST['param'];
$data_value = $_REQUEST['value'];
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$current_date = date("Y-m-d H:i:s");

if ($data_name == 'temp'){
	
	$sql_insert = "INSERT INTO temperature (date_time, temp, api_status) VALUES ('$current_date', '$data_value','OK')";
    if (mysqli_query($conn, $sql_insert)) {
        echo " Insert SUCCESS record log";
    } else {
        echo " Error: " . $sql_insert . "<br>" . mysqli_error($conn);
    }
	
}else if($data_name == 'humid'){
	
	$sql_insert = "INSERT INTO humidity (date_time, humid, api_status) VALUES ('$current_date', '$data_value','OK')";
    if (mysqli_query($conn, $sql_insert)) {
        echo " Insert SUCCESS record log";
    } else {
        echo " Error: " . $sql_insert . "<br>" . mysqli_error($conn);
    }
	
}else if($data_name == 'rain'){
	
	$sql_insert = "INSERT INTO rain (date_time, rain, api_status) VALUES ('$current_date', '$data_value','OK')";
    if (mysqli_query($conn, $sql_insert)) {
        echo " Insert SUCCESS record log";
    } else {
        echo " Error: " . $sql_insert . "<br>" . mysqli_error($conn);
    }
	
}else if($data_name == 'road_temp'){
	
	$sql_insert = "INSERT INTO road_temp (date_time, road_temp, api_status) VALUES ('$current_date', '$data_value','OK')";
    if (mysqli_query($conn, $sql_insert)) {
        echo " Insert SUCCESS record log";
    } else {
        echo " Error: " . $sql_insert . "<br>" . mysqli_error($conn);
    }
	
}else if($data_name == 'visibility'){
	
	$sql_insert = "INSERT INTO visibility (date_time, visibility, api_status) VALUES ('$current_date', '$data_value','OK')";
    if (mysqli_query($conn, $sql_insert)) {
        echo " Insert SUCCESS record log";
    } else {
        echo " Error: " . $sql_insert . "<br>" . mysqli_error($conn);
    }
	
}else if($data_name == 'wind_dir'){
	
	$sql_insert = "INSERT INTO wind_dir (date_time, wind_dir, api_status) VALUES ('$current_date', '$data_value','OK')";
    if (mysqli_query($conn, $sql_insert)) {
        echo " Insert SUCCESS record log";
    } else {
        echo " Error: " . $sql_insert . "<br>" . mysqli_error($conn);
    }
	
}else if($data_name == 'wind_speed'){
	
	$sql_insert = "INSERT INTO wind_speed (date_time, wind_speed, api_status) VALUES ('$current_date', '$data_value','OK')";
    if (mysqli_query($conn, $sql_insert)) {
        echo " Insert SUCCESS record log";
    } else {
        echo " Error: " . $sql_insert . "<br>" . mysqli_error($conn);
    }
	
}
?>