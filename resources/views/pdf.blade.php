<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
	<style>
		:root {
			--blue: #007bff;
			--indigo: #6610f2;
			--purple: #6f42c1;
			--pink: #e83e8c;
			--red: #dc3545;
			--orange: #fd7e14;
			--yellow: #ffc107;
			--green: #28a745;
			--teal: #20c997;
			--cyan: #17a2b8;
			--white: #fff;
			--gray: #6c757d;
			--gray-dark: #343a40;
			--primary: #007bff;
			--secondary: #6c757d;
			--success: #28a745;
			--info: #17a2b8;
			--warning: #ffc107;
			--danger: #dc3545;
			--light: #f8f9fa;
			--dark: #343a40;
			--breakpoint-xs: 0;
			--breakpoint-sm: 576px;
			--breakpoint-md: 768px;
			--breakpoint-lg: 992px;
			--breakpoint-xl: 1200px;
			--font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			--font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
		}

		*, ::after, ::before {
			box-sizing: border-box;
		}

		b, strong {
			font-weight: bolder;
		}
		
		.h6, h6 {
			font-size: 1rem;
		}

		.h5, h5 {
			font-size: 1.25rem;
		}

		.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
			margin-bottom: .5rem;
			font-family: inherit;
			font-weight: 500;
			line-height: 1.2;
			color: inherit;
		}

		h1, h2, h3, h4, h5, h6 {
			margin-top: 0;
			margin-bottom: .5rem;
		}

		.h4, h4 {
			font-size: 1.5rem;
		}

		p {
			margin-top: 0;
			margin-bottom: 1rem;
		}

		.btn:not(:disabled):not(.disabled) {
			cursor: pointer;
		}

		.btn {
			display: inline-block;
			font-weight: 400;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			border: 1px solid transparent;
			border-top-color: transparent;
			border-right-color: transparent;
			border-bottom-color: transparent;
			border-left-color: transparent;
			padding: .375rem .75rem;
			font-size: 1rem;
			line-height: 1.5;
			border-radius: .25rem;
			transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
		}

		.btn-primary {
			color: #fff;
			background-color: #007bff;
			border-color: #007bff;
		}

		[type="reset"], [type="submit"], button, html [type="button"] {
			-webkit-appearance: button;
		}

		button, input, optgroup, select, textarea {
			margin: 0;
			font-family: inherit;
			font-size: inherit;
			line-height: inherit;
		}

		button {
			border-radius: 0;
		}

		body {
			font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #212529;
			text-align: left;
			margin-left: 40px;
			margin-right: 40px;
			margin-top: 40px;
			font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #212529;
			text-align: left;
			background-color: #fff;
		}

		.logo{
			width: 25%;

		}

		.pos{
			text-align: center;
		}

		table {
			width:100%;
		}
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		th, td {
			padding: 15px;
			text-align: left;
		}

		input
		{
			background: transparent;
			border: none;

		}

		hr{
			height: 8pt;
			visibility: hidden;
		}

		.tr_no{
			width:110px;
		}

		.tr_nos{
			width:579px;
		}

		.test {
			font-weight: bold;
		}

	</style>
	
	<title>Form UP-SA</title>
	
	<body>
		<div>

			<form class="form-vertical" id="form-up-sa" method="POST" action="{{ route('submit') }}">
				@csrf
			<h6>Student Exchange Form – Universitas Pertamina</h6>
			
			<div class="pos">
				<img class="logo" src="{{public_path('img/logo.png')}}">
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

					
				<table lenth="400">
					<tr>
						<td><b>Name in Full (as appears on passport) Mr./Mrs./Ms.</b><hr>
							<span>{{$personalDetails->fullname}}</span> </td>
						</tr>
				</table>
					
				<table>
				  <tr>
				    <td><b>Nationality</b><hr>
				    	<span>{{$personalDetails->nationality}}</span></td>
				    
				    <td><b>Place, Date of Birth (dd/mm/yy)</b><hr>
				    	<span>{{$personalDetails->date_of_birth}}</span></td>
				    </tr>
				   
				   <tr>
					<td><b>Passport Number</b><hr>
				    	<span>{{$personalDetails->passport_number}}</span></td>
				    
				   	<td><b>Issuing Country</b><hr>
				    	<span>{{$personalDetails->issuing_country}}</span></td>
				   </tr>

				   <tr>
				    <td><b>Date of Issue</b><hr>
				    	<span>{{$personalDetails->date_of_issue}}</span></td>
				    
				    <td><b>Date of Expiry</b><hr>
				    	<span>{{$personalDetails->date_of_expiry}}</span></td>
				   </tr>

				   <tr>
				    <td><b>Blood Type</b><hr>
				    	<span>{{$personalDetails->blood_type}}</span></td>
				    
				    <td><b>Marital Status</b><hr>
				    	<span>{{$personalDetails->marital_status}}</span></td>
				   </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Permanent/Home Address</b><hr>
						<span>{{$personalDetails->address}}</span></td>
				  </tr>
				</table>
				
				<table>
				  <tr>
				    <td style="text-align: left"><b>City</b><hr>
						<span>{{$personalDetails->city}}</span></td>
				    <td><b>Postal/ZIP Code</b><hr>
						<span>{{$personalDetails->postal_code}}</span></td>
				  </tr>
				  
				  <tr>
				    <td><b>Province/State</b><hr>
						<span>{{$personalDetails->province}}</span></td>
				    <td><b>Country</b><hr>
						<span>{{$personalDetails->country}}</span></td>
				  </tr>
				  
				  <tr>
				    <td><b>Phone</b><hr>
						<span>{{$personalDetails->phone}}</span></td>
				    <td><b>Mobile</b><hr>
						<span>{{$personalDetails->mobile}}</span></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Email</b><hr>
						<span>{{$personalDetails->email}}</span></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Mailing Address (if different from above)</b><hr>
						<span>{{$personalDetails->address2}}</span></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>City</b><hr>
						<span>{{$personalDetails->city2}}</span></td>
				    <td><b>Postal/ZIP Code</b><hr>
						<span>{{$personalDetails->postal_code2}}</span></td>
				  </tr>
				  
				  <tr>
				    <td><b>Province/State</b><hr>
						<span>{{$personalDetails->province2}}</span></td>
				    <td><b>Country</b><hr>
						<span>{{$personalDetails->country2}}</span></td>
				  </tr>
				  
				  <tr>
				    <td><b>Phone</b><hr>
						<span>{{$personalDetails->phone2}}</span></td>
				    <td><b>Contact Name</b><hr>
						<span>{{$personalDetails->contact_name}}</span></td>
				  </tr>
				</table>

			</div>
			<br><br>

			<div>
				<h4><b>HOME INSTITUTION</b></h4>
			
				<table>
				  <tr>
				    <td><b>Name of Institution</b><hr>
						<span>{{$homeInstitution->name}}</span></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Address</b><hr>
						<span>{{$homeInstitution->address}}</span></td>
				  </tr>
				</table>

				<table>
					<tr>
					    <td><b>Phone</b><hr>
							<span>{{$homeInstitution->phone}}</span></td>
					    
					    <td><b>Email</b><hr>
							<span>{{$homeInstitution->email}}</span></td>
				  	</tr>
				</table>

				<table>
				  <tr>
				    <td><b>Website</b><hr>
				    <span>{{$homeInstitution->website}}</span></td>
				  </tr>
				</table>

				<table>
				  <tr>
				    <td><b>Faculty/Department</b><hr>
						<span>{{$homeInstitution->faculty_dep}}</span></td>
				  </tr>
				</table>

				<table>
					<tr>
					    <td><b>Starting Year in University</b><hr>
							<span>{{$homeInstitution->start_year}}</span></td>
					
					    <td><b>Cumulative GPA</b><hr>
							<span>{{$homeInstitution->gpa}}</span></td>
				  	</tr>
				</table>
			</div>

			<br><br>

			<div>
				<h4><b>PROPOSED STUDY AT UNIVERSITAS PERTAMINA (UP)</b></h4>
				
				<table>
					<tr>
					<td><span><b>{{$proposedStudy->semester}}</b></span>
					<hr>
					<h5><b>Academic Year {{$proposedStudy->academic_year}}</b></h5></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><b>Faculty</b><hr>
							<span>{{$proposedStudy->faculty}}</span></td>
					    
					    <td><b>Department</b><hr>
							<span>{{$proposedStudy->department}}</span></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><b>Spesific Study Period</b><hr>
							<span>{{$proposedStudy->study_period}}</span></td>
					    
					    <td><b>Start Date</b><hr>
							<span>{{$proposedStudy->start_date}}</span></td>
					    
					    <td><b>End Date</b><hr>
							<span>{{$proposedStudy->end_date}}</span></td>
					</tr>
				</table>

				<table>
					<tr>
						<td><h5><b>Please specify courses you would like to take at UP:</b></h5></td>
					</tr>
				</table>

				<table>
					<tr>
						<td class="tr_nos"><h6><b>Course Title</b></h6></td>
						<td><h6><b>Credit</b></h6></td>
					</tr>
				</table>

				@foreach ($course as $c)
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
				<h4><b>ENGLISH TEST RESULT (if English is not your first language)</b></h4>	

				<table>
				  <tr>
				    <td><b>Test</b></td>
				    <td><b>Score</b></td>
				    <td><b>Test Center</b></td>
				    <td><b>Date Tested</b></td>
				  </tr>

				@foreach ($englishTestResult as $etr)
					<tr>
						<td><span class="test">{{$etr->test}}</span></td>
						<td><span>{{$etr->score}}</span></td>
						<td><span>{{$etr->test_center}}</span></td>
						<td><span>{{$etr->date_tested}}</span></td>
					</tr>
				@endforeach

				</table>
			</div>

			<br><br>

			<div>
				<h4><b>INSURANCE DURING STUDY AT UNIVERSITAS PERTAMINA (UP)</b></h4>	

				<table>
					<tr>
						<td><b>Health Insurance Name</b><hr>
							<span>{{$insurance->insurance_name}}</span></td>
					</tr>
				</table>
				<table>
					<tr>
					    <td><b>Validity</b><hr>
							<span>{{$insurance->validity}}</span></td>
					    <td><b>Cover</b><hr>
							<span>{{$insurance->cover}}</span></td>
					</tr>
				</table>			
			</div>

			<br><br>

				
			<div>
				<h4><b>Accomodation Arrangement</b></h4>

				<table>
					<tr>
						<td><b>Do you need help with your accommodation in Indonesia?</b>
						@if (($accomodation->accomodation_help) == "YES")
								<span style="text-align: right"><b><strong>{{$accomodation->accomodation_help}}</strong></b></span>
							</td>
						</tr>
					</table>
	
					<table>
	
						<tr>
							<td><b>If yes, student agree to the accommodation prepared by International Office</b></td>
							<td>
								
							</td>
						</tr>
						
						<tr>
								<td><b>If no, please state where you plan to stay in Indonesia:</b></td>
						</tr>
						@else
							<span style="text-align: right"><b><strong>{{$accomodation->accomodation_help}}</strong></b></span>
						</td>
					</tr>
				</table>

				<table>

					<tr>
						<td><b>If yes, student agree to the accommodation prepared by International Office</b></td>
						<td>
							
						</td>
					</tr>
					
					<tr>
							<td><b>If no, please state where you plan to stay in Indonesia:</b></td>
					</tr>
							@endif
						<td><b>Address</b><hr>
							<span>{{$accomodation->address}}</span></td>
						<td><b>Contact Person (Name/Phone)</b><hr>
							<span>{{$accomodation->contact_person}}</span></td>

				</table>


			</div>


			<br><br>

			<div>
				<h4><b>CONTACT OF EMERGENCY</b></h4>	

				<table>
					<tr>
					    <td><b>Full Name</b><hr>
							<span>{{$emergencyContact->fullname}}</span></td>
					    <td><b>Relationship</b><hr>
							<span>{{$emergencyContact->relationship}}</span></td>
					</tr>
				</table>
	  				
	  			<table>
	  				<tr>
					    <td><b>Address</b><hr>
							<span>{{$emergencyContact->address}}</span></td>
				  	</tr>		
				</table>

				<table>	
				  	<tr>
					    <td><b>Phone</b><hr>
							<span>{{$emergencyContact->phone}}</span></td>
					    
					    <td><b>Mobile</b><hr>
							<span>{{$emergencyContact->mobile}}</span></td>
						
						<td><b>Email</b><hr>
							<span>{{$emergencyContact->email}}</span></td>
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
			</div>
			<div class="x">
					<h5 style="text-align:right">Date: {{$personalDetails->created_at}}</h5>
			</div>
		</form>
		</div>
	</body>
</html>