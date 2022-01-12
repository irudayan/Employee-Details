<?php
include ('dbconnection.php');
$id=$_GET['id'];
$ret = mysqli_query($con,"select * from employees where id= $id ");
$count = mysqli_num_rows($ret);
if($count > 0){
while ($row=mysqli_fetch_array($ret)) {
?>
<html>
<head>
<title>View Employee</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <h1>EMPLOYEE RECORD</h1>
<table class="table table-striped" width="50%" height="50%">
            <tr>
            <th>Id</th>
            <td><?php echo $row['id']; ?></td>
            </tr>

            <tr>
            <th>First Name</th>
            <td><?php echo $row['first_name']; ?></td>
            </tr>

            <tr>
            <th>Last name</th>
            <td><?php echo $row['last_name']; ?></td>
            </tr>

            <tr>
            <th>Company</th>
            <td><?php echo $row['company']; ?></td>
            </tr>

            <tr>
            <th>Age</th>
            <td><?php echo $row['age']; ?></td>
            </tr>

            <tr>
            <th>DOB</th>
            <td><?php echo $row['dob']; ?></td>
            </tr>

            <tr>
            <th>Email</th>
            <td><?php echo $row['email']; ?></td>
            </tr>

            <tr>
            <th>Area Code</th>
            <td><?php echo $row['area_code']; ?></td>
            </tr>

            <tr>
            <th>Phone Number</th>
            <td><?php echo $row['phone']; ?></td>
            </tr>

            <tr>
            <th>Maritail Status</th>
            <td><?php echo $row['maritail_status']; ?></td>
            </tr>

            <tr>
            <th>Area of Working</th>
            <td><?php echo $row['areaof_working']; ?></td>
            </tr>

            <tr>
            <th>File</th>
            <td><?php echo $row['file']; ?></td>
            </tr>

            <tr>
            <th>Type</th>
            <td><?php echo $row['type']; ?></td>
            </tr>

            <tr>
            <th>Size</th>
            <td><?php echo $row['size']; ?></td>
            </tr>


            <tr>
            <th>Address</th>
            <td><?php echo $row['address']; ?></td>
            </tr>


            <tr>
            <th>Gender</th>
            <td><?php echo $row['gender']; ?></td>
            </tr>

           <tr>
            <th>Submitted On</th>
            <td><?php
            if (!empty($row['created_on'])) {
            $date = strtotime($row['created_on']);
            echo date('d-m-Y', $date); 
            }  
            ?>  </td>
            </tr>
<?php } ?>
<?php } else{
    echo 'No Records are available in that table.';
} ?>
</table>


</body>
</html>