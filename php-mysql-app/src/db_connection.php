<?php
// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'shewa';

// database user password
$pass = '1234';

// check the MySQL connection status
$conn = new mysqli( $host, $user, $pass, 'test_db' );
if ( $conn->connect_error ) {
	die( 'Connection failed: ' . $conn->connect_error );
}