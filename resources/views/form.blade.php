<!DOCTYPE html>
<html>
<head>
</script>
	<title>INBOUND Form UP-SA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<body>
		<div>
		@include('partials._messages')
		<form class="form-vertical" enctype="multipart/form-data" id="form-up-sa" method="POST" action="{{ route('submit') }}" >
		@include('partials._messages')
			
				@csrf
			<h6>Student Exchange Form – Universitas Pertamina</h6>
			
			<div class="pos">
				<img class="logo" src="{{asset('img/logo.png')}}">
			</div>
				<br>
			<div class="pos">
				<h4><b>STUDENT EXCHANGE PROGRAM</h4>
				<br>
				<h4>APPLICATION FORM</b></h4>
			</div>	
				<br>
			<div>
				<p>Please read The Guidelines of The Student Exchange Program prior to completing this form. Type or print in block letters in English.</p>
				
				
			@if (session('success'))
			<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					{!! session('success') !!}
			</div>
			@endif
				<h4><b>PERSONAL DETAILS</b></h4>

				<table>
				  <tr>
				    <td><b>Name in Full (as appears on passport) Mr./Mrs./Ms.</b><hr>
				    <input placeholder="Your Fullname" type="text" name="name" size="30" required="" value="{{ old('name') }}"/></td>
				  </tr>
				</table>
				  
				<table>
				  <tr>
				    <td><b>Nationality</b><hr>
				    	<input placeholder="Your Nationality" type="text" name="nationality" size="20" required="" value="{{ old('nationality') }}"/></td>
				    
				    <td width="635"><b>Place, Date of Birth (dd/mm/yy)</b><hr>
				    	<input placeholder="Date of Birth" type="text" name="date_of_birth" size="20" required="" value="{{ old('date_of_birth') }}"/></td>
				    </tr>
				   
				   <tr>
					<td><b>Passport Number</b><hr>
				    	<input placeholder="Your Passport Number" type="text" name="passport_number" size="20" required="" value="{{ old('passport_number') }}"/></td>
				    
				   	<td><b>Issuing Country</b><hr>
				    	<input placeholder="Your Issuing Country" type="text" name="issuing_country" size="20" required="" value="{{ old('issuing_country') }}"/></td>
				   </tr>

				   <tr>
				    <td><b>Date of Issue</b><hr>
				    	<input placeholder="Date of Issue" type="date" name="date_of_issue" size="20" required="" value="{{ old('date_of_issue') }}"/></td>
				    
				    <td><b>Date of Expiry</b><hr>
				    	<input placeholder="Date of Expiry" type="date" name="date_of_expiry" size="20" required="" value="{{ old('date_of_expiry') }}"/></td>
				   </tr>

				   <tr>
				    <td><b>Blood Type</b><hr>
				    	<input placeholder="Your Blood Type" type="text" name="blood_type" maxlength="2" required="" value="{{ old('blood_type') }}"/></td>
				    
				    <td><b>Marital Status</b><hr>
				    	<input placeholder="Your Marital Status" type="text" name="marital_status" size="20" required="" value="{{ old('marital_status') }}"/></td>
				   </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Permanent/Home Address</b><hr>
				    <input placeholder="Your Address" type="text" name="address" size="50" required="" value="{{ old('address') }}"/></td>
				  </tr>
				</table>
				
				<table>
				  <tr>
				    <td><b>City</b><hr>
				    <input placeholder="Your City" type="text" name="city" size="20" required="" value="{{ old('city') }}"/></td>
				    <td><b>Postal/ZIP Code</b><hr>
				    <input placeholder="ZIP Code" type="text" name="postal_code" size="20" required="" value="{{ old('postal_code') }}"/></td>
				  </tr>
				  
				  <tr>
				    <td><b>Province/State</b><hr>
				    <input placeholder="Your State" type="text" name="province" size="20" required="" value="{{ old('province') }}"/></td>
				    <td><b>Country</b><hr>
				    <input placeholder="Your Country" type="text" name="country" size="20" required="" value="{{ old('country') }}"/></td>
				  </tr>
				  
				  <tr>
				    <td><b>Phone</b><hr>
				    <input placeholder="Phone Number" type="text" name="phone" size="20" required="" value="{{ old('phone') }}"/></td>
				    <td><b>Mobile</b><hr>
				    <input placeholder="Mobile Number" type="text" name="mobile" size="20" required="" value="{{ old('mobile') }}"/></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Email</b><hr>
				    <input placeholder="Your Email Address" type="email" name="email" size="50" required="" value="{{ old('email') }}"/></td>
				  </tr>
				</table>

				

			</div>
			<br><br>

			<div>
				<h4><b>HOME INSTITUTION</b></h4>
			
				<table>
				  <tr>
				    <td><b>Name of Institution</b><hr>
				    <input placeholder="Your Institution" type="instance" name="institution" size="50" required="" value="{{ old('institution') }}"/></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Address</b><hr>
				    <input placeholder="Your Address" type="text" name="institution_address" size="50" required="" value="{{ old('institution_address') }}"/></td>
				  </tr>
				</table>

				<table>
					<tr>
					    <td><b>Phone</b><hr>
					    <input placeholder="Phone Number" type="text" name="institution_phone" size="20" required="" value="{{ old('institution_phone') }}"/></td>
					    
					    <td><b>Email</b><hr>
					    <input placeholder="Your Email Address" type="email" name="institution_email" size="20" required="" value="{{ old('institution_email') }}"/></td>
				  	</tr>
				</table>

				<table>
				  <tr>
				    <td><b>Website</b><hr>
				    <input placeholder="Your Instance's Website" type="text" name="institution_web" size="50" required="" value="{{ old('institution_web') }}"/></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Faculty/Department</b><hr>
				    <input placeholder="Faculty" type="text" name="faculty_dept" size="50" required="" value="{{ old('faculty_dept') }}"/></td>
				  </tr>
				</table>

				<table>
					<tr>
					    <td><b>Starting Year in University</b><hr>
					    <input placeholder="Start Year" type="text" name="start_year" size="20" required="" value="{{ old('start_year') }}"/></td>
					
					    <td><b>Cumulative GPA</b><hr>
					    <input placeholder="Your GPA" type="text" name="gpa" size="20" required="" value="{{ old('gpa') }}"/></td>
				  	</tr>
				</table>
			</div>

			<br><br>

			<div>
				<h4><b>PROPOSED STUDY AT UNIVERSITAS PERTAMINA (UP)</b></h4>
				
				<table>
					<tr>
						<td><input type="radio" name="duration" value="Semester I (Aug-Jan)" required="" value="{{ old('Semester I (Aug-Jan)') }}"/>
						<b>Semester I (Aug-Jan)</b><hr>
						
						<input type="radio" name="duration" value="Semester II (Feb-Jun)" required="" value="{{ old('Semester II (Feb-Jun)') }}"/>
						<b>Semester II (Feb-Jun)</b>

						<h5><b>Academic Year 20 <input type="text" name="year1" maxlength="2" placeholder="____" size="1" required="" value="{{ old('year1') }}"/>/20 <input type="text" name="year2" maxlength="2"  placeholder="____" required="" value="{{ old('year2') }}"/></b></h5></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><b>Faculty</b><hr>
					    <input placeholder="Your Faculty" type="text" name="faculty" size="20" required="" value="{{ old('faculty') }}"/></td>
					    
					    <td><b>Department</b><hr>
					    <input placeholder="Your Department" type="text" name="department" size="20" required="" value="{{ old('department') }}"/></td>
					</tr>
				</table>

				<table>
					<tr>
						<td width="634"><b>Spesific Study Period</b><hr>
					    <input placeholder="Spesific Study Period" type="text" name="study_period" size="20" required="" value="{{ old('study_period') }}"/></td>
					    
					    <td><b>Start Date</b><hr>
					    <input placeholder="Start Date" type="date" name="start_date" required="" value="{{ old('start_date') }}"/></td>
					    
					    <td><b>End Date</b><hr>
					    <input placeholder="End Date" type="date" name="end_date" required="" value="{{ old('end_date') }}"/></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><h5><b>Please specify courses you would like to take at Universitas Pertamina:</b></h5></td>
					</tr>
				</table>

				<table>
					<tr>
						<td class="tr_no"><h6><b>No.</b></h6></td>
						<td class="tr_nos"><h6><b>Course Title</b></h6></td>
						<td><h6><b>Credit</b></h6></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><h6><b>1.</b></h6></td>
						<td><input type="text" name="course_1" placeholder="Course" required="" value="{{ old('course_1') }}"></td>
						<td><input type="text" name="credit_1" placeholder="Credit" required="" value="{{ old('credit_1') }}"></td>
					</tr>
				
				</table>

				<table>
					<tr>
						<td><h6><b>2.</b></h6></td>
						<td><input type="text" name="course_2" placeholder="Course"></td>
						<td><input type="text" name="credit_2" placeholder="Credit"></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><h6><b>3.</b></h6></td>
						<td><input type="text" name="course_3" placeholder="Course"></td>
						<td><input type="text" name="credit_3" placeholder="Credit"></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><h6><b>4.</b></h6></td>
						<td><input type="text" name="course_4" placeholder="Course"></td>
						<td><input type="text" name="credit_4" placeholder="Credit"></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><h6><b>5.</b></h6></td>
						<td><input type="text" name="course_5" placeholder="Course"></td>
						<td><input type="text" name="credit_5" placeholder="Credit"></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><h6><b>6.</b></h6></td>
						<td><input type="text" name="course_6" placeholder="Course"></td>
						<td><input type="text" name="credit_6" placeholder="Credit"></td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td><h6><b>7.</b></h6></td>
						<td><input type="text" name="course_7" placeholder="Course"></td>
						<td><input type="text" name="credit_7" placeholder="Credit"></td>
					</tr>
				</table>
			
			</div>

			<br><br>

			<div>
				<h4><b>ENGLISH TEST RESULT(if English is not your first language)</b></h4>	

				<table>
				  <tr>
				    <td><b>Test</b></td>
				    <td><b>Score</b></td>
				    <td><b>Test Center</b></td>
				    <td><b>Date Tested</b></td>
				  </tr>

					<tr>
					   <td><input type="text" name="toefl" value="TOEFL" class="test"></td>
					   <td><input type="text" name="score_toefl" value="{{ old('score_toefl') }}" size="20"/></td>
					   <td><input type="name" name="place_toefl" value="{{ old('place_toefl') }}" size="50"/></td>
					   <td><input type="date" name="date_toefl" value="{{ old('date_toefl') }}" size="20"/></td>
					</tr>

					<tr>
					   <td><input type="text" name="ielts" value="IELTS" class="test"></td>
					   <td><input type="text" name="score_ielts" value="{{ old('score_ielts') }}" size="20"/></td>
					   <td><input type="name" name="place_ielts" value="{{ old('place_ielts') }}" size="50"/></td>
					   <td><input type="date" name="date_ielts" value="{{ old('date_ielts') }}" size="20"/></td>
					</tr>

					<tr>
					   <td><input type="text" name="others" size="20" placeholder="OTHERS" /></td>
					   <td><input type="text" name="score_others" value="{{ old('score_others') }}" size="20"/></td>
					   <td><input type="name" name="place_others" value="{{ old('place_others') }}" size="50"/></td>
					   <td><input type="date" name="date_others" value="{{ old('date_others') }}" size="20"/></td>
					</tr>
				</table>
			</div>

			<br><br>

			<div>
				<h4><b>INSURANCE DURING STUDY AT UNIVERSITAS PERTAMINA (UP)</b></h4>	

				<table>
					<tr>
						<td><b>Health Insurance Name</b><hr>
					    <input placeholder="Your Insurance Name" type="text" name="insurance" size="20" required="" value="{{ old('insurance') }}"/></td>
					</tr>
				</table>
				<table>
					<tr>
					    <td><b>Validity</b><hr>
					    <input placeholder="Valid date until" type="date" name="valid_date" size="20" required="" value="{{ old('valid_date') }}"/></td>
					    <td width="725"><b>Cover</b><hr>
					    <input type="text" name="cover" value="{{ old('cover') }}" size="20"/></td>
					</tr>
				</table>			
			</div>

			<br><br>

				
			<div>
				<h4><b>Accomodation Arrangement</b></h4>

				<table>
					<tr>
						<td><b>Do you need help with your accommodation in Indonesia?</b></td>
					</tr>
				</table>

				<table>

					<tr>
					    <td><b>If yes, student agree to the accommodation prepared by International Office</b></td>
						<td><input  type="radio" name="opt_acc" size="20" value="YES"/> YES</td>
					</tr>

					<tr>
						<td><b>If no, please state where you plan to stay in Indonesia:</b></td>
						<td><input type="radio" name="opt_acc" size="20" value="NO"/> NO</td>
					</tr>
						<td><b>Address</b><hr>
							<input placeholder="Address" type="text" name="address_acc" size="50" value="{{ old('address_acc') }}"></td>
						<td><b>Contact Person (Name/Phone)</b><hr>
							<input placeholder="Name & Phone" type="text" name="cp_acc" size="25" value="{{ old('cp_acc') }}"></td>

				</table>


			</div>


			<br><br>

			<div>
				<h4><b>CONTACT OF EMERGENCY</b></h4>	

				<table>
					<tr>
					    <td><b>Full Name</b><hr>
					    <input placeholder="Name" type="text" name="emergency_name" size="20" required="" value="{{ old('emergency_name') }}"/></td>
					    <td><b>Relationship</b><hr>
					    <input placeholder="Relationship" type="text" name="relationship" size="20" required="" value="{{ old('relationship') }}"/></td>
					</tr>
				</table>
	  				
	  			<table>
	  				<tr>
					    <td><b>Address</b><hr>
					    <input placeholder="Address" type="text" name="emergency_address" size="50" required="" value="{{ old('emergency_address') }}"/></td>
				  	</tr>		
				</table>

				<table>	
				  	<tr>
					    <td><b>Phone</b><hr>
					    <input placeholder="Phone" type="text" name="emergency_phone" size="20" required="" value="{{ old('emergency_phone') }}"/></td>
					    
					    <td><b>Mobile</b><hr>
					    <input placeholder="Mobile" type="text" name="emergency_mobile" size="20" required="" value="{{ old('emergency_mobile') }}"/></td>
						
						<td><b>Email</b><hr>
					    <input placeholder="Email" type="email" name="emergency_email" size="20" required="" value="{{ old('emergency_email') }}"/></td>
					</tr>
				</table>			
			</div>

			<br><br>

			<div class="panel panel-default">
