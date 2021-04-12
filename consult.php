<?php

header("Access-Control-Allow-Origin: *");

header("Access-Control-Allow-Methods: PUT, GET, POST");

header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

//$servername= "localhost";
//$username="rojo";
//$password = "qwerty";
//$db = "doc";

$servername= "betwimurrau9vuev9jbb-mysql.services.clever-cloud.com";
$username="ucwjmsl59slmoav9";
$password = "8HaZG6bN2qIiR4VF7tke";
$db = "betwimurrau9vuev9jbb";

$mysqli = new mysqli($servername, $username, $password, $db);



// Create connection

$conn = mysqli_connect($servername, $username, $password,$db);



// Check connection

if (!$conn) {

   die("Connection failed: " . mysqli_connect_error());

}

//echo "Connected successfully";

  $trp = mysqli_query($mysqli, 'SELECT * FROM db');
        $rows = array();
        while($r = mysqli_fetch_assoc($trp)) {
            $rows[] = $r;
        }
        echo json_encode($rows);
        return json_encode($rows);

?>