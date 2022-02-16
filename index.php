<?php
// echo("Hello World!");
// function addNum($x, $y)
// {
//     $c;
//     $c = $x + $y;
//     return $c;
// }
// function multiple($x, $y, $z)
// {
//     return [$x, $y, $z];
// }
// $a = multiple(32, 44, 23);
// function reverse_string($str)
// {
//     return strrev($str);
// }
// echo(reverse_string("Hello World!"));
// $conn = mysql_connect();

// Object Oriented style of connecting to DB
$conn = new mysqli();
if ($conn->connect_error) {
    # code...
    die("Failed to connect to the database!" . mysql_error());
}
echo "Connection to mysql succeeded!";

// Create a connection to the DB
$sql = 'CREATE DATABASE myDB';
if ($conn->query($sql) === TRUE) {
    # code...
    echo "Database created successfully";
}else {
    # code...
    echo "Error creating database!" . $conn->error;
}


mysqli_close($conn);


?>