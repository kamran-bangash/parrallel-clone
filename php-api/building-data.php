<?php
include_once('database-connection.php');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');    
header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
$id = $_GET['id'];
$sql = "SELECT * FROM `buildings` WHERE `geo_id` = $id";
$result = $conn->query($sql);

print json_encode($result->fetch_assoc());

exit;


if ($result->num_rows > 0) {
    // output data of each row
    echo json_encode($result->fetch_assoc());exit;
    while($row = $result->fetch_assoc()) {
      // $sql_query = "UPDATE `buildings` SET `price`=".rand(1000000, 10000000) . ",`sqr_ft`= " . rand(1000,  10000) . ",`status`='1' WHERE `id`= ". $row['id'];
      // $conn->query($sql_query);
      // echo "id: " . $row["id"];
    //   . " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
  } else {
    echo "0 results";
  }
// $conn->close();
?>