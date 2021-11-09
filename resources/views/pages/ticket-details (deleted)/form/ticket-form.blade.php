 
<form action="{{ URL::to('/ticket/insert-ticket') }}" method="post" class=" g-2" id="ticket_form" enctype="multipart/form-data"> 
    <input type="hidden" value="{{}}" name="ticketID" id="ticketID" maxlength="60">
    <div class="col-md-6 form-group">
        <label for="first_name" class="form-label required">First Name</label>
        <input type="text" value="" class="form-control" name="first_name" id="first_name" maxlength="60">
        <div id="validation_first_name" class="invalid-feedback"></div>
    </div>
    <div class="tab-content py-3">
        <div class="tab-pane fade show active" id="profile" role="tabpanel">
            <div class="row mb-2">
                <div class="col-md-6 form-group">
                    <label for="first_name" class="form-label required">First Name</label>
                    <input type="text" value="" class="form-control" name="first_name" id="first_name" maxlength="60">
                    <div id="validation_first_name" class="invalid-feedback"></div>
                </div>
                <div class="col-md-6 form-group">
                    <label for="middle_name" class="form-label">Middle Name</label>
                    <input type="text"  value="" class="form-control" name="middle_name" id="middle_name" maxlength="60" >
                    <div id="validation_middle_name" class="invalid-feedback"></div>
                </div>  
            </div>
            <div class="row mb-2">
                <div class="col-md-6 form-group">
                    <label for="last_name" class="form-label required">Last Name</label>
                    <input type="text" value="" class="form-control" name="last_name" id="last_name" maxlength="60" >
                    <div id="validation_last_name" class="invalid-feedback"></div>
                </div>
                <div class="col-md-6 form-group">
                    <label for="suffix" class="form-label">Suffix</label>
                    <input type="text" class="form-control" name="suffix" id="suffix" maxlength="3" >
                    <div id="validation_suffix" class="invalid-feedback"></div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-md-8">
                    <div class="row mb-2">
                        <div class="col-md-6 form-group">
                            <label for="birth_date" class="form-label required">Birthdate</label>
                            <input type="date"  value="" class="form-control" name="birth_date" id="birth_date" maxlength="10" >
                            <div id="validation_birth_date" class="invalid-feedback"></div>
                        </div> 
                        <div class="col-md-6 form-group">
                            <label for="gender" class="form-label required">Gender</label>
                            <select class="form-select" name="gender" id="gender"  >
                                <option ></option>    
                            </select>
                            <div id="validation_gender" class="invalid-feedback"></div>
                        </div> 
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6 form-group">
                            <label for="civil_status" class="form-label required">Civil Status</label>
                            <select class="form-select"  name="civil_status" id="civil_status"  >
                                <option ></option> 
                                 
                            </select>
                            <div id="validation_civil_status" class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="religion" class="form-label required">Religion</label>
                            <select class="form-select" name="religion" id="religion"  >
                                <option ></option> 
                               
                            </select>
                            <div id="validation_religion" class="invalid-feedback"></div>
                        </div> 
                    </div>
                </div>
                <div class="col-md-4"> 
                    <div class="imagearea">
                        <label for="file_profile" class="form-label required">Attach Profile Photo</label>  
                        <input type="file" class="sr-only invisible" id="file_profile" name="image" accept="image/*">
                        <div class="avatarimage" id="drop-area"> 
                            <img src="{{URL::asset('resources/customs/img/avatar/male.png')}}" alt="avatar"  id="avatarimage" />
                            <div class="buttons"> 
                                <center>
                                    <a class="col-6 btn  btn-sm  btn-upload"> <i class="fadeIn animated bx bx-upload bx-xs"></i> </a>
                                    <a class="col-6 btn  btn-sm  btn-camera"  data-bs-toggle="modal" data-bs-target="#cameraModal"> <i class="fadeIn animated bx bx-camera bx-xs"></i></a>    
                                </center>
                            </div>
                        </div> 
                    </div>
                    <div id="validation_file_profile" class="invalid-feedback"></div> 
                </div>
            </div>
            <div class="row mb-2 religion-other d-none">
                <div class="col-md-12 form-group">
                    <label for="religion_other" class="form-label required">Religion Other</label>
                    <input type="text" value="" class="form-control" name="religion_other" id="religion_other" maxlength="60">
                    <div id="validation_religion_other" class="invalid-feedback"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="address" role="tabpanel">
            <div class="row mb-2">
                <div class="col-md-6 form-group">
                    <label for="region" class="form-label required">Region</label>
                    <select class="form-select" name="region" id="region"  >
                        <option ></option> 
                        
                    </select>
                    <div id="validation_region" class="invalid-feedback"></div>
                </div>
                <div class="col-md-6 form-group">
                    <label for="province" class="form-label required">Province</label>
                    <select class="form-select" name="province" id="province"  >
                        <option ></option> 
                    </select>
                    <div id="validation_province" class="invalid-feedback"></div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6 form-group">
                    <label for="municipal" class="form-label required">Municipal</label>
                    <select class="form-select" name="municipal" id="municipal"  >
                        <option ></option> 
                    </select>
                    <div id="validation_municipal" class="invalid-feedback"></div>
                </div>
                <div class="col-md-6 form-group">
                    <label for="barangay" class="form-label required">Barangay</label>
                    <select class="form-select" name="barangay" id="barangay"  >
                        <option ></option> 
                    </select>
                    <div id="validation_barangay" class="invalid-feedback"></div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6 form-group">
                    <label for="street" class="form-label required">Street</label>
                    <input type="text"  value="" class="form-control" name="street" id="street" maxlength="100" >
                    <div id="validation_street" class="invalid-feedback"></div>
                </div>
                <div class="col-6">
                    <label for="unit" class="form-label">Address Unit</label>
                    <input type="text" class="form-control" name="unit" id="unit" maxlength="100" >
                    <div id="validation_unit" class="invalid-feedback"></div>
                </div>    
            </div>  
        </div>
        <div class="tab-pane fade" id="account" role="tabpanel">
            <div class="row mb-2">
                <div class="col-md-6 form-group">
                    <label for="user_name" class="form-label required">User Name</label>
                    <input type="text"  value=""  autocomplete="false" class="form-control" name="user_name" id="user_name" maxlength="60" >
                    <div id="validation_user_name" class="invalid-feedback"></div>
                </div>
                <div class="col-md-6 form-group">
                    <label for="user_pass" class="form-label required">Password</label>
                    <div class="input-group show-hide-password" id="show_hide_password">
                        <input type="password" value="" autocomplete="false" class="form-control border-end-0" name="user_pass" id="user_pass"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                        <div id="validation_user_pass" class="invalid-feedback"></div>
                    </div>
                </div>  

            </div>
            <div class="row mb-2">
                <div class="col-md-6 form-group">
                    <label for="contact_number" class="form-label required">Contact #</label>
                    <input type="text"  value="" class="form-control" name="contact_number" id="contact_number" maxlength="15" >
                    <div id="validation_contact_number" class="invalid-feedback"></div>
                </div>
                <div class="col-md-6 form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" maxlength="60" >
                    <div id="validation_email" class="invalid-feedback"></div>
                </div> 
            </div>  
        </div>
        <div class="tab-pane fade" id="others" role="tabpanel"> 
        </div>
    <div> 
</form>

 