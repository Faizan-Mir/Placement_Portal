<?php

session_start();
// require("botdetect.php");


 
$servername = "localhost";
$username = "username";  // Kindly Provide your MySQL username here for this to work on your system. 
$password = "password";   // Kindly Provide your MySQL Passoword here for this to work on your system. 
$dbname= "Placement_Database"; 
// Creating Connection 
//$conn = new mysqli($servername, $username, $password);

//Creating Database named Placement_Database 
//$conn->query('CREATE DATABASE Placement_Database'); 

// Connecting to the Database Placement_Database
$conn = new mysqli($servername, $username, $password, $dbname);


// Creating a Table for our form entries named formEntries
// This Table contains four columns viz Name, Email, DOB and About_Yourself. 
/*
$conn->query('CREATE TABLE offers (
Name VARCHAR(100) NOT NULL,
Enrolment_Number VARCHAR(100) PRIMARY KEY,
Company_Name VARCHAR(1000) NOT NULL
)');  
*/
?>