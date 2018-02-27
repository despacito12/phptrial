<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sample Basic CRUD App II-IT E</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>

  <?php

    include('dbconnect.php');

    $query = "SELECT * FROM info ORDER BY entry_no DESC";

    $result = mysqli_query($conn, $query); 


  ?>
  <div class="container bg-success" style="padding-top:30px;padding-bottom:30px">
<div class="col-sm-8 ; table-responsive">
<br>
<br>
<br>
<h4>Display All Records</h4>
<hr>
  <table class="table" style="text-align: left">
  <thead>
  <tr>
  <th>Brand</th>
  <th>Model</th>
  </tr>
  </thead>
  <tbody>

  <?php

  while ($row = mysqli_fetch_assoc($result)) {

  ?>
  
  <tr>
  <td><?php echo $row['brand']; ?></td>
  <td><?php echo $row['model']; ?></td>
  <td>
  <a href="edit.php?entry_no=<?php echo $row['entry_no']; ?>" class="btn btn-success" role="button">Edit Record</a>
  <a href="deleterecord.php?entry_no=<?php echo $row['entry_no']; ?>" class="btn btn-danger" role="button" onClick="return confirm('Are You Sure You Want to Delete This Record?')">Delete Record</a>

  </td>
  </tr>

  <?php
  }
  mysqli_close($conn);

  ?>
  
  <tr>
  <td>
  </td>
  </tr>
  </div>
  </div> 
  
  </body>
</html>