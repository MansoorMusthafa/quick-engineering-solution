<?php 
// $servername = "localhost";
// $database = "ocems";
// $username = "admin";
// $password = "123456";

$servername = "localhost";
$database = "ocems";
$username = "root";
$password = "";
// $servername = "localhost";
// $username = "city1000_user";
// $password = "Kfsd2w799c19D";
// $database = "city1000_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
}



if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $data = [];

    switch ($id) {
        case 'bod':
        case 'cod':
        case 'ph':
        case 'tss':
            $bs_query = "SELECT $id, time_received FROM `$id` ORDER BY id DESC LIMIT 1";
            $result_bs = mysqli_query($conn, $bs_query);

            while ($row = mysqli_fetch_assoc($result_bs)) {
                $data[] = $row;
            }

            http_response_code(200);
            echo json_encode($data);
            break;

        case 'one':
        case 'two':
            $bs_query = "SELECT time_received, fm_id, tot, flow FROM `flowmeter_" .$id. "` ORDER BY id DESC LIMIT 1";
      
            $result_bs = mysqli_query($conn, $bs_query);

            while ($row = mysqli_fetch_assoc($result_bs)) {
                $data[] = $row;
            }

            http_response_code(200);
            echo json_encode($data);
            break;

        default:
            echo "Parameter not correct";
    }





} else {
    echo "Parameter 'id' is missing";
}







?>