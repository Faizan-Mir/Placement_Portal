<html>
<?php include('includes/head.php');  ?>
    <body>
        <?php
include('includes/database_connection.php');
include('includes/header.php');
        ?>


<table class="table table table-dark table-striped table-hover table-sm">
<tr>
<th> Offer ID</th>
<th> Enrolment Number </th>
<th> Name </th>
<th> Branch </th>
<th> Batch </th>
<th> Offer Date</th>
<th> CTC</th>
<th> Base Pay </th>
<th> Blocking Status</th>
<th> Offer Type</th>
<th> Remarks </th>
</tr>
<?php






$result = $conn->query(
"SELECT * 
FROM (
    ( Offers INNER JOIN Student_Data ON Offers.Enrolment_Number = Student_Data.Enrolment_Number)
    INNER JOIN Jobs ON Offers.Job_ID = Jobs.Job_ID
)
"

);


while($row = $result->fetch_assoc()) {
    echo "<tr>

    <td>" . $row["Offer_ID"]. " </td>
    <td>" . $row["Enrolment_Number"]. " </td>
    <td>" . $row["Name"]. " </td>
    <td>" . $row["Branch"]. " </td>
    <td>" . $row["Batch"]. " </td>
    <td>" . $row["Offer_Date"]. " </td>
    <td>" . $row["CTC"]. " </td>
    <td>" . $row["Base_Pay"]. " </td>
    <td>" . $row["Blocking_Status"]. " </td>
    <td>" . $row["Offer_Type"]. " </td>
    <td>" . $row["Remarks"]. " </td>

    </tr>";
  }

  ?>
</table>









<!--  Import File Portion   -->
                
<form class="form-horizontal" action="offers1.php" method="post" name="upload_excel" enctype="multipart/form-data">
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