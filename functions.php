<?php
$servername = "localhost";
$username = "username";  // Kindly Provide your MySQL username here for this to work on your system. 
$password = "password";   // Kindly Provide your MySQL Passoword here for this to work on your system. 
$dbname= "Placement_Database"; 
// Creating Connection 
$conn = new mysqli($servername, $username, $password, $dbname);

 if(isset($_POST["Import"])){
    
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
            
            $sql = "INSERT INTO offers (Name, Enrolment_Number, Company_Name)
VALUES ('".$getData[0]."', '".$getData[1]."', '".$getData[2]."')";

if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"index.php\"
          </script>";
} else {
    echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"index.php\"
              </script>"; 
}
            
           }
      
           fclose($file);  
     }
  }   


  if(isset($_POST["Export"])){
     
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=data.csv');  
    $output = fopen("php://output", "w");  
    fputcsv($output, array('Name', 'Enrolment_Number', 'Company_Name'));  
    $query = "SELECT * from employeeinfo ORDER BY Enrolment_Number DESC";  
    $result = mysqli_query($conn, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
         fputcsv($output, $row);  
    }  
    fclose($output);  
}


 ?>