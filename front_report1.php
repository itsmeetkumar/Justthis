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
            <h1>Immigration Case</h1>
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
   

 <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Basic Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="anumber">What's your A Number?</label>
                    <input type="text" class="form-control" id="anumber" placeholder="Enter A Number" name="anumber">
                  </div>
                  <div class="form-group">
                    <label for="detentioncenter">Detention Center Name:</label>
                    <input type="text" class="form-control" id="detentioncenter" placeholder="Detention Center" name="detentionname">
                  </div>
              </div>







          


 <!-- /.middlename -->
          <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Priliminary Details</h3>
              </div>
              <div class="card-body">
              <div class="form-group">
                    <label for="primarylang">What's your Primary Language?</label>
                    <input type="text" class="form-control" id="primarylang" placeholder="Enter Primary Language" name="primarylang">
                  </div>
                  <div class="form-group">
                    <label for="secondarylang">What's your Secondary Language?</label>
                    <input type="text" class="form-control" id="secondarylang" placeholder="Enter Secondary Language" name="secondarylang">
                  </div>
                  <div class="form-group">
                    <label for="preferedlang">What's your Prefered language?</label>
                    <input type="text" class="form-control" id="preferedlang" placeholder="Enter Prefered Language" name="preferedlang">
                  </div>
                  <div class="form-group">
                    <label for="writtenlang">What's your Written language?</label>
                    <input type="text" class="form-control" id="writtenlang" placeholder="Enter Written Language" name="writtenlang">
                  </div>

                  <div class="form-group">
                    <label for="redinglang">What's your reading language?</label>
                    <input type="text" class="form-control" id="redinglang" placeholder="Enter Reading Language" name="redinglang">
                  </div>

                  <div class="form-group">
                    <label for="court_rep_flag">Have you ever spoken with or had an attorney represent you before the immigration court?</label>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="court_rep_flag" value="1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="court_rep_flag" value="2">
                          <label class="form-check-label">No</label>
                        </div>
                  </div>
              </div>
          </div>





















  <div class="card card-primary">
                  <div class="card-header">
                <h3 class="card-title">Last Entry</h3>
              </div>
               
               <div class="card-body">   
                  <div class="form-group">
                    <label for="lastentry">Where did you last enter the US?</label>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask id="dob" placeholder="dd/mm/yyyy" id="lastentry" name="lastentry">
                  </div>


                  <div class="form-group">
                    <label for="manner_of_last_entry">Manner of last entry to the US?</label>
                    <select class="form-control">
                          <option value="AA">AA</option>
                          <option value="EW">EW</option>
                          <option value="visa">VISA</option>
                          <option value="greencard">GREENCARD</option>
                          <option value="otherdetails">OTHER-DETAILS</option>
                        </select>
                  </div>

                  <div class="form-group">
                    <label for="mode_of_entry">Where exactly did you enter the US?</label>
                    <select class="form-control">
                          <option value="BRIDGE">BRIDGE</option>
                          <option value="RIVER">RIVER</option>
                          <option value="DESERT">DESERT</option>
                          <option value="OTHER-DETAILS">OTHER-DETAILS</option>
                        </select>
                  </div>

                  <div class="form-group">
                    <label for="wait_turned_details">If bridge/port of entry (POE): Before Crossing the bridge/POE, were you made to wait or turned away? If YES, For how long or how many times? Who told you?</label>
                    <input type="text" class="form-control" id="wait_turned_details" name="wait_turned_details">
                  </div>

                  <div class="form-group">
                    <label for="other_mode_details">If by river or any land route *other* than bridge/POE: before crossing the river or entering the United States at a place other than the bridge/POE, did you try to enter through the bridge/POE? If so, what happened that made you find another way?</label>
                    <input type="text" class="form-control" id="wait_turned_details" name="wait_turned_details">
                  </div>
                  
                </div>
            </div>












































                <div class="card card-primary">
                  <div class="card-header">
                <h3 class="card-title">Enforcement and Detention History</h3>
              </div>
               
               <div class="card-body">   
                  <div class="form-group">
                    <label for="detention_entry_details">How did you enter immigiration detention?</label>
                    <select class="form-control">
                          <option value="PPREHENDED AT BORDER">PPREHENDED AT BORDER</option>
                          <option value="TRAFFIC STOP">TRAFFIC STOP</option>
                          <option value="TRANSFERRED FROM CRIMINAL CUSTODY">TRANSFERRED FROM CRIMINAL CUSTODY</option>
                          <option value="COURTHOUSE">COURTHOUSE</option>
                          <option value="HOME RAID">HOME RAID</option>
                          <option value="SCHOOL">SCHOOL</option>
                          <option value="WARRANTLESS ARREST">WARRANTLESS ARREST</option>
                          <option value="WORKPLACE RAID">WORKPLACE RAID</option>
                          <option value="OTHER-DETAILS">OTHER-DETAILS</option>
                        </select>
                    </div>


                  <div class="form-group">
                    <label for="family_health_details">Do any of your family members in the US have any health or mental health challenges?</label>
                   <div class="form-check">
                          <input class="form-check-input" type="radio" name="family_health_details" value="1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="family_health_details" value="2">
                          <label class="form-check-label">No</label>
                        </div>
                   </div>

                  <div class="form-group">
                    <label for="child_seperation_details">If apprehended at or near border, were you seperated from your child when you entered? Is your child with another parent, or were they taken by themselves?</label>
                   <input type="text" class="form-control" id="child_seperation_details" name="child_seperation_details">
                   
                  </div>

                  <div class="form-group">
                    <label for="apprehend_details">If apprehended in the interior, were officials looking for you specifically?</label>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="apprehend_details" value="1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="apprehend_details" value="2">
                          <label class="form-check-label">No</label>
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="first_detention_date">When were you first detained by ICE?</label>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask id="dob" placeholder="dd/mm/yyyy" id="first_detention_date" name="first_detention_date">
                  </div>

                  <div class="form-group">
                    <label for="apprehension_location">Location of apprehension</label>
                    <input type="text" class="form-control" id="apprehension_location" name="apprehension_location">
                  </div>

                  <div class="form-group">
                    <label for="detention_arrival_date">When did you arrive at this detention center?</label>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask id="dob" placeholder="dd/mm/yyyy" id="detention_arrival_date" name="detention_arrival_date">
                  </div>

                   <div class="form-group">
                    <label for="asylum_interview">Have you had a credible fear interview already?</label>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="asylum_interview" value="1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="asylum_interview" value="2">
                          <label class="form-check-label">No</label>
                        </div>
                    </div>

               </div>
            </div>




















































   

















 <button type="submit" class="btn btn-primary">Submit</button>
















       
  
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>








<?php


include 'front_footer.php';

 ?>