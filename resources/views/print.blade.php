<!DOCTYPE html>
<html>
<head>
	<title>Form UP-SA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<body>
		<div>

			@if ($errors->any())
			<div class="alert alert-danger">
					<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
					</ul>
			</div>
			@endif

			@if (session('success'))
			<div class="alert alert-success alert-dismissable" style="align-items: center; float: left; margin-top: -200px; margin-left: 230px">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					{{ session('success') }}
			</div>
			@endif

			<form class="form-vertical" id="form-up-sa" method="POST" action="{{ route('submit') }}">
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
				
				
				<h4><b>PERSONAL DETAILS</b></h4>

				<table>
				  <tr>
				    <td><b>Name in Full (as appears on passport) Mr./Mrs./Ms.</b><hr>
				    <input placeholder="Your Fullname"type="text" name="name" size="30"/></td>
				  </tr>
				</table>
				  
				<table>
				  <tr>
				    <td><b>Nationality</b><hr>
				    	<input placeholder="Your Nationality" type="text" name="nationality" size="20"/></td>
				    
				    <td><b>Place, Date of Birth (dd/mm/yy)</b><hr>
				    	<input placeholder="Date of Birth" type="text" name="dob" size="20"/></td>
				    </tr>
				   
				   <tr>
					<td><b>Passport Number</b><hr>
				    	<input placeholder="Your Passport Number" type="text" name="passport" size="20"/></td>
				    
				   	<td><b>Issuing Country</b><hr>
				    	<input placeholder="Your Issuing Country" type="text" name="is_country" size="20"/></td>
				   </tr>

				   <tr>
				    <td><b>Date of Issue (dd/mm/yy)</b><hr>
				    	<input placeholder="Date of Issue" type="date" name="doi" size="20"/></td>
				    
				    <td><b>Date of Expiry (dd/mm/yy)</b><hr>
				    	<input placeholder="Date of Expiry" type="date" name="doe" size="20"/></td>
				   </tr>

				   <tr>
				    <td><b>Blood Type</b><hr>
				    	<input placeholder="Your Blood Type" type="text" name="blood" maxlength="2" /></td>
				    
				    <td><b>Marital Status</b><hr>
				    	<input placeholder="Your Marital Status" type="text" name="marital" size="20"/></td>
				   </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Permanent/Home Address</b><hr>
				    <input placeholder="Your Address" type="text" name="address" size="50"/></td>
				  </tr>
				</table>
				
				<table>
				  <tr>
				    <td><b>City</b><hr>
				    <input placeholder="Your City" type="text" name="city" size="20"/></td>
				    <td><b>Postal/ZIP Code</b><hr>
				    <input placeholder="ZIP Code" type="text" name="postal" size="20"/></td>
				  </tr>
				  
				  <tr>
				    <td><b>Province/State</b><hr>
				    <input placeholder="Your State" type="text" name="state" size="20"/></td>
				    <td><b>Country</b><hr>
				    <input placeholder="Your Country" type="text" name="country" size="20"/></td>
				  </tr>
				  
				  <tr>
				    <td><b>Phone</b><hr>
				    <input placeholder="Phone Number" type="text" name="phone" size="20"/></td>
				    <td><b>Mobile</b><hr>
				    <input placeholder="Mobile Number" type="text" name="mobile" size="20"/></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Email</b><hr>
				    <input placeholder="Your Email Address" type="email" name="email" size="50"/></td>
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
				    <input placeholder="ZIP Code" type="text" name="postal2" size="20"/></td>
				  </tr>
				  
				  <tr>
				    <td><b>Province/State</b><hr>
				    <input placeholder="Your State" type="text" name="state2" size="20"/></td>
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
				    <input placeholder="Your Institution" type="instance" name="institution" size="50"/></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Address</b><hr>
				    <input placeholder="Your Address" type="text" name="i_address" size="50"/></td>
				  </tr>
				</table>

				<table>
					<tr>
					    <td><b>Phone</b><hr>
					    <input placeholder="Phone Number" type="text" name="i_phone" size="20"/></td>
					    
					    <td><b>Email</b><hr>
					    <input placeholder="Your Email Address" type="email" name="i_email" size="20"/></td>
				  	</tr>
				</table>

				<table>
				  <tr>
				    <td><b>Website</b><hr>
				    <input placeholder="Your Instance's Website" type="text" name="web" size="50"/></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Faculty/Department</b><hr>
				    <input placeholder="Faculty" type="text" name="faculty_dept" size="50"/></td>
				  </tr>
				</table>

				<table>
					<tr>
					    <td><b>Starting Year in University</b><hr>
					    <input placeholder="Start Year" type="text" name="s_year" size="20"/></td>
					
					    <td><b>Cumulative GPA</b><hr>
					    <input placeholder="Your GPA" type="text" name="gpa" size="20"/></td>
				  	</tr>
				</table>
			</div>

			<br><br>

			<div>
				<h4><b>PROPOSED STUDY AT UNIVERSITAS PERTAMINA (UP)</b></h4>
				
				<table>
					<tr>
						<td><input type="radio" name="duration" />
						<b>Semester I (Aug-Jan)</b><hr>
						
						<input type="radio" name="duration" />
						<b>Semester II (Feb-Jun)</b>

						<h5><b>Academic Year 20 <input type="text" name="f_year" maxlength="2" placeholder="____" />/20 <input type="text" name="l_year" maxlength="2"  placeholder="____"/></b></h5></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><b>Faculty</b><hr>
					    <input placeholder="Your Faculty" type="text" name="faculty" size="20"/></td>
					    
					    <td><b>Department</b><hr>
					    <input placeholder="Your Department" type="text" name="department" size="20"/></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><b>Spesific Study Period</b><hr>
					    <input placeholder="Spesific Study Period" type="text" name="spesific_period" size="20"/></td>
					    
					    <td><b>Start Date (dd/mm/yyyy)</b><hr>
					    <input placeholder="Start Date" type="date" name="start_date"/></td>
					    
					    <td><b>End Date (dd/mm/yyyy)</b><hr>
					    <input placeholder="End Date" type="date" name="end_date"/></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><h5><b>Please specify courses you would like to take at UP:</b></h5></td>
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
						<td><input type="text" name="course_1" placeholder="Course"></td>
						<td><input type="text" name="credit_1" placeholder="Credit"></td>
					</tr>
				
				</table>

				<table>
					<tr>
						<td><h6><b>2.</b></h6></td>
						<td><input type="text" name="course_2"></td>
						<td><input type="text" name="credit_2"></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><h6><b>3.</b></h6></td>
						<td><input type="text" name="course_3"></td>
						<td><input type="text" name="credit_3"></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><h6><b>4.</b></h6></td>
						<td><input type="text" name="course_4"></td>
						<td><input type="text" name="credit_4"></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><h6><b>5.</b></h6></td>
						<td><input type="text" name="course_5"></td>
						<td><input type="text" name="credit_5"></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><h6><b>6.</b></h6></td>
						<td><input type="text" name="course_6"></td>
						<td><input type="text" name="credit_6"></td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td><h6><b>7.</b></h6></td>
						<td><input type="text" name="course_7"></td>
						<td><input type="text" name="credit_7"></td>
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
				    <td><b>Date Tested (dd/mm/yyyy)</b></td>
				  </tr>

					<tr>
					   <td><input type="text" name="toefl" value="TOEFL" class="test"></td>
					   <td><input type="number" name="score_toefl" size="20"/></td>
					   <td><input type="name" name="place_toefl" size="50"/></td>
					   <td><input type="date" name="date_toefl" size="20"/></td>
					</tr>

					<tr>
					   <td><input type="text" name="ielts" value="IELTS" class="test"></td>
					   <td><input type="number" name="score_ielts" size="20"/></td>
					   <td><input type="name" name="place_ielts" size="50"/></td>
					   <td><input type="date" name="date_ielts" size="20"/></td>
					</tr>

					<tr>
					   <td><input type="text" name="others" size="20" placeholder="OTHERS" /></td>
					   <td><input type="number" name="score_others" size="20"/></td>
					   <td><input type="name" name="place_others" size="50"/></td>
					   <td><input type="date" name="date_other" size="20"/></td>
					</tr>
				</table>
			</div>

			<br><br>

			<div>
				<h4><b>INSURANCE DURING STUDY AT UNIVERSITAS PERTAMINA (UP)</b></h4>	

				<table>
					<tr>
						<td><b>Health Insurance Name</b><hr>
					    <input placeholder="Your Insurance Name" type="text" name="insurance" size="20"/></td>
					</tr>
				</table>
				<table>
					<tr>
					    <td><b>Validity</b><hr>
					    <input placeholder="Valid date until" type="date" name="valid_date" size="20"/></td>
					    <td><b>Cover</b><hr>
					    <input placeholder="" type="text" name="cover" size="20"/></td>
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
						<td><input  type="radio" name="opt_acc" size="20"/> YES</td>
					</tr>

					<tr>
						<td><b>If no, please state where you plan to stay in Indonesia:</b></td>
						<td><input type="radio" name="opt_acc" size="20"/> NO</td>
					</tr>
						<td><b>Address</b><hr>
							<input placeholder="Adress" type="text" name="adress_acc" size=50"></td>
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
					    <input placeholder="Name" type="text" name="emergency_name" size="20"/></td>
					    <td><b>Relationship</b><hr>
					    <input placeholder="Relationship" type="text" name="relationship" size="20"/></td>
					</tr>
				</table>
	  				
	  			<table>
	  				<tr>
					    <td><b>Address</b><hr>
					    <input placeholder="Address" type="text" name="address_emergency" size="50"/></td>
				  	</tr>		
				</table>

				<table>	
				  	<tr>
					    <td><b>Phone</b><hr>
					    <input placeholder="Phone" type="text" name="emergency_phone" size="20"/></td>
					    
					    <td><b>Mobile</b><hr>
					    <input placeholder="Mobile" type="text" name="emergency_mobile" size="20"/></td>
						
						<td><b>Email</b><hr>
					    <input placeholder="Email" type="email" name="emergency_email" size="20"/></td>
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
			<!-- <button class="btn btn-primary" form="form-up-sa" onClick="window.print()">Print PDF</button> -->
			<a href="{{ url('/print') }}">Print PDF</a>
		</form>
		</div>
	</body>
</html>