<<<<<<< HEAD
				<div class="panel-heading">
					<h4><b>UPLOAD FILES</b></h4>
						<div class="alert alert-info">
								Upload all files with .pdf format, except photo. The photo file only allow .jpeg, .jpg, or .png format.
						</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="coloumn">
							<div class="form-group {{ !$errors->has('certificate_of_health') ?: 'has-error' }}" id="left">
									<label><b>Certificate of Health:</b </label>
									<br>
									<input type="file" name="certificate_of_health" required>
									<span class="help-block text-danger">{{ $errors->first('certificate_of_health') }}</span>
							</div>
							<br>
							<div class="form-group {{ !$errors->has('financial_guarantee') ?: 'has-error' }}">
									<label><b>Financial Guarantee Form:</b></label>
=======
					<div class="panel-heading">
							<h4><b>UPLOAD FILES</b></h4>
							<div class="alert alert-info">
									Upload all files with .pdf format, except photo. <br> The photo file only allow .jpeg, .jpg, or .png format. <br>
									Maximum file size is 2 MB.
							</div>
					</div>

				<div class="form-group">
					<div class="row">
							<div class="coloumn">
									<div class="form-group {{ !$errors->has('certificate_of_health') ?: 'has-error' }}" id="left">
											<label><b>Certificate of Health:</b> </label>
											<br>
											<input type="file" name="certificate_of_health" required>
											<span class="help-block text-danger">{{ $errors->first('certificate_of_health') }}</span>
									</div>
									<br>
									<div class="form-group {{ !$errors->has('financial_guarantee') ?: 'has-error' }}">
											<label><b>Financial Guarantee Form:</b></label>
											<br>
											<input type="file" name="financial_guarantee" required>
											<span class="help-block text-danger">{{ $errors->first('financial_guarantee') }}</span>
									</div>
									<br>
									<div class="form-group {{ !$errors->has('statement_of_legality') ?: 'has-error' }}">
											<label><b>Statement of Legality Form:</b></label>
											<br>
											<input type="file" name="statement_of_legality" required>
											<span class="help-block text-danger">{{ $errors->first('statement_of_legality') }}</span>
									</div>
									<br>
									<div class="form-group {{ !$errors->has('certificate_of_enrollment') ?: 'has-error' }}">
											<label><b>Certificate of Enrollment:</b></label>
											<br>
											<input type="file" name="certificate_of_enrollment" required>
											<span class="help-block text-danger">{{ $errors->first('certificate_of_enrollment') }}</span>
									</div>
									<br>
									<div class="form-group {{ !$errors->has('nomination_letter') ?: 'has-error' }}">
											<label><b>Nomination Letter:</b></label>
											<br>
											<input type="file" name="nomination_letter" required>
											<span class="help-block text-danger">{{ $errors->first('nomination_letter') }}</span>
									</div>
									<br>
									<div class="form-group {{ !$errors->has('transcript') ?: 'has-error' }}">
											<label><b>Transcript:</b></label>
											<br>
											<input type="file" name="transcript" required>
											<span class="help-block text-danger">{{ $errors->first('transcript') }}</span>
									</div>
							</div>
								

							<div class="coloumn">
								<div class="form-group {{ !$errors->has('photo') ?: 'has-error' }}" id="right">
											<label><b>Passport Photo:</b></label>
											<br>
											<input type="file" name="photo" required>
											<span class="help-block text-danger">{{ $errors->first('photo') }}</span>
									</div>
