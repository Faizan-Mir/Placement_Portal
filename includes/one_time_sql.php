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

$conn->query('CREATE TABLE Offers (
Offer_ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
Enrolment_Number VARCHAR(100) ,
Company_ID INT FOREIGN KEY,
CTC INT,
Base_Pay INT,
Remarks VARCHAR(2000),
FOREIGN KEY (Enrolment_Number) REFERENCES Student_Data(Enrolment_Number)
)');  


$result = $conn->query('CREATE TABLE Student_Data (
    Enrolment_Number VARCHAR(20) PRIMARY KEY,
    Registration_Number VARCHAR(20) ,
    Name VARCHAR(100) NOT NULL,
    Branch ENUM("CSE","IT","ECE","ELE","MEC","CIV","CHE","MME") NOT NULL,
    Batch VARCHAR(10),
    CGPA FLOAT(5),
    Phone_Number BIGINT(10),
    College_Email_ID VARCHAR(100),
    Alternate_Email_ID VARCHAR(100),
    Resume_Link VARCHAR(500),
    Placement_Status ENUM("Unplaced","Permanently_Blocked"),
    Final_Offer_ID VARCHAR(15)
    
    )
');

if($result){
  echo "Done";
}
else{
  echo ($conn->error); 
}




?>