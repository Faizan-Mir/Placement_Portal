<html>

<?php include('includes/head.php');  ?>

<body>

  


<?php
include('includes/header.php'); 
require('includes/database_connection.php'); 


?>
<div id="wrap">
        <div class="container">
            <div class="row">
                <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
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
            </div>
            <?php
            //   get_all_records();
            ?>
        </div>
    </div>



<table class="table table-bordered">
<tr>
<th> Enrolment Number</th>
<th> Name </th>
<th> Company Name </th>
</tr>
<?php

$result = $conn->query(
'SELECT * FROM offers'
);

while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Enrolment_Number"]. " </td> <td>" . $row["Name"]. " </td> <td> " . $row["Company_Name"]. "</td></tr>";
  }

  ?>
</table>


<div>
            <form class="form-horizontal" action="functions.php" method="post" name="upload_excel"   
                      enctype="multipart/form-data">
                  <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                            </div>
                   </div>                    
            </form>           
 </div>


</body>
<footer>

<?php
include('includes/footer.php'); 
?>
</footer>





</html>