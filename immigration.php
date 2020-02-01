<?php
include 'include/config.php';
include 'front_header.php';
include 'front_nav.php';
?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- general form elements -->
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
                <div class="card-header">
                <h3 class="card-title">Priliminary Details</h3>
              </div>
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
                          <input class="form-check-input" type="radio" name="radio1" value="1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" value="2">
                          <label class="form-check-label">No</label>
                        </div>
                  </div>

                  <div class="card-header">
                <h3 class="card-title">Basic Information</h3>
              </div>
                  
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
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    <!-- /.content -->
  </div>

<?php
include 'front_footer.php';
?>