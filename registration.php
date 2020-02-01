<?php
include 'include/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
<div class="wrapper">
  

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="col-sm-4">
            <h1>Registration Form</h1>
          </div>
   
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div>
        <div class="row">
         
            <!-- general form elements -->
            <div class="card card-primary" id="card">
              <div class="card-header">
                <h3 class="card-title">Basic Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name">
                  </div>
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" value="1">
                          <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" value="2">
                          <label class="form-check-label">Female</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" value="3">
                          <label class="form-check-label">Other</label>
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="dob">DOB:</label>
                    <div class="form-group">
                 
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask id="dob">
                  </div>
                  <!-- /.input group -->
                </div>
                  </div>

                  <div class="form-group">
                    <div class="form-group">
                        <label>Ethnicity:</label>
                        <select class="form-control">
                          <option value="1">African Americans</option>
                          <option value="2">Alaska Natives</option>
                          <option value="3">Native Americans in United States</option>
                          <option value="4">Jewish</option>
                          <option value="5">White</option>
                          <option value="6">Asian</option>
                          <option value="7">Multiracial</option>
                          <option value="8">Native Hawaiians</option>
                          <option value="9">Pacific Islander</option>
                          <option value="10">Hispanic and Latino Americans</option>
                          <option value="11">Arabs<option>
                          <option value="12">Puerto Ricans</option>
                          <option value="13">Latino</option>
                          <option value="14">Pacific Islands Americans</option>
                          <option value="15">Black</option>
                          <option value="16">Mexicans</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="occupation">Occupation</label>
                    <input type="text" class="form-control" id="occupation" placeholder="Occupation">
                  </div>
                </div>
                <!-- /.card-body -->

              </form>
            </div>
            <!-- /.card -->
            <br>
             <!-- general form elements -->
            <div class="card card-primary" id="card">
              <div class="card-header">
                <h3 class="card-title">Contact Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                  <label>Phone Number:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                  </div>
                  <!-- /.input group -->
                </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email Id">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Address">
                  </div>
                  <div class="form-group">
                    <label for="city">City, State, Zip Code</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter City, State, Zip Code">
                  </div>
                  <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" placeholder="Country">
                  </div>
                </div>
                <!-- /.card-body -->

              </form>
            </div>
            <!-- /.card -->
            <br>
             <!-- general form elements -->
            <div class="card card-primary" id="card">
              <div class="card-header">
                <h3 class="card-title">Identification</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="govid">Government ID</label>
                    <input type="text" class="form-control" id="govid" placeholder="Government ID">
                  </div>
                  <div class="form-group">
                    <label for="ssn">SSN</label>
                    <input type="number" class="form-control" id="ssn" placeholder="SSN">
                  </div>
                  <div class="form-group">
                    <label for="otherid">Other ID</label>
                    <input type="text" class="form-control" id="otherid" placeholder="Other ID">
                  </div>
                  
                </div>
                <!-- /.card-body -->

              </form>
            </div>
            <!-- /.card -->

            <br>
             <!-- general form elements -->
            <div class="card card-primary" id="card">
              <div class="card-header">
                <h3 class="card-title">Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="propic">Profile Pic URL</label>
                    <input type="text" class="form-control" id="propic" placeholder="Profile Pic URL">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="recovemail">Recovery Email</label>
                    <input type="email" class="form-control" id="recovemail" placeholder="Recovery Email">
                  </div>

                  <div class="form-group">
                    <label for="dob">Creation Date:</label>
                    <div class="form-group">
                 <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask id="creationdate">
                  </div>
                  <!-- /.input group -->
                </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
                  
                  <div class="form-group">
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo $base_url; ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $base_url; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src=".<?php echo $base_url; ?>/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $base_url; ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $base_url; ?>/dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
