<?php
include 'include/config.php';
include 'front_header.php';
include 'front_nav.php';

?>


  


 <!-- /.middlename -->
 
         <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Accident Cases Analysis</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Map Summary</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
    
    <iframe src="<?php echo $base_url; ?>/heatmap.html" width="100%" height="790px"></iframe>

    </section>
    <!-- /.content -->
  </div>





















  



















       
  
      <!-- /.card -->

   








<?php


include 'front_footer.php';

 ?>