>>>>>>> 7fae5380dadefa13fdb1d219dccd7bc1b5834745
									<br>
									<input type="file" name="financial_guarantee" required>
									<span class="help-block text-danger">{{ $errors->first('financial_guarantee') }}</span>
							</div>
							<br>
							<div class="form-group {{ !$errors->has('statement_of_legality') ?: 'has-error' }}">
									<label><b>Statement of Legality Form:</b></label>
									<br>
									<input type="file" name="statement_of_legality" required>
									<span class="help-block text-danger">{{ $errors->first('statement_of_legality') }}</span>
							</div>
							<br>
							<div class="form-group {{ !$errors->has('certificate_of_enrollment') ?: 'has-error' }}">
									<label><b>Certificate of Enrollment:</b></label>
									<br>
									<input type="file" name="certificate_of_enrollment" required>
									<span class="help-block text-danger">{{ $errors->first('certificate_of_enrollment') }}</span>
							</div>
							<br>
							<div class="form-group {{ !$errors->has('nomination_letter') ?: 'has-error' }}">
									<label><b>Nomination Letter:</b></label>
									<br>
									<input type="file" name="nomination_letter" required>
									<span class="help-block text-danger">{{ $errors->first('nomination_letter') }}</span>
							</div>
							<br>
							<div class="form-group {{ !$errors->has('transcript') ?: 'has-error' }}">
									<label><b>Transcript:</b></label>
									<br>
