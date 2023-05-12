<?php

$conn = mysqli_connect('localhost','root','','profile');

if ($conn) {
    echo 'connected';
} else {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
}