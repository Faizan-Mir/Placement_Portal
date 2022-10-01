<?php

session_start();
// require("botdetect.php");


 
$servername = "localhost";
$username = "username";  // Kindly Provide your MySQL username here for this to work on your system. 
$password = "password";   // Kindly Provide your MySQL Passoword here for this to work on your system. 
$dbname= "Placement_Database"; 
//Creating Connection 
$conn = new mysqli($servername, $username, $password);

//Creating Database named Placement_Database 
$conn->query('CREATE DATABASE Placement_Database'); 

 //Connecting to the Database Placement_Database
$conn = new mysqli($servername, $username, $password, $dbname);


// Creating a Table for our form entries named formEntries
// This Table contains four columns viz Name, Email, DOB and About_Yourself. 

$conn->query('CREATE TABLE offers (
Name VARCHAR(100) NOT NULL,
Enrolment_Number VARCHAR(100) PRIMARY KEY,
Company_Name VARCHAR(1000) NOT NULL
)');  


$conn->query('CREATE TABLE Student_Data(
    Enrolment_Number VARCHAR(20) PRIMARY KEY,
    Registration_Number VARCHAR(20) NOT NULL,
    Name VARCHAR(100) NOT NULL,
    Branch ENUM("CSE","IT","ECE","ELE","MEC","CIV","CHE","MME") NOT NULL,
    Batch ENUM(2019,2020,2021,2022,2023) NOT NULL,
    CGPA DECIMAL(7,4),
    Phone_Number BIGINT(10),
    College_Email_ID VARCHAR(100),
    Alternate_Email_ID VARCHAR(100),
    Resume_Link VARCHAR(500),
    Placement_Status ENUM("Unplaced","Permanently_Blocked")

    
    )
');

?>