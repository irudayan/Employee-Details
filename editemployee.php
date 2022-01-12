<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title> Edit Employee</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />


    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <script>
    function goBack() {
    window.history.back()
    }
</script>
</head>

<body>
    
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Employee Registration Form</h2>
                </div>
                
                <?php
                include ('dbconnection.php');
                $id=$_GET['id'];
                $ret = mysqli_query($con,"select * from employees where id= $id ");
                $count = mysqli_num_rows($ret);
                if($count > 0){
                while ($row=mysqli_fetch_array($ret)) {
                ?>  
                <div class="card-body"> 
                    <form method="POST" enctype="multipart/form-data" action="updateemployee.php?id=<?php echo $row['id']; ?>">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name" required="text" value="<?php echo $row['first_name']?>">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name" required="text" value="<?php echo $row['last_name']?>" >
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Company</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="company" required="text" value="<?php echo $row['company']?>">
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Age</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="Number" name="age" required="text" value="<?php echo $row['age']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">DOB</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="date" required="true" value="<?php echo $row['dob']?>">
                                    

                                </div>
                            </div>  
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" value="<?php echo $row['email']?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="Number" name="area_code" required="true" value="<?php echo $row['area_code']?>">
                                            <label class="label--desc">Area Code</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="Number" name="phone" value="<?php echo $row['phone']?>">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         
                      

                        <div class="form-row">
                            <div class="name">Maritail status
                                             </div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="mstatus">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="Married" <?php echo ($row['maritail_status'] == "Married") ? 'selected = "selected"' : '' ;?>>Married</option>
                                            <option value="Unmarried" <?php echo ($row['maritail_status'] == "Unmarried") ? 'selected = "selected"' : '' ;?>>Unmarried</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Area of Working</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="warea" value="<?php echo $row['areaof_working']?>">
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Upload CV</div>
                            <div class="value">
                                <div class="input-group  js-input-file">
                                    <input class="input-file input--style-5" type="file" name="file_cv" id="file" value="" ><?php echo $row['file']?>
                                     <img src="upload/<?php echo $row['file'] ?>" width ="30px" height ="30px" />  
                                    <label class="label--file" for="file"></label>
                                    
                    
                                <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>
                               </div> 
                            </div>
                        </div>
                         <div class="form-row m-b-55">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="input--style-5" type="text" rows="4" cols="50" name="address" placeholder="Give your address"><?php echo $row['address']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Select your Gender</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Male
                                    <input type="radio" checked="checked" name="gender" value="Male" <?php echo ($row['gender']=='Male')?'checked':'' ?>>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" value="Female" <?php echo ($row['gender']=='Female')?'checked':'' ?>>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="edit">Edit</button>

                             <button class="btn btn--radius-2 btn--red" type="back" name="back" onclick="goBack()">Back</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } } ?>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
   
    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->