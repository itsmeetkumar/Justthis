<?php
include 'include/config.php';
include 'front_header.php';
include 'front_nav.php';

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Part - I</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
   









          


 <!-- /.middlename -->
 <form action="<?php echo $base_url; ?>/immigration.php">
          <div class="card card-primary">
                <div class="card-body">
                  
          
          <div class="form-group">
                    <label for="Country">Country</label>
                    <input type="text" class="form-control" id="age" placeholder="Enter Country" name="age">
          </div>
           <div class="form-group">
                    <label for="Country">State</label>
                    <input type="text" class="form-control" id="age" placeholder="Enter State" name="age">
          </div>

          <div class="form-group">
                    <label for="Country">City</label>
                    <input type="text" class="form-control" id="age" placeholder="Enter City" name="age">
          </div>
          <div class="form-group">
                    <label for="Country">Location of Incident name</label>
                    <input type="text" class="form-control" id="age" placeholder="Enter State" name="age">
          </div>

          <div class="form-group">
                    <label for="Country">Short description</label>
                    <textarea name="" id="input" class="form-control" rows="4" ></textarea>
                    
          </div>

          <div class="form-group">
                    <label for="Country">Detailed description</label>
                    <textarea name="" id="input" class="form-control" rows="8" ></textarea>
                    
          </div>

          <div class="form-group">
                    <label for="manner_of_last_entry">Upload Video/any proofs</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

          <button type="submit" class="btn btn-primary">Submit</button>
</div>
        </div>
        <dir>You can enter the details here .....</dir>

</form>



















  



















       
  
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>








<?php


include 'front_footer.php';

 ?>