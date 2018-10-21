<!DOCTYPE html>
<html>
<head>
	<title>Form UP-SA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<body>
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
			    <td><b>Name in Full</b><hr>
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
			    	<input type="text" name="passport" size="20"/></td>
			    
			   	<td><b>Issuing Country</b><hr>
			    	<input type="text" name="nationality" size="20"/></td>
			   </tr>

			   <tr>
			    <td><b>Date of Issue (dd/mm/yy)</b><hr>
			    	<input type="date" name="doi" size="20"/></td>
			    
			    <td><b>Date of Expiry (dd/mm/yy)</b><hr>
			    	<input type="date" name="doe" size="20"/></td>
			   </tr>

			   <tr>
			    <td><b>Blood Type</b><hr>
			    	<input type="text" name="blood" maxlength="2" /></td>
			    
			    <td><b>Maritial Status</b><hr>
			    	<input type="text" name="maritial" size="20"/></td>
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
			    <td><b>Mailing Address</b><hr>
			    <input placeholder="Your Alternate Email Address" type="a_email" name="email" size="50"/></td>
			  </tr>
			</table>
		</div>
		<br><br>

		<div>
			<h4><b>HOME INSTITUTION</b></h4>
		
			<table>
			  <tr>
			    <td><b>Name of Institution</b><hr>
			    <input placeholder="Your Institution" type="instance" name="email" size="50"/></td>
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
				    <td><b>Phone</b><hr>
				    <input placeholder="Phone Number" type="text" name="phone" size="20"/></td>
				    
				    <td><b>Email</b><hr>
				    <input placeholder="Your Email Address" type="email" name="email" size="20"/></td>
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
			    <input placeholder="Faculty" type="text" name="faculty" size="50"/></td>
			  </tr>
			</table>

			<table>
				<tr>
				    <td><b>Starting Year in University</b><hr>
				    <input placeholder="Start Year" type="text" name="s_year" size="20"/></td>
				
				    <td><b>Cumulative GPA</b><hr>
				    <input placeholder="Your GPA" type="email" name="gpa" size="20"/></td>
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
				   <td><b>TOEFL</b></td>
				   <td><input type="name" name="toefl" size="20"/></td>
				   <td><input type="name" name="place_toefl" size="20"/></td>
				   <td><input type="date" name="date_toefl" size="20"/></td>
				</tr>

				<tr>
				   <td><b>IELTS</b></td>
				   <td><input type="name" name="ielts" size="20"/></td>
				   <td><input type="name" name="place_ielts" size="20"/></td>
				   <td><input type="date" name="date_ielts" size="20"/></td>
				</tr>

				<tr>
				   <td><b>OTHERS</b></td>
				   <td><input type="name" name="others" size="20"/></td>
				   <td><input type="name" name="place_others" size="20"/></td>
				   <td><input type="date" name="date_other" size="20"/></td>
				</tr>
			</table>
		</div>

		<br><br>

		<div>
			<h4><b>ENGLISH TEST RESULT(if English is not your first language)</b></h4>	

			<table>
				<tr>
					<td><b>Healt Insurance Name</b><hr>
				    <input placeholder="Your Insurance Name" type="text" name="insurance" size="20"/></td>
				</tr>
				
				<tr>
				    <td><b>Validity</b><hr>
				    <input placeholder="Valid date until" type="text" name="valid_insure" size="20"/></td>
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

				<tr>
				    <td><b>Yes</b><hr>
				    <input placeholder="" type="radio" name="option_y" size="20"/></td>
				    <td><b>No</b><hr>
				    <input placeholder="" type="radio" name="option_n" size="20"/></td>
				</tr>

				<tr>
				    <td><b>If yes, student agree to the accommodation prepared by International Office</b></td>

				   
				</tr>
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
				    <input placeholder="Relationship" type="text" name="relationsip" size="20"/></td>
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
				    <input placeholder="Name" type="text" name="emergency_phone" size="20"/></td>
				    
				    <td><b>Mobile</b><hr>
				    <input placeholder="Relationship" type="text" name="emergency_mobile" size="20"/></td>
					
					<td><b>Mobile</b><hr>
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

		<div>
			<h5>Applicant Signature: </h5>
			<br>
			<h5>Date: </h5>
		</div>

	
	</body>
</html>