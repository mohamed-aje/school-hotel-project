<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'root';
$dbname = 'hotel';

//database user password
$pass = 'aje531008';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
?>