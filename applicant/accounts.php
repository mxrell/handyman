<?php 
    $applicant = new Applicants();
    $appl = $applicant->single_applicant($_SESSION['APPLICANTID']);

?>
<style type="text/css">
  .form-group {
    margin-bottom: 5px;
  }
</style>
<form class="form-horizontal" method="POST" action="controller.php?action=edit">  
      <div class="container">  
            <div class="box-header with-border">
              <h3 class="box-title">Edit profile</h3>
 
              <!-- /.box-tools -->
            </div> 
              <div class="form-group">
                <div class="col-md-11">
                <label class="col-md-2 control-label" for=
                  "FNAME">Firstname :</label>
                  <div class="col-md-5">
                     <input class="form-control input" id="FNAME" name="FNAME" placeholder=
                        "Firstname" type="text" value="<?php echo $appl->FNAME;?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2 control-label" for=
                  "LNAME">Lastname :</label>
                  <div class="col-md-5"> 
                    <input  class="form-control input" id="LNAME" name="LNAME" placeholder=
                        "Lastname"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" value="<?php echo $appl->LNAME;?>">
                    </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2 control-label" for=
                  "MNAME">Middle Name :</label>
                  <div class="col-md-5"> 
                    <input  class="form-control input" id="MNAME" name="MNAME" placeholder=
                        "Middle Name"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" value="<?php echo $appl->MNAME;?>"> 
                  </div>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2 control-label" for=
                  "ADDRESS">Address :</label>
                  <div class="col-md-5">
                   <textarea class="form-control input" id="ADDRESS" name="ADDRESS" placeholder=
                      "Address" type="text" value="" style="auto; resize: none;" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"><?php echo $appl->ADDRESS;?></textarea>
                  </div>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2 control-label" for="Gender">Sex :</label>
                  <div class="col-md-5">
                    <div class="col-lg-5">
                        <div class="radio">
                          <label>
                            <input id="optionsRadios1" name="optionsRadios" type="radio" value="Female">Female
                          </label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="radio">
                        <label>
                          <input id="optionsRadios2" name="optionsRadios" type="radio" value="Male"> Male
                        </label>
                      </div>
                    </div> 
                  </div>
                </div>
              </div> 
              <script>
                console.log("<?php echo $appl->SEX; ?>")
                var userGender = "<?php echo $appl->SEX; ?>";
                if (userGender === "Female") {
                  document.getElementById("optionsRadios1").checked = true;
                } else if (userGender === "Male") {
                  document.getElementById("optionsRadios2").checked = true;
                }
              </script>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2 control-label" for=
                  "BIRTHDATE">Date of Birth :</label>
                  <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"> 
                         <i class="fa fa-calendar"></i> 
                        </span>  
                         <input class="form-control input date_picker" id="BIRTHDATE" name="BIRTHDATE" placeholder="Date of Birth" type="text"    value="<?php echo date_format(date_create($appl->BIRTHDATE),'m/d/Y');?>" required  autocomplete="off">
                    </div>
                  </div>
                </div>
              </div>  

               <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2 control-label" for=
                  "TELNO">Contact No. :</label>
                  <div class="col-md-5">                 
                     <input class="form-control input" id="CONTACTNO" name="CONTACTNO" placeholder=
                        "Contact No." type="text" any value="<?php echo $appl->CONTACTNO;?>" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                  </div>
                </div>
              </div> 

               <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2 control-label" for=
                  "EMAILADDRESS">Email Address :</label> 
                  <div class="col-md-5">
                     <input type="Email" class="form-control input" id="EMAILADDRESS" name="EMAILADDRESS" placeholder="Email Address"   autocomplete="off" value="<?php echo $appl->EMAILADDRESS;?>" /> 
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2 control-label">Featured Skills :</label> 
                    <div class="col-md-5">
                      <div id="dynamicInput">
                        <input value="<?php echo $appl->SKILL1;?>" class="form-control input" id="SKILL1" type="text" name="SKILL1"/>
                      </div>
                      <input type="button" value="Add Skills" onClick="addInput('dynamicInput');" class=""/>
                    </div>
                </div>
              </div><br><br>
              <script>
              var maxInputs = 3; // set the maximum number of input fields
              var inputsCount = 1; // set the current number of input fields

              function addInput(containerId) {
                if (inputsCount >= maxInputs) {
                  alert("You can only add up to " + maxInputs + " skills.");
                  return;
                }

                var container = document.getElementById(containerId);
                var input = document.createElement("input");

                input.type = "text";
                input.name = "SKILL" + (inputsCount + 1);
                input.id = "SKILL" + (inputsCount + 1); // set the id based on the current count
                input.className = "form-control input";
                input.maxLength = 50; // set the maximum length to 50 characters

                if (inputsCount == 1 && "<?php echo $appl->SKILL2;?>" !== "") {
                  input.value = "<?php echo $appl->SKILL2;?>"; // retrieve the value of SKILL2
                } 
                else if (inputsCount == 2 && "<?php echo $appl->SKILL3;?>" !== "") {
                  input.value = "<?php echo $appl->SKILL3;?>"; // retrieve the value of SKILL3
                }
                container.appendChild(input);
                inputsCount++;
              }
              // Execute the code once the page has finished loading
              window.onload = function() {
                // Check if SKILL2 and SKILL3 have values and add the input fields
                if ("<?php echo $appl->SKILL2;?>" !== "") {
                  addInput("dynamicInput");
                }
                if ("<?php echo $appl->SKILL3;?>" !== "") {
                  addInput("dynamicInput");
                }
              }
              </script>
              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2 control-label" for=
                  "submit"></label>
                  <div class="col-md-8">
                     <button class="btn btn-primary btn-sm" name="submit" type="submit" ><span class="fa fa-save"></span>&nbsp;Save</button>
                    </div>
                </div>
              </div><br><br>
      </div>  
</form>