<!DOCTYPE html>
<html>
<head>
	<title>oUTBOND Form UP-SA</title>
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
				<h5><b>UNIVERSITAS PERTAMINA-STUDY ABROAD(UP-SA)</h5>
				<br>
				<h5>APPLICATION FORM</b></h5>
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
				<h5><b>PERSONAL INFORMATION</b></h5><h6><b>(Please complete this part as it is written on your passport)</b></h6>

				<table>
				  <tr>
				    <td><b>Student ID Number</b><hr>
				    <input placeholder="Your Student ID Number" type="text" name="student_number" size="30" maxlength="12" required=""/></td>
				  </tr>
				</table>
				  
				<table>
				  <tr>
				    <td><b>Name</b><hr>
				    	<input placeholder="Your Fullname" type="text" name="name" size="30" required=""/></td>
				    </tr>
				</table>
				
				<table>
					<tr>
						<td><b>Gender</b><hr>
						<input type="radio" name="duration" value="male"/>
						<b>Male</b>
						
						<input type="radio" name="duration" value="female"/>
						<b>Female</b>

					</tr>
				</table>

				<table>
				  <tr>
				    <td><b>Place of Birth</b><hr>
				   	 	<input placeholder="Your City" type="text" name="place_of_birth" size="20" required=""/></td>
				    <td><b>Date of Birth (dd/mm/yy)</b><hr>
				    	<input placeholder="Date of Birth" type="date" name="date_of_birth" size="20" required=""/></td>
				    </tr>
				   
				  <tr>
				    <td><b>Nationality</b><hr>
				    	<input placeholder="Your Nationality" type="text" name="nationality" size="20" required=""/></td>
				    <td><b>Religion</b><hr>
				    <input placeholder="Your Religion" type="text" name="religion" maxlength="20" size="20" required=""/></td>
				  </tr>
				  
				  <tr>
					<td><b>Passport Number</b><hr>
				    	<input placeholder="Your Passport Number" type="text" name="passport_number" size="30" required=""/></td>
				    <td><b>Passport Expiration (dd/mm/yy)</b><hr>
				    	<input type="date" name="expire_of_passport" size="20"/></td>
				  </tr>
				</table>
			</div>
			<br><br>

			<div>
				<h5><b>CONTACT INFORMATION</b></h5>
			
				<table>
				  <tr>
				   <td><b>Email</b><hr>
					    <input placeholder="Your Email Address" type="email" name="institution_email" size="20" required=""/></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Mobile Number</b><hr>
					    <input placeholder="Mobile" type="text" name="mobile_number" size="20" required=""/></td>
				  </tr>
				</table>

				<table>
					<tr>
					    <td width="680"><b>Telphone</b><hr>
					    <input placeholder="Telphone Number" type="text" name="telphone" size="20" required=""/></td>
					    
					    <td><b>Email</b><hr>
					    <input placeholder="Your Email Address" type="email" name="institution_email" size="20" required=""/></td>
				  	</tr>
				</table>
			</div>

			<br><br>

			<div>
				<h5><b>APPLICATION DETAILS</b></h5>
				
				<table>
					<tr>
						<tr>
						<td><b>Type of Program</b><hr>
						<input type="radio" name="duration" value="male"/>
						<b>Student Exchange</b>
						
						<input type="radio" name="duration" value="internship"/>
						<b>Internship</b>

						<input type="radio" name="duration" value="summer_program"/>
						<b>Summer Program</b>
					</tr>
				</table>

				<table>
					<tr>
						<tr>
						<td><b>Program Period</b><hr>
						<input type="radio" name="duration" value="male"/>
						<b>1-2 months</b>
						
						<input type="radio" name="duration" value="internship"/>
						<b>1 semester(4-6 months)</b>

						<input type="radio" name="duration" value="summer_program"/>
						<b>2 semester(up to 12 months)</b>
					</tr>
				</table>

				
				<table>
					<tr>
						<td><b>Host University</b><hr>
					    <input placeholder="Host University" type="text" name="host_univ" size="50" required=""/></td>
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
				<h5><b>ACADEMIC INFORMATION</b></h5>	
				
				<table>
				  <tr>
				    <td><b>Department</b><hr>
				    	<input placeholder="Your Department" type="text" name="department" size="30" required=""/></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Year/Semester</b><hr>
				    	<input placeholder="Year/Semester" type="text" name="year_sem" size="30" required=""/></td>
				   
				    <td><b>IPS/IPK</b><hr>
				    	<input placeholder="IPS/IPK/GPA" type="text" name="ips_ipk" size="30" required=""/></td>
				  </tr>
				</table>

				<table>
				    <td><b>TOEFL/IELTS Score</b><hr>
				    	<input placeholder="Your score TOEFL/Score" type="text" name="toefl_ielts" size="30" required=""/></td>
				  <tr>
				    <td><b>Test Date(dd/mm/yyyy)</b><hr>
				    	<input placeholder="Test Date of TOEFL/IELTS" type="date" name="date_toefl_ielts" size="30" required=""/></td>
				  </tr>

				</table>

				
				
			</div>

			<br><br>

			<div>
				<h4><b>MEMBERSHIP AND ORGANIZATION ACTIVITIES</b></h4>	
				<table>
					<tr>
						<td class="tr_no"><h6><b>No.</b></h6></td>
						<td class="tr_nos"><h6><b>Name of Organization</b></h6></td>
						<td><h6><b>year</b></h6></td>
					</tr>
				</table>

				<table> 
					<tr>
						<td><h6><b>1.</b></h6></td>
						<td><input type="text" name="org_1" placeholder="Organzation" required=""></td>
						<td><input type="text" name="year_org_1" placeholder="Year" required=""></td>
					</tr>
				</table>			

				<table> 
					<tr>
						<td><h6><b>2.</b></h6></td>
						<td><input type="text" name="org_1" placeholder="Organzation"></td>
						<td><input type="text" name="year_org_1" placeholder="Year"></td>
					</tr>
				</table>			

				<table> 
					<tr>
						<td><h6><b>3.</b></h6></td>
						<td><input type="text" name="org_1" placeholder="Organzation"></td>
						<td><input type="text" name="year_org_1" placeholder="Year"></td>
					</tr>
				</table>			

			</div>

			<br><br>
	
			<div>
				<h5><b>ACHIEVEMENT/AWARD</b></h5>	
				<table>
					<tr>
						<td width="423"><h6><b>Name of Award</b></h6></td>
						<td width="422"><h6><b>Institution</b></h6></td>
						<td><h6><b>Year</b></h6></td>
					</tr>
				</table>

				<table> 
					<tr>
						<td><input type="text" name="award_1" placeholder="Name of Award" required=""></td>
						<td><input type="text" name="institut_1" placeholder="Name of Institution" required=""></td>
						<td><input type="text" name="year_award_1" placeholder="Year"></td>
					</tr>
				</table>			
				
				<table> 
					<tr>
						<td><input type="text" name="award_1" placeholder="Name of Award"></td>
						<td><input type="text" name="institut_1" placeholder="Name of Institution"></td>
						<td><input type="text" name="year_award_1" placeholder="Year"></td>
					</tr>
				</table>

				<table> 
					<tr>
						<td><input type="text" name="award_1" placeholder="Name of Award"></td>
						<td><input type="text" name="institut_1" placeholder="Name of Institution"></td>
						<td><input type="text" name="year_award_1" placeholder="Year"></td>
					</tr>
				</table>			

				
			</div>

			<br><br>

			<div>
				<h5><b>PARENT/GUARDIAN CONTACT</b></h5>	

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

			<br><br>

			<div>
				<h5><b>PURPOSE AND MOTIVATION STATEMENT</b></h5>	
				<table>
					<tr>
						<textarea rows="18" cols="141" placeholder="Your Purpose and Motivation Statements" type="text" name="motivation" required=""></textarea>
						
					</tr>
				</table>
				
			<br><br>

			<div>
				<h5><b>DECLARATION</b></h5>

				<h6><b>
					I hereby certify that all the statements  made on this application and in the attached documents are true and correct. I fully understand all the conditions of joining this prgramm and agree to:<br/>
					1.	follow the course of study and abide the rules of Institutions in which I undertake to study<br>
					2.	act in such a manner that will not bring disrepute to my self, Universitas Pertamina, home-university or my country of citizenship during my study abroad program <br>
					3.	abide the rules and regulations governing my visa <br>
					4.	provide funding and expenses in the cost that occur during my participation in the program<br>
					5. the use of documentation of myself which relate to this prgram, taken by Universitas Pertamina or shared by me - the likely uses include but not limited to promotional materials (e.g. brochures, posters, newspaper articles, website, communication with educational agents, and advertising).
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