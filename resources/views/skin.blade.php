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
            <h2>Universitas Pertamina Student Exchange - OUTBOUND</h2>
            <form method="POST" id="signup-form" class="signup-form" action="{{ route('submit.out') }}">

                @csrf

                <!-- STEP1 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="username" class="form-label">Student ID Number</label>
                            <input type="text" name="student_number" placeholder="Student ID Number" />
                        </div>
                        <div class="form-group">
                            <label for="username" class="form-label">Name in Full(as appears on passport)</label>
                            <input type="text" name="name" placeholder="Name" />
                        </div>
                        <div class="form-radio">
                            <label for="" class="form-label">Gender</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" value="Male" id="male" checked="checked" />
                                <label for="male">Male</label>

                                <input type="radio" name="gender" value="Female" id="female" />
                                <label for="female">Female</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Place of Birth</label>
                            <input type="text" name="place_of_birth" placeholder="Place of birth" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Date of Birth</label>
                            <input type="Date" name="date_of_birth" id="" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Nationality</label>
                            <input type="text" name="nationality" placeholder="Nationality" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Religion</label>
                            <input type="name" name="religion" id="" placeholder="Religion" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Passport Number</label>
                            <input type="text" name="passport_number" id="" placeholder="Passport Number" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Passport Expiration</label>
                            <input type="Date" name="expire_of_passport" id="" placeholder="" />
                        </div>
                    </div>
                    
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    
                    <div class="fieldset-footer">
                        <span>Step 1 of 8 | Personal Information</span>
                    </div>
                </fieldset>


                  <!-- STEP2 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" id="" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Mobile</label>
                            <input type="email" name="mobile_number" id="" placeholder="Your Phone number" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Telephone</label>
                            <input type="text" name="telphone" id="" placeholder="Your Phone number" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Mailing Address</label>
                            <input type="link" name="address" id="" placeholder="Your Address" />
                        </div>
                    <div class="fieldset-footer">
                        <span>Step 2 of 8 | Contact Information</span>
                    </div>
                </fieldset>

                <!-- STEP3 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                            <div>
                                <label for="" class="form-label">Type of Program</label>
                            </div>

                            <div class="form-group">
                                <input type="radio" name="program" value="Student Exchange"/><b>Student Exchanges</b>
                            </div>

                            <div class="form-group">
                                <input type="radio" name="program" value="Internship"/><b>Internship</b>
                            </div>

                            <div class="form-group">
                                <input type="radio" name="program" value="Summer Program"/><b>Summer Program</b>
                            </div>

                            
                            <div>
                                <label for="" class="form-label">Program Period</label>
                            </div>

                            <div class="form-group">
                                <input type="radio" name="period" value="1-2 months"/><b>1-2 months</b>
                            </div>

                            <div class="form-group">
                                <input type="radio" name="period" value="1 semester(4-6 months)"/><b>1 Semester(4-6months)</b>
                            </div>

                            <div class="form-group">
                                <input type="radio" name="period" value="2 semester(up to 12 months)" /><b>2 Semester (up to 12 months)</b>
                            </div>



                            <div class="form-group">
                                <label for="" class="form-label">Host University</label>
                                <input type="name" name="host_univ" id="" placeholder="Host University" />
                            </div>

                            <div style="padding-left: 50px;">
                                <h4>Please specify courses you would like to take at Host University: </h4>
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
                        <br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br>
                 
                    <div class="fieldset-footer">
                        <span>Step 3 of 9 | Applicant Details</span>
                    </div>
                </fieldset>


                <!-- STEP4 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="username" class="form-label">Department</label>
                            <input type="text" name="department" placeholder="Your Department" />
                        </div>
                        <div class="form-group">
                            <label for="username" class="form-label">Year/Semester</label>
                            <input type="text" name="year_sem" placeholder="ex: 2019" />
                        </div>
                        <div class="form-group">
                            <label for="username" class="form-label">IPS/IPK</label>
                            <input type="text" name="gpa" placeholder="ex: 3.48" />
                        </div>
                        <div class="form-group">
                            <label for="username" class="form-label">TOEFL/IELTS Score</label>
                            <input type="text" name="toefl_ielts" placeholder="Score of TOEFL/IELTS" />
                        </div>
                        <div class="form-group">
                            <label for="username" class="form-label">Test Date</label>
                            <input type="date" name="date_toefl_ielts" placeholder="" />
                        </div>
                    </div>
                    <div class="fieldset-footer">
                        <span>Step 4 of 8 | Academic Information</span>
                    </div>
                </fieldset>

                <!-- STEP5 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                            <!-- Org 1 -->
                        <div class="form-group">
                            <label for="" class="form-label">Name of Organization(1)</label>
                            <input type="text" name="org_1" id="" placeholder="Organization" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="text" name="year_org_1" id="" placeholder="Year" />
                        </div>
                            <!-- Org 2 -->
                        <div class="form-group">
                            <label for="" class="form-label">Name of Organization(2)</label>
                            <input type="text" name="org_2" id="" placeholder="Organization" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="text" name="year_org_2" id="" placeholder="Year" />
                        </div>
                            <!-- Org 1 -->
                        <div class="form-group">
                            <label for="" class="form-label">Name of Organization(3)</label>
                            <input type="text" name="org_3" id="" placeholder="Organization" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="text" name="year_org_3" id="" placeholder="Year" />
                        </div>
                    </div>
                            
                    <div class="fieldset-footer">
                        <span>Step 5 of 8 | Membership and Organization Activities</span>
                    </div>
                </fieldset>

                <!-- STEP6 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <!-- Award 1 -->
                        <div class="form-group">
                            <label for="" class="form-label">Achievment / Award(1)</label>
                            <input type="text" name="award_1" id="" placeholder="Name of Award" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="text" name="institut_1" id="" placeholder="Name of Institution" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="Date" name="year_award_1" id="" placeholder="Year" />
                        </div>
                        <!-- Award 2 -->
                        <div class="form-group">
                            <label for="" class="form-label">Achievment / Award(2)</label>
                            <input type="text" name="award_2" id="" placeholder="Name of Award" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="text" name="institut_2" id="" placeholder="Name of Institution" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="Date" name="year_award_2" id="" placeholder="Year" />
                        </div>
                        <!-- Award 1 -->
                        <div class="form-group">
                            <label for="" class="form-label">Achievment / Award(3)</label>
                            <input type="text" name="award_3" id="" placeholder="Name of Award" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="text" name="institut_3" id="" placeholder="Name of Institution" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"></label>
                            <input type="Date" name="year_award_3" id="" placeholder="Year" />
                        </div>
                    </div>

                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    
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
                            <label for="" class="form-label">Full name</label>
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
                        <span>Step 7 of 9 | Parent/Guardian Contact</span>
                    </div>
                </fieldset>

                <!-- STEP8 -->
                 <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <textarea style="height: 300px; width: 700px; margin-left: 40px;" type="text" name="emergency_name" id="" placeholder="Purpose and Motivation Statement"></textarea>  
                        </div>
                    </div>

                    <div class="fieldset-footer">
                        <span>Step 8 of 9 | Purpose and Motivation Statement</span>
                    </div>
                </fieldset>



                <!-- STEP9 -->
                <h3>
                    <span class="title_text"></span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="your_avatar" class="form-label">Form Pernyataan Orang Tua</label>
                            <div class="form-file">
                                <input type="file" name="form_orang_tua" id="" class="custom-file-input" />
                                <span id='val'></span>
                                <span id='button'>Select File</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="your_avatar" class="form-label">Copy of Language Proficiency Certificate:</label>
                            <div class="form-file">
                                <input type="file" name="form_language" id="" class="custom-file-input" />
                                <span id='val'></span>
                                <span id='button'>Select File</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="your_avatar" class="form-label">Passport Photo:</label>
                            <div class="form-file">
                                <input type="file" name="photo" id="" class="custom-file-input" />
                                <span id='val'></span>
                                <span id='button'>Select File</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="your_avatar" class="form-label">Copy of Student ID Card (front&back):</label>
                            <div class="form-file">
                                <input type="file" name="copy_ktm" id="" class="custom-file-input" />
                                <span id='val'></span>
                                <span id='button'>Select File</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="your_avatar" class="form-label">Academic Transcript:</label>
                            <div class="form-file">
                                <input type="file" name="transcript" id="" class="custom-file-input" />
                                <span id='val'></span>
                                <span id='button'>Select File</span>
                            </div>
                        </div>



                    </div>

                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="fieldset-footer">
                        <span>Step 9 of 9 | Upload Files</span>
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