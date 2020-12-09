<?php
session_start();
$base_url = "http://localhost:8083/CaseStudy/";
$conn = new mysqli("localhost:3307","root","","training");
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>