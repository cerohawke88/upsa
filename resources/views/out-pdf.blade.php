<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
	<title>OUTBOUND Form UP-SA</title>
	<body>
		<div>
			<form class="form-vertical" id="form-up-sa" method="POST" action="{{ route('submit.out') }}" >
				@csrf
			<h6>Student Exchange Form – Universitas Pertamina</h6>
			
			<div class="pos">
				<img class="logo" src="{{public_path('img/logo.png')}}">
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
				
				
				<h5><b>PERSONAL INFORMATION</b></h5><h6><b>(Please complete this part as it is written on your passport)</b></h6>

				<table>
				  <tr>
				    <td><b>Student ID Number</b><hr>
				    <span>{{$outPersonalDetails->nim}}</span>></td>
				  </tr>
				</table>
				  
				<table>
				  <tr>
				    <td><b>Name</b><hr>
				    	<span>{{$outPersonalDetails->fullname}}</span>/></td>
				    </tr>
				</table>
				
				<table>
					<tr>
						<td><b>Gender</b><hr>
						<span>{{$outPersonalDetails->gender}}</span>

					</tr>
				</table>

				<table>
				  <tr>
				    <td><b>Place of Birth</b><hr>
				   	 	<span>{{$outPersonalDetails->place_of_birth}}</span></td>
				    <td><b>Date of Birth</b><hr>
				    	<span>{{$outPersonalDetails->date_of_birth}}</span></td>
				    </tr>
				   
				  <tr>
				    <td><b>Nationality</b><hr>
				    	<span>{{$outPersonalDetails->nationality}}</span></td>
				    <td><b>Religion</b><hr>
				    	<span>{{$outPersonalDetails->religion}}</span></td>
				  </tr>
				  
				  <tr>
					<td><b>Passport Number</b><hr>
				    	<span>{{$outPersonalDetails->passport_number}}</span></td>
				    <td><b>Passport Expiration (dd/mm/yy)</b><hr>
				    	<span>{{$outPersonalDetails->pssport_expired}}</span></td>
				  </tr>
				</table>
			</div>
			<br><br>

			<div>
				<h5><b>CONTACT INFORMATION</b></h5>
			
				<table>
				  <tr>
				   <td><b>Email</b><hr>
					    <span>{{$outContact->email}}</span></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Mobile Number</b><hr>
					   <span>{{$outContact->mobile}}</span></td>
				  </tr>
				</table>

				<table>
					<tr>
					    <td width="680"><b>Telephone</b><hr>
					    <span>{{$outContact->email}}</span></td>
					    
					    <td><b>Mailing Address</b><hr>
					    <span>{{$outContact->email}}</span></td>
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
						<span>{{$outApplicantDetails->type_program}}</span>
						
					</tr>
				</table>

				<table>
					<tr>
						<tr>
						<td><b>Program Period</b><hr>
						<span>{{$outApplicantDetails->program_period}}</span>
					</tr>
				</table>

				
				<table>
					<tr>
						<td><b>Host University</b><hr>
					    <span>{{$outApplicantDetails->host_univ}}</span>
					</tr>
				</table>

				<table>
					<tr>
						<td><h5><b>Please specify courses you would like to take at Host University:</b></h5></td>
					</tr>
				</table>

				<table>
					<tr>
						<td class="tr_no"><h6><b>No.</b></h6></td>
						<td class="tr_nos"><h6><b>Course Title</b></h6></td>
						<td><h6><b>Credit</b></h6></td>
					</tr>
				</table>

				@foreach($outCourse as $c)
				<table>
					<tr>
						<td><span>{{$c->course_title}}</span></td>
							<td><span>{{$c->credit}}</span></td>
					</tr>
				</table>
				@endforeach
			</div>

			<br><br>

			<div>
				<h5><b>ACADEMIC INFORMATION</b></h5>	
				
				<table>
				  <tr>
				    <td><b>Department</b><hr>
				    	<span>{{$outAcademicInfo->department}}</span></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td width="690"><b>Year/Semester</b><hr>
				    	<span>{{$outAcademicInfo->semester}}</span></td>
				   
				    <td><b>IPS/IPK</b><hr>
				    	<span>{{$outAcademicInfo->gpa}}</span></td>
				  </tr>
				</table>

				<table>
				    <td><b>TOEFL/IELTS Score</b><hr>
				    	<span>{{$outAcademicInfo->english_score}}</span></td>
				  <tr>
				    <td><b>Test Date(dd/mm/yyyy)</b><hr>
				    	<span>{{$outAcademicInfo->date_test_english}}</span></td>
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
						@foreach{{$outOrganization as $o}}
					
						<td><span>{{$o->name_org}} </span></td>
						<td><span>{{$o->year_org}} </span></td>
					</tr>
						@endforeach
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
						@foreach($outStudentAward->$s)
						<td><span>{{$s->name_award}} </span></td>
						<td><span>{{$s->name_institution}} </span></td>
						<td><span>{{$s->year_award}} </span></td>
					</tr>
						@endforeach
				</table>			
				
				
			</div>

			<br><br>

			<div>
				<h5><b>PARENT/GUARDIAN CONTACT</b></h5>	

				<table>
					<tr>
					    <td><b>Full Name</b><hr>
					    <span>{{$outGuardianParent->fullname}}</span>
					    <td><b>Relationship</b><hr>
					    <span>{{$outGuardianParent->relationship}}</span></td>
					</tr>
				</table>
	  				
	  			<table>
	  				<tr>
					    <td><b>Address</b><hr>
					    <span>{{$outGuardianParent->address}}</span></td>
				  	</tr>		
				</table>

				<table>	
				  	<tr>
					    <td><b>Phone</b><hr>
					   <span>{{$outGuardianParent->phone}}</span></td>
					    
					    <td><b>Mobile</b><hr>
					    <span>{{$outGuardianParent->mobile}}</span></td>
						
						<td><b>Email</b><hr>
					    <span>{{$outGuardianParent->email}}</span></td>
					</tr>
				</table>			
			</div>

			<br><br>			

			<br><br>

			<div>
				<h5><b>PURPOSE AND MOTIVATION STATEMENT</b></h5>	
				<table>
					<tr>
						<textarea rows="18" cols="141" placeholder="Your Purpose and Motivation Statements" type="text" name="motivation" required="" value="{{old('motivation')}}"></textarea>
						
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

			<div class="x">
					<h5 style="text-align:right">Date: {{$outPersonalDetails->created_at}}</h5>
			</div>

		</form>
		</div>
	</body>
</html>