<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPSA Form</title>
    <link rel="icon" type="image" href="{{asset('img/Logo-Up.png')}}" />
    
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>

    <div class="main">

        <div class="container">
            <h2>Universitas Pertamina Student Exchange - INBOUND</h2>
            <form method="POST" id="signup-form" class="signup-form" action="{{ route('submit') }}">

                @csrf
 
                <!-- STEP1 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="username" class="form-label">Name in Full(as appears on passport)</label>
                            <input type="text" name="name" placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Nationality</label>
                            <input type="text" name="nationality" placeholder="Nationality" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Date of Birth</label>
                            <input type="Date" name="date_of_birth" id="" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Passport Number</label>
                            <input type="text" name="passport_number" id="" placeholder="Passport Number" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Issuing Country</label>
                            <input type="text" name="issuing_country" id="" placeholder="Issuing Country" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Date of Issue</label>
                            <input type="Date" name="date_of_issue" id="" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Date of Expiry</label>
                            <input type="Date" name="date_of_expiry" id="" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Blood Type</label>
                            <input type="text" name="blood_type" id="" placeholder="A|B|AB|O" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Maritial Status</label>
                            <input type="text" name="marital_status" id="" placeholder="Maritial Status" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Permanent/Home Address</label>
                            <input type="textarea" name="address" id="" placeholder="Address" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">City</label>
                            <input type="text" name="city" id="" placeholder="City" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Poztal/ Zip Code</label>
                            <input type="text" name="postal_code" id="" placeholder="Poztal/Zip Code" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Province/State</label>
                            <input type="text" name="province" id="" placeholder="Province" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Country</label>
                            <input type="text" name="country" id="" placeholder="Country" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Phone </label>
                            <input type="text" name="phone" id="" placeholder="+62xx-xx" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Mobile</label>
                            <input type="text" name="mobile" id="" placeholder="+62xx-xx" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="Email" id="" placeholder="example@example.com" />
                        </div>
                    </div>
                    
                    <br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    
                    <div class="fieldset-footer">
                        <span>Step 1 of 8 | Personal Details</span>
                    </div>
                </fieldset>

                  <!-- STEP2 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="" class="form-label">Name of Institution</label>
                            <input type="text" name="institution" id="" placeholder="Name of Institution" />
                        </div>
                   
                        <div class="form-group">
                            <label for="" class="form-label">Address</label>
                            <input type="text" name="institution_address" id="" placeholder="Address of Institution" />
                        </div>
                   
                        <div class="form-group">
                            <label for="" class="form-label">Phone</label>
                            <input type="text" name="institution_phone" id="" placeholder="Phone Number of Institution" />
                        </div>
                   
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="institution_email" id="" placeholder="Email of Institution" />
                        </div>
                   
                        <div class="form-group">
                            <label for="" class="form-label">Address</label>
                            <input type="text" name="institution_email" id="" placeholder="Address of Institution" />
                        </div>
                   
                        <div class="form-group">
                            <label for="" class="form-label">Website</label>
                            <input type="link" name="institution_web" id="" placeholder="Website of Institution" />
                        </div>
                   
                        <div class="form-group">
                            <label for="" class="form-label">Faculty/Department</label>
                            <input type="text" name="faculty_dept" id="" placeholder="Your Faculty/Department" />
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Starting Year in University</label>
                            <div class="form-date-item">
                              <select id="expiry_year" name="start_year"></select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Cumulative GPA</label>
                            <input type="text" name="gpa" id="" placeholder="GPA" />
                        </div>
                    </div>

                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="fieldset-footer">
                        <span>Step 2 of 8 | Home Institution</span>
                    </div>
                </fieldset>


              <!-- STEP3 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                            <div class="form-radio">
                                <label for="" class="form-label">Academic Duration</label>
                                <div >
                                    <input type="radio" name="duration" value="Semester I (Aug-Jan)" required="" value="{{ old('Semester I (Aug-Jan)') }}" />
                                    <label for="male">Semester I (Aug-Jan)</label>

                                    <input type="radio" name="duration" value="Semester II (Feb-Jun)" required="" value="{{ old('Semester II (Feb-Jun)') }}" />
                                    <label for="female">Semester II (Feb-Jun)</label> 
                                </div>                            
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Academic Year</label>
                                <input type="text" name="" id="" name="year1" placeholder="Academic Year. Ex: 2019 " /><br>
                                <input type="text" name="" id="" name="year2" placeholder="Academic Year. Ex: 2020 " />
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Faculty</label>
                                <input type="text" name="faculty" id="faculty" placeholder="Select Faculty in Universitas Pertamina " />
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Department</label>
                                <input type="text" name="department" id="" placeholder="Select Department in Universitas Pertamina " />
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Spesific Study Period</label>
                                <input type="text" name="study_period" id="" placeholder="Study Period in Universitas Pertamina(in months) " />
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Start Date</label>
                                <input type="Date" name="start_date" id="" placeholder="Select Department in Universitas Pertamina " />
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="form-label">End Date</label>
                                <input type="Date" name="end_date" id="" placeholder="Select Department in Universitas Pertamina " />
                            </div>

                            <div style="padding-left: 50px;">
                                <h4>Please specify course you would like to take at Universitas Pertamina </h4>
                            </div> 

                            <div class="form-group">
                                <label for="" class="form-label"></label>
                                <input type="text" name="course_1" id="" placeholder="course 1 " />
                                <input type="text" name="credit_1" id="" placeholder="Credit 1 " />
                            </div> 

                            <div class="form-group">
                                <label for="" class="form-label"></label>
                                <input type="text" name="course_2" id="" placeholder="course 2 " />
                                <input type="text" name="credit_2" id="" placeholder="Credit 2 " />
                            </div> 

                            <div class="form-group">
                                <label for="" class="form-label"></label>
                                <input type="text" name="course_3" id="" placeholder="course 3 " />
                                <input type="text" name="credit_3" id="" placeholder="Credit 3 " />
                            </div> 

                            <div class="form-group">
                                <label for="" class="form-label"></label>
                                <input type="text" name="course_4" id="" placeholder="course 4 " />
                                <input type="text" name="credit_4" id="" placeholder="Credit 4 " />
                            </div> 

                            <div class="form-group">
                                <label for="" class="form-label"></label>
                                <input type="text" name="course_5" id="" placeholder="course 5 " />
                                <input type="text" name="credit_5" id="" placeholder="Credit 5 " />
                            </div> 

                            <div class="form-group">
                                <label for="" class="form-label"></label>
                                <input type="text" name="course_6" id="" placeholder="course 6 " />
                                <input type="text" name="credit_6" id="" placeholder="Credit 6 " />
                            </div> 

                            <div class="form-group">
                                <label for="" class="form-label"></label>
                                <input type="text" name="course_7" id="" placeholder="course 7 " />
                                <input type="text" name="credit_7" id="" placeholder="Credit 7 " />
                            </div> 
                        </div>

                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                 
                    <div class="fieldset-footer">
                        <span>Step 3 of 9 | Proposed Study at Universitas Pertamina</span>
                    </div>
                </fieldset>


                <!-- STEP4 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <!-- TOEFL -->
                        <div class="form-group">
                            <label for="" class="form-label">TOEFL</label>
                            <input type="text" name="score_toefl" id="" placeholder="TOEFL SCORE" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="text" name="place_toefl" id="" placeholder="Name of Test Center" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="Date" name="date_toefl" id="" placeholder="" />
                        </div>

                        <!-- IELTS -->
                       <div class="form-group">
                            <label for="" class="form-label">IELTS</label>
                            <input type="text" name="score_ielts" id="" placeholder="IELTS SCORE" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="text" name="place_ielts" id="" placeholder="Name of Test Center" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="Date" name="date_ielts" id="" placeholder="" />
                        </div>
                        
                        <!-- OTHERS -->
                       <div class="form-group">
                            <label for="" class="form-label">OTHERS TEST(IF NOT TOEFL & IELTS)</label>
                            <input type="text" name="others" id="" placeholder="Name of the English test" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="text" name="score_others" id="" placeholder="Test Score" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="text" name="place_others" id="" placeholder="Name of Test Center" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="Date" name="date_others" id="" placeholder="" />
                        </div>

                    </div>

                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
               

                    <div class="fieldset-footer">
                        <span>Step 4 of 8 | English Test Result (if English isn't your first language)</span>
                    </div>
                </fieldset>

                <!-- STEP5 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                            <div class="form-group">
                                <label for="" class="form-label">Health Insurance Name</label>
                                <input type="text" name="insurance" id="" placeholder="Health Insurance Name " />
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Validity</label>
                                <input type="Date" name="valid_date" id="" placeholder="Select Faculty in Universitas Pertamina " />
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Cover</label>
                                <input type="textarea" name="cover" id="" placeholder="Coverage Health" />
                            </div>
                            
                    <div class="fieldset-footer">
                        <span>Step 5 of 8 | Insurance during Study at Universitas Pertamina</span>
                    </div>
                </fieldset>


                <!-- STEP6 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-radio">
                            <label for="" class="form-label">Do you need help with your accomodation in Indonesia?</label>
                            <div class="form-radio-item">
                                <input type="radio" name="opt_acc" value="YES" id="male" checked="checked" />
                                <label for="male">Yes</label>

                                <input type="radio" name="opt_acc" value="NO" id="female" />
                                <label for="female">No</label>
                            </div>
                                <h5>If choose yes, student agree to the accomodation prepared by International Office(Skip the answer below)</h5>
                        </div>

                        <div class="form-group">
                            <label for="username" class="form-label">If choose no, please state where you plan to stay in Indonesia</label>
                            <input type="text" name="address_acc" id="username" placeholder="Address" />
                        </div>

                       <div class="form-group">
                            <label for="username" class="form-label">Contact Person</label>
                            <input type="text" name="cp_acc" id="username" placeholder="Name & Phone number" />
                        </div>
                    </div>

                    <div class="fieldset-footer">
                        <span>Step 6 of 8 | Accomodation Arrangement </span>
                    </div>
                </fieldset>

                <!-- STEP7 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="" class="form-label">Full name(person to contact when emergency)</label>
                            <input type="text" name="emergency_name" id="" placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Relationship</label>
                            <input type="text" name="relationship" id="" placeholder="Relationship" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Address</label>
                            <input type="text" name="emergency_address" id="" placeholder="Address" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Phone Number</label>
                            <input type="text" name="emergency_phone" id="" placeholder="Phone Number" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Mobile</label>
                            <input type="text" name="emergency_mobile" id="" placeholder="Mobile" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="emergency_email" id="" placeholder="Email" />
                        </div>
                    </div>
                    <br><br>

                    <div class="fieldset-footer">
                        <span>Step 7 of 8 | Contact of Emergency</span>
                    </div>
                </fieldset>

                                <!-- STEP8 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label><b>Certificate of Health:</b></label>
                            <br>
                            <input type="file" name="certificate_of_health" required>
                        </div>
                        <div class="form-group">
                            <label><b>Financial Guarantee Form:</b></label>
                            <br>
                            <input type="file" name="financial_guarantee" required>
                        </div>
                        <div class="form-group">
                            <label><b>Statement of Legality Form:</b></label>
                            <br>
                            <input type="file" name="statement_of_legality" required>
                        </div>
                        <div class="form-group">
                            <label><b>Certificate of Enrollment:</b></label>
                            <br>
                            <input type="file" name="certificate_of_enrollment" required>
                        </div>
                        <div class="form-group">
                            <label><b>Nomination Letter:</b></label>
                            <br>
                            <input type="file" name="nomination_letter" required>
                        </div>
                        <div class="form-group">
                            <label><b>Transcript:</b></label>
                            <br>
                            <input type="file" name="Transcript" required>
                        </div>
                        <div class="form-group">
                            <label><b>Passport Photo:</b></label>
                            <br>
                            <input type="file" name="photo" required>
                        </div>
                        <div class="form-group">
                            <label><b>Statement of Purpose:</b></label>
                            <br>
                            <input type="file" name="statement_of_purpose" required>
                        </div>
                        <div class="form-group">
                            <label><b>Bank Statement:</b></label>
                            <br>
                            <input type="file" name="bank_statement" required>
                        </div>
                        <div class="form-group">
                            <label><b>CV/Resume:</b></label>
                            <br>
                            <input type="file" name="cv" required>
                        </div>
                        <div class="form-group">
                            <label><b>Passport:</b></label>
                            <br>
                            <input type="file" name="passport" required>
                        </div>
                        <div class="form-group">
                            <label><b>Student ID Card:</b></label>
                            <br>
                            <input type="file" name="student_id" required>
                        </div>
                        
                    </div>
                    
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="fieldset-footer">
                        <span>Step 8 of 8 | Upload Files</span>
                    </div>
                </fieldset>

            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{asset('vendor/minimalist-picker/dobpicker.js')}}"></script>
    <script src="{{asset('vendor/jquery.pwstrength/jquery.pwstrength.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>