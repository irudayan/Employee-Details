<?php 
//Databse Connection file
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $company=$_POST['company'];
    $age=$_POST['age'];
    $dob=$_POST['date'];
    $email=$_POST['email'];
    $area_code=$_POST['area_code'];
    $phone=$_POST['phone'];
    $mstatus=$_POST['mstatus'];
    $awork=$_POST['warea'];
    $file = $_FILES['file_cv']['name'];
    $file_loc = $_FILES['file_cv']['tmp_name'];
    $file_size = $_FILES['file_cv']['size'];
    $file_type = $_FILES['file_cv']['type'];
    $folder="upload/";
    $new_size = $file_size/1024*4;
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);
    $add=$_POST['address'];
    $gender=$_POST['gender'];
   
    //print_r($date);exit;
  
   if(move_uploaded_file($file_loc,$folder.$final_file))

  // Query for data insertion
   {
     $query=mysqli_query($con, "insert into employees(first_name,last_name,company,age,dob,email,area_code,phone,maritail_status,areaof_working,file,type,size,address,gender) value ('$fname','$lname', '$company', '$age', '$dob','$email','$area_code','$phone','$mstatus','$awork','$final_file','$file_type','$new_size','$add','$gender' )");
   }
 
    if ($query) {
    echo "<script>alert('You have successfully inserted the new employee recorde');</script>";
    echo "<script type='text/javascript'>document.location ='dashboard.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>