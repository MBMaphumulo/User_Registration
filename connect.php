<?php
/*
try {
    $conn = new PDO("sqlsrv:server = tcp:imakapp.database.windows.net,1433; Database = imakapp", "mysalon", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
*/
$connectionInfo = array("UID" => "mysalon@imakapp", "pwd" => "{your_password_here}", "Database" => "imakapp", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:imakapp.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

$getResults = sqlsrv_query($conn,"SELECT * from booking");

while($row = sqlsrv_fetch_array($getResults,SQLSRV_FETCH_ASSOC)){
    echo ($row['booking_status'].PHP_EOL);

}


sqlsrv_free_stmt($getResults);
?>