<<<<<<< HEAD
									<input type="file" name="transcript" required>
									<span class="help-block text-danger">{{ $errors->first('transcript') }}</span>
							</div>
						</div>
						

						<div class="coloumn">
							<div class="form-group {{ !$errors->has('photo') ?: 'has-error' }}" id="right">
								<label><b>Passport Photo:</b></label>
								<br>
								<input type="file" name="photo" required>
								<span class="help-block text-danger">{{ $errors->first('photo') }}</span>
							</div>
							<br>
							<div class="form-group {{ !$errors->has('statement_of_purpose') ?: 'has-error' }}">
								<label><b>Statement of Purpose:</b></label>
								<br>
								<input type="file" name="statement_of_purpose" required>
								<span class="help-block text-danger">{{ $errors->first('statement_of_purpose') }}</span>
							</div>
							<br>
							<div class="form-group {{ !$errors->has('bank_statement') ?: 'has-error' }}">
								<label><b>Bank Statement:</b></label>
								<br>
								<input type="file" name="bank_statement" required>
								<span class="help-block text-danger">{{ $errors->first('bank_statement') }}</span>
							</div>
							<br>
							<div class="form-group {{ !$errors->has('cv') ?: 'has-error' }}">
								<label><b>CV/Resume:</b></label>
								<br>
								<input type="file" name="cv" required>
								<span class="help-block text-danger">{{ $errors->first('cv') }}</span>
							</div>
							<br>
							<div class="form-group {{ !$errors->has('passport') ?: 'has-error' }}">
								<label><b>Passport:</b></label>
								<br>
								<input type="file" name="passport" required>
								<span class="help-block text-danger">{{ $errors->first('passport') }}</span>
							</div>
							<br>
							<div class="form-group {{ !$errors->has('student-id') ?: 'has-error' }}">
								<label><b>Student ID Card:</b></label>
								<br>
								<input type="file" name="student_id" required>
								<span class="help-block text-danger">{{ $errors->first('student-id') }}</span>
							</div>
						</div>
=======
									<div class="form-group {{ !$errors->has('student-id') ?: 'has-error' }}">
											<label><b>Student ID Card:</b></label>
											<br>
											<input type="file" name="student_id" required>
											<span class="help-block text-danger">{{ $errors->first('student_id') }}</span>
									</div>
								</div>
>>>>>>> 7fae5380dadefa13fdb1d219dccd7bc1b5834745
					</div>
			</div>


			<div>
				<h4><b>DECLARATION</b></h4>

				<h5><b>
					1.	I certify that the information given in this form is true and accurate. Also agree to keep it updated as necessary.<br>
					2.	I  agree  to  abide  by  the  prevailing  laws  and  regulations  applied  in Indonesia and Universitas  Pertamina  during  my  stay  at Indonesia  and  participate in  the  student exchange program at Universitas Pertamina. <br>
					3.	I  will  not  seek  or  accept  employment  during  my  stay  in Indonesia  as  an  exchange student. <br>
					4.	I  will  return  to  my  home  country  after finishing  my  exchange  period  at Universitas Pertamina.
				</b></h5>
			</div>


			<br><br>

			<button class="btn btn-primary" form="form-up-sa" type="submit">Submit</button>
		</form>
		</div>
	</body>
</html>