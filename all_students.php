<html>
<?php include('includes/head.php');  ?>
    <body>
        <?php
include('includes/database_connection.php');
include('includes/header.php');
        ?>
      



<!-- Sorting Form -->

<form action = "" method="post">

     <div class="form-row">
        <div class="form-group col-md-6">
        <label for="Student_Name">Student Name</label>
    <input type="text" name="Student_Name" class ="form-control" id="Student_Name" placeholder = "Enter Name of the Student" value="">
</div>
<div class="form-group col-md-6">
<label for="Enrolment_Number">Enrolment Number</label>
    <input type="text" name="Enrolment_Number" id="Enrolment_Number" class = "form-control" placeholder="Enter the Enrolment Number of the Student" value="">
</div> 
</div>
        
<div class="form-row">
    <div class="form-group col-md-6">
        <select class="form-control" aria-label="Default select example" name="Branch" >
  <option selected value ="">Branch</option>
  <option value="CSE">CSE</option>
  <option value="IT">IT</option>
  <option value="ECE">ECE</option>
  <option value="ELE">ELE</option>
  <option value="MEC">MEC</option>
  <option value="CIV">CIV</option>
  <option value="CHE">CHE</option>
  <option value="MME">MME</option>
</select>
</div>
<div class="form-group col-md-6">

<select class="form-control" aria-label="Default select example" name="Batch" >
  <option selected value="">Batch</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
 
</select>
</div>
</div> 

<div class="form-row">
    <div class="form-group col-md-6">
    <input type="submit" value="Submit" name = "form1" class="btn btn-primary">
</div>
</div>
</form>


            
                <table class="table table table-dark table-striped table-hover table-sm">
<tr>
<th> Enrolment Number</th>
<th> Registration Number </th>
<th> Name </th>
<th> Branch </th>
<th> Batch </th>
<th> CGPA </th>
<th> Phone Number </th>
<th> College Email ID </th>
<th> Alternate Email ID</th>
<th> Resume Link</th>
<th> Placement Status </th>
<th> Final Offer ID </th>
</tr>
<?php

$Student_Name = "";
$Enrolment_Number ="";
$Branch ="";
$Batch = "";

if(isset($_POST["form1"])){
    $Student_Name = $_POST["Student_Name"]; 
    $Enrolment_Number = $_POST["Enrolment_Number"]; 
    $Branch = $_POST["Branch"];
    $Batch = $_POST["Batch"]; 
}


$result = $conn->query(
"SELECT * FROM Student_Data
WHERE Branch LIKE '%".$Branch."%' AND Batch LIKE '%".$Batch."%' AND Enrolment_Number LIKE '%".$Enrolment_Number."%' AND Name LIKE '%".$Student_Name."%' 
"
// WHERE Branch=".$Branch." AND Batch=".$Batch." AND
);

while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Enrolment_Number"]. " </td> <td>" . $row["Registration_Number"]. " </td> <td> " . $row["Name"]." </td> <td>" . $row["Branch"]." </td> <td>" . $row["Batch"]." </td> <td>" . $row["CGPA"]." </td> <td>" . $row["Phone_Number"]." </td> <td>" . $row["College_Email_ID"]." </td> <td>" . $row["Alternate_Email_ID"]." </td> <td>" . $row["Resume_Link"]." </td> <td>" . $row["Placement_Status"]." </td> <td>" . $row["Final_Offer_ID"]. "</td></tr>";
  }

  ?>
</table>


  <!--  Import File Portion   -->
                
  <form class="form-horizontal" action="all_students1.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>Import File</legend>
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>
                    </fieldset>
                </form>







<?php include('includes/footer.php');  ?>
    </body>
</html>