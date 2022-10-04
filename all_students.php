<html>
<?php include('includes/head.php');  ?>
    <body>
        <?php
include('includes/database_connection.php');
include('includes/header.php');
        ?>
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

<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Branch
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">CSE</a>
    <a class="dropdown-item" href="#">IT</a>
    <a class="dropdown-item" href="#">ECE</a>
    <a class="dropdown-item" href="#">ELE</a>
    <a class="dropdown-item" href="#">MEC</a>
    <a class="dropdown-item" href="#">CIV</a>
    <a class="dropdown-item" href="#">CHE</a>
    <a class="dropdown-item" href="#">MME</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Others</a>
  </div>
</div>
            
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

$result = $conn->query(
'SELECT * FROM Student_Data'
);

while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Enrolment_Number"]. " </td> <td>" . $row["Registration_Number"]. " </td> <td> " . $row["Name"]." </td> <td>" . $row["Branch"]." </td> <td>" . $row["Batch"]." </td> <td>" . $row["CGPA"]." </td> <td>" . $row["Phone_Number"]." </td> <td>" . $row["College_Email_ID"]." </td> <td>" . $row["Alternate_Email_ID"]." </td> <td>" . $row["Resume_Link"]." </td> <td>" . $row["Placement_Status"]." </td> <td>" . $row["Final_Offer_ID"]. "</td></tr>";
  }

  ?>
</table>










<?php include('includes/footer.php');  ?>
    </body>
</html>