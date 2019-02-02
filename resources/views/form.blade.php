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
			<form class="form-vertical" id="form-up-sa" method="POST" action="{{ route('submit') }}" >
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
			<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					{{ session('success') }}
			</div>
			@endif
				<h4><b>PERSONAL DETAILS</b></h4>

				<table>
				  <tr>
				    <td><b>Name in Full (as appears on passport) Mr./Mrs./Ms.</b><hr>
				    <input placeholder="Your Fullname" type="text" name="name" size="30" required=""/></td>
				  </tr>
				</table>
				  
				<table>
				  <tr>
				    <td><b>Nationality</b><hr>
				    	<input placeholder="Your Nationality" type="text" name="nationality" size="20" required=""/></td>
				    
				    <td width="635"><b>Place, Date of Birth (dd/mm/yy)</b><hr>
				    	<input placeholder="Date of Birth" type="text" name="date_of_birth" size="20" required=""/></td>
				    </tr>
				   
				   <tr>
					<td><b>Passport Number</b><hr>
				    	<input placeholder="Your Passport Number" type="text" name="passport_number" size="20" required=""/></td>
				    
				   	<td><b>Issuing Country</b><hr>
				    	<input placeholder="Your Issuing Country" type="text" name="issuing_country" size="20" required=""/></td>
				   </tr>

				   <tr>
				    <td><b>Date of Issue</b><hr>
				    	<input placeholder="Date of Issue" type="date" name="date_of_issue" size="20" required=""/></td>
				    
				    <td><b>Date of Expiry</b><hr>
				    	<input placeholder="Date of Expiry" type="date" name="date_of_expiry" size="20" required=""/></td>
				   </tr>

				   <tr>
				    <td><b>Blood Type</b><hr>
				    	<input placeholder="Your Blood Type" type="text" name="blood_type" maxlength="2" required=""/></td>
				    
				    <td><b>Marital Status</b><hr>
				    	<input placeholder="Your Marital Status" type="text" name="marital_status" size="20" required=""/></td>
				   </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Permanent/Home Address</b><hr>
				    <input placeholder="Your Address" type="text" name="address" size="50" required=""/></td>
				  </tr>
				</table>
				
				<table>
				  <tr>
				    <td><b>City</b><hr>
				    <input placeholder="Your City" type="text" name="city" size="20" required=""/></td>
				    <td><b>Postal/ZIP Code</b><hr>
				    <input placeholder="ZIP Code" type="text" name="postal_code" size="20" required=""/></td>
				  </tr>
				  
				  <tr>
				    <td><b>Province/State</b><hr>
				    <input placeholder="Your State" type="text" name="province" size="20" required=""/></td>
				    <td><b>Country</b><hr>
				    <input placeholder="Your Country" type="text" name="country" size="20" required=""/></td>
				  </tr>
				  
				  <tr>
				    <td><b>Phone</b><hr>
				    <input placeholder="Phone Number" type="text" name="phone" size="20" required=""/></td>
				    <td><b>Mobile</b><hr>
				    <input placeholder="Mobile Number" type="text" name="mobile" size="20" required=""/></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Email</b><hr>
				    <input placeholder="Your Email Address" type="email" name="email" size="50" required=""/></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Mailing Address (if different from above)</b><hr>
				    <input placeholder="Your Alternate Address" type="text" name="address2" size="50"/></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>City</b><hr>
				    <input placeholder="Your City" type="text" name="city2" size="20"/></td>
				    <td><b>Postal/ZIP Code</b><hr>
				    <input placeholder="ZIP Code" type="text" name="postal_code2" size="20"/></td>
				  </tr>
				  
				  <tr>
				    <td><b>Province/State</b><hr>
				    <input placeholder="Your State" type="text" name="province2" size="20"/></td>
				    <td><b>Country</b><hr>
				    <input placeholder="Your Country" type="text" name="country2" size="20"/></td>
				  </tr>
				  
				  <tr>
				    <td><b>Phone</b><hr>
				    <input placeholder="Phone Number" type="text" name="phone2" size="20"/></td>
				    <td><b>Contact Name</b><hr>
				    <input placeholder="Contact Name" type="text" name="contact_name" size="20"/></td>
				  </tr>
				</table>

			</div>
			<br><br>

			<div>
				<h4><b>HOME INSTITUTION</b></h4>
			
				<table>
				  <tr>
				    <td><b>Name of Institution</b><hr>
				    <input placeholder="Your Institution" type="instance" name="institution" size="50" required=""/></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Address</b><hr>
				    <input placeholder="Your Address" type="text" name="institution_address" size="50" required=""/></td>
				  </tr>
				</table>

				<table>
					<tr>
					    <td><b>Phone</b><hr>
					    <input placeholder="Phone Number" type="text" name="institution_phone" size="20" required=""/></td>
					    
					    <td><b>Email</b><hr>
					    <input placeholder="Your Email Address" type="email" name="institution_email" size="20" required=""/></td>
				  	</tr>
				</table>

				<table>
				  <tr>
				    <td><b>Website</b><hr>
				    <input placeholder="Your Instance's Website" type="text" name="institution_web" size="50" required=""/></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Faculty/Department</b><hr>
				    <input placeholder="Faculty" type="text" name="faculty_dept" size="50" required=""/></td>
				  </tr>
				</table>

				<table>
					<tr>
					    <td><b>Starting Year in University</b><hr>
					    <input placeholder="Start Year" type="text" name="start_year" size="20" required=""/></td>
					
					    <td><b>Cumulative GPA</b><hr>
					    <input placeholder="Your GPA" type="text" name="gpa" size="20" required=""/></td>
				  	</tr>
				</table>
			</div>

			<br><br>

			<div>
				<h4><b>PROPOSED STUDY AT UNIVERSITAS PERTAMINA (UP)</b></h4>
				
				<table>
					<tr>
						<td><input type="radio" name="duration" value="Semester I (Aug-Jan)"/>
						<b>Semester I (Aug-Jan)</b><hr>
						
						<input type="radio" name="duration" value="Semester II (Feb-Jun)"/>
						<b>Semester II (Feb-Jun)</b>

						<h5><b>Academic Year 20 <input type="text" name="year1" maxlength="2" placeholder="____" size="1"/>/20 <input type="text" name="year2" maxlength="2"  placeholder="____" required=""/></b></h5></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><b>Faculty</b><hr>
					    <input placeholder="Your Faculty" type="text" name="faculty" size="20" required=""/></td>
					    
					    <td><b>Department</b><hr>
					    <input placeholder="Your Department" type="text" name="department" size="20" required=""/></td>
					</tr>
				</table>

				<table>
					<tr>
						<td width="634"><b>Spesific Study Period</b><hr>
					    <input placeholder="Spesific Study Period" type="text" name="study_period" size="20" required=""/></td>
					    
					    <td><b>Start Date</b><hr>
					    <input placeholder="Start Date" type="date" name="start_date" required=""/></td>
					    
					    <td><b>End Date</b><hr>
					    <input placeholder="End Date" type="date" name="end_date" required=""/></td>
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
						<td><input type="text" name="course_1" placeholder="Course" required=""></td>
						<td><input type="text" name="credit_1" placeholder="Credit" required=""></td>
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
					   <td><input type="text" name="score_toefl" size="20"/></td>
					   <td><input type="name" name="place_toefl" size="50"/></td>
					   <td><input type="date" name="date_toefl" size="20"/></td>
					</tr>

					<tr>
					   <td><input type="text" name="ielts" value="IELTS" class="test"></td>
					   <td><input type="text" name="score_ielts" size="20"/></td>
					   <td><input type="name" name="place_ielts" size="50"/></td>
					   <td><input type="date" name="date_ielts" size="20"/></td>
					</tr>

					<tr>
					   <td><input type="text" name="others" size="20" placeholder="OTHERS" /></td>
					   <td><input type="text" name="score_others" size="20"/></td>
					   <td><input type="name" name="place_others" size="50"/></td>
					   <td><input type="date" name="date_others" size="20"/></td>
					</tr>
				</table>
			</div>

			<br><br>

			<div>
				<h4><b>INSURANCE DURING STUDY AT UNIVERSITAS PERTAMINA (UP)</b></h4>	

				<table>
					<tr>
						<td><b>Health Insurance Name</b><hr>
					    <input placeholder="Your Insurance Name" type="text" name="insurance" size="20" required=""/></td>
					</tr>
				</table>
				<table>
					<tr>
					    <td><b>Validity</b><hr>
					    <input placeholder="Valid date until" type="date" name="valid_date" size="20" required=""/></td>
					    <td width="725"><b>Cover</b><hr>
					    <input type="text" name="cover" size="20"/></td>
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
							<input placeholder="Address" type="text" name="address_acc" size=50"></td>
						<td><b>Contact Person (Name/Phone)</b><hr>
							<input placeholder="Name & Phone" type="text" name="cp_acc" size="25"></td>

				</table>


			</div>


			<br><br>

			<div>
				<h4><b>CONTACT OF EMERGENCY</b></h4>	

				<table>
					<tr>
					    <td><b>Full Name</b><hr>
					    <input placeholder="Name" type="text" name="emergency_name" size="20" required=""/></td>
					    <td><b>Relationship</b><hr>
					    <input placeholder="Relationship" type="text" name="relationship" size="20" required=""/></td>
					</tr>
				</table>
	  				
	  			<table>
	  				<tr>
					    <td><b>Address</b><hr>
					    <input placeholder="Address" type="text" name="emergency_address" size="50" required=""/></td>
				  	</tr>		
				</table>

				<table>	
				  	<tr>
					    <td><b>Phone</b><hr>
					    <input placeholder="Phone" type="text" name="emergency_phone" size="20" required=""/></td>
					    
					    <td><b>Mobile</b><hr>
					    <input placeholder="Mobile" type="text" name="emergency_mobile" size="20" required=""/></td>
						
						<td><b>Email</b><hr>
					    <input placeholder="Email" type="email" name="emergency_email" size="20" required=""/></td>
					</tr>
				</table>			
			</div>

			<br><br>

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

			<div class="x">
				<h5>Applicant Signature: </h5>
				<h5>Date: </h5>
			</div>

			<button class="btn btn-primary" form="form-up-sa" type="submit">Submit</button>
			{{-- <button class="btn btn-primary" form="form-up-sa" onClick="window.print()">Print PDF</button> --}}
			<a href="{{ route('print') }}">Print PDF</a>
		</form>
		</div>
	</body>
</html>