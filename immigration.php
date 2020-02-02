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
            <h1>Part-II<br>Immigrant Form</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Basic Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo $base_url; ?>/front_criminal.php">
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
                    <label for="mode_of_entry">How exactly did you enter the US?</label>
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
                <!-- /.card-body -->


                <div class="card card-primary">
                  <div class="card-header">
                <h3 class="card-title">Community Ties</h3>
              </div>
               
               <div class="card-body">   
                  <div class="form-group">
                    <label for="family_member_details">Do you have family member in United states, and if so, who and what type of legal status do they have? If children, are they biological? If spouse, are you legally married?</label>
                    <input type="text" class="form-control" id="family_member_details" name="family_member_details">
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
                    <label for="family_details">In total how many people do you have here in the united states, including family and friends, that are willing to support you in your case?</label>
                   <input type="number" class="form-control" id="family_details" name="family_details">
                   
                  </div>

                  <div class="form-group">
                    <label for="POC">Who is the best point of contact for your case?</label>
                    <input type="text" class="form-control" id="POC" name="POC">
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

            <div class="card card-primary">
                  <div class="card-header">
                <h3 class="card-title">Potential Bar Details</h3>
              </div>
               
               <div class="card-body">   
                  <div class="form-group">
                    <label for="criminal_history">Do you have any criminal history in the US(including traffic tickets)?</label>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="criminal_history" value="1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="criminal_history" value="2">
                          <label class="form-check-label">No</label>
                        </div>
                    </div>


                  <div class="form-group">
                    <label for="remove_from_US_history">Have you ever been ordered removed from the US?</label>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="remove_from_US_history" value="1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="remove_from_US_history" value="2">
                          <label class="form-check-label">No</label>
                        </div>
                    </div>


                  <div class="form-group">
                    <label for="deported_status">Have you ever been deported?</label>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="deported_statusHave" value="1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="deported_statusHave" value="2">
                          <label class="form-check-label">No</label>
                        </div>
                    </div>

                  
               </div>
            </div>


            <div class="card card-primary">
                  <div class="card-header">
                <h3 class="card-title">Relief Screening</h3>
              </div>
               
               <div class="card-body">   
                  <div class="form-group">
                    <label for="harmed_details">During your journey to US, were you harmed or forced to do anything you didn't want to do?</label>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="harmed_details" value="1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="harmed_details" value="2">
                          <label class="form-check-label">No</label>
                        </div>
                    </div>


                  <div class="form-group">
                    <label for="return_afraid_flag">Are you afraid to return to your home country?</label>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="return_afraid_flag" value="1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="return_afraid_flag" value="2">
                          <label class="form-check-label">No</label>
                        </div>
                    </div>


                  <div class="form-group">
                    <label for="violent_home_flag">Have you ever lived in a violent home?</label>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="violent_home_flag" value="1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="violent_home_flag" value="2">
                          <label class="form-check-label">No</label>
                        </div>
                    </div>


                    <div class="form-group">
                    <label for="victim_crime_flag">Have you ever been the victim of a crime in the US?</label>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="victim_crime_flag" value="1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="victim_crime_flag" value="2">
                          <label class="form-check-label">No</label>
                        </div>
                    </div>


                    <div class="form-group">
                    <label for="police_report_details">If so, did you file a police report? What was the crime?</label>
                    <input type="text" class="form-control" id="police_report_details" name="police_report_details">
                    </div>

                  
               </div>
            </div>


             <div class="card card-primary">
                  <div class="card-header">
                <h3 class="card-title">Other Details</h3>
              </div>
               
               <div class="card-body">   
                  <div class="form-group">
                    <label for="gone_before_judge">How many times have you gone before a judge since your detention?</label>
                    <input type="number" class="form-control" id="gone_before_judge" name="gone_before_judge">
                    </div>


                  <div class="form-group">
                    <label for="document_details">What documents do you have? (IE documents from your sponsor, paperwork from court, criminal history record, proof/docs from country of origin, etc). Please bring all of your documents to any visit you have because we want to make copies.</label>
                    <input type="text" class="form-control" id="document_detailsWhat" name="document_detailsWhat">
                    </div>


                  <div class="form-group">
                    <label for="other_details">Anything else we should know about you for your case?</label>
                    <input type="text" class="form-control" id="other_details" name="other_details">
                    </div>

                  
               </div>
            </div>



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