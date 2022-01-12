<?php 
	session_start();
		
	if(!isset($_SESSION))
	{
		header('location:index.php');
		exit;
	}
	

?>

<!DOCTYPE html>
<html>
<head>
<title>Employee Dashboard</title>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>

<body>
	<a href="createemp.php" ><button>New Employee</button></a> 
	<div class="container-dashboard">
		<h3>Employee list!</h3> 
		<table class="table" border="1px" id="example" >
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>First Name</th>                       
            <th>Last name</th>
            <!--<th>Company</th>
            <th>Age</th>
            <th>DOB</th>-->
            <th>Email</th>
            <!--<th>Area Code</th>
            <th>Phone Number</th>
            <th>Maritail Status</th>
            <th>Area of Working</th>
            <th>File</th>
            <th>Type</th>
            <th>Size</th>-->
            <th>Address</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>

<tbody>
<?php
include ('dbconnection.php');
$ret = mysqli_query($con,"select * from employees");
$count = mysqli_num_rows($ret);
if($count > 0){
while ($row=mysqli_fetch_array($ret)) {
?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['gender']; ?></td>
         <td>
                <a href="viewemployee.php?id=<?php echo $row['id']; ?>" > <span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="editemployee.php?id=<?php echo $row['id'];?>"> <span class="glyphicon glyphicon-pencil"></span></a>
                <a href="deleteemployee.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
                

          </td>        

       </tr>
    </tbody>
<?php } ?>
<?php } else{
    echo 'No Records are available in that table.';
} ?>
</table>
		<br>
		
		<a href="logout.php?logout=true" class="logout-link">Logout</a>
	</div> 
 
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</html>