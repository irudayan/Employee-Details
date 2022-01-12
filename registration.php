
<DOCTYPE html>
<html>
<head>
  <title>Registration form</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
  
 <div>
   <?php
     include('dbconnection.php');


     if(isset($_POST['register'])){
           
       $first_name   =$_POST['first_name'];
       $last_name    =$_POST['last_name'];
        //print_r($last_name);exit;
       $email        =$_POST['email'];
       $password     =$_POST['password'];



        $query=mysqli_query($con, "insert into register(first_name,last_name,email,password) values('$first_name',
          '$last_name','$email','$password')");

       if ($query) 
       {
          echo 'Registration success!';
    
       }
       else
       {
          echo 'error';
       }
    }

   ?>
 </div>
  <div>
      <form action="registration.php" method="post">
        <div class="container">
           <div class="row">
              <div class="col-sm-3">
    	          <h1>Registration</h1>
    	          <p>Fill up the form</p>
                <hr class="mb-3">
                <label for="first_name"><b>First Name</b></label>
                <input class="form-control" type="text" name="first_name" required maxlength="15"> 

                <label for="last_name"><b>Last Name</b></label>
                <input class="form-control" type="text" name="last_name" required maxlength="15">

                <label for="email"><b>Email</b></label>
                <input class="form-control" type="email" name="email" required>

                <label for="password"><b>Password</b></label>
                <input class="form-control" type="password" name="password" required maxlength="8"> 

                <hr class="mb-3">   
                <input class="btn btn-primary" type="submit" name="register" value="Sign up">
                 
                 <div class="signup-link">
                     All ready have an account? <a href="index.php">Login</a>
             </div> 
  
              </div>

        </div>
       </div>




      </form>
  </div>
  
</body>
</html>