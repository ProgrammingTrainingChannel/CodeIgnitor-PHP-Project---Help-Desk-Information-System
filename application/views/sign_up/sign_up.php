 <h2>Sign Up</h2>
   
   <form method="post">  
<table style="width:100%" class="table">
	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman';  width:35%"> 
		First Name: 
		</td>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman';  width:35%"> 
			<input class="form-control" type="text" name="first_name" style = "color:red"/>
		</td>
		<td style = "color : red; font-family : 'times new roman'">
		<span class="error">* <?php echo $first_nameErr;?></span>
		 </td>
	</tr>
	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
		Middle Name:
		 </td>
		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
		<input class="form-control" type="text" name="middle_name" style = "color:red"/>
		 </td>
		<td style = "color : red; font-family : 'times new roman'">
		<span class="error">* <?php echo $middle_nameErr;?></span>

		 </td>
	</tr>

	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		Last Name: 
		</td>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		<input class="form-control" type="text" name="last_name" style = "color:red"/>
		 </td>
		 <td style = "color : red; font-family : 'times new roman'">
		 <span class="error">* <?php echo $last_nameErr;?></span>
		 
		 </td>
	</tr>

	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		Email: 
		</td>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		<input class="form-control" type="text" name="email" style = "color:red"/>
		</td>
		<td style = "color : red; font-family : 'times new roman'">
		 <span class="error">* <?php echo $emailErr;?></span>
	
		 </td>
	</tr>
	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		Phone Number: 
		</td>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		<input class="form-control" type="text" name="phone_no" style = "color:red"/>
		</td>
		<td style = "color : red; font-family : 'times new roman'">
          <span class="error">* <?php echo $phone_noErr;?></span>
		 
		 </td>
	</tr>
	  <tr>
		  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 

		 Gender:
		 </td>
		  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		 <input type="radio" name="gender" value="female">Female
		  <input type="radio" name="gender" value="male">Male
		  </td>
		   <td style = "color : red; font-family : 'times new roman'">
			<span class="error">* <?php echo $genderErr;?></span>
		 
		  </td>
	  </tr>
	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 

		 Username: 
		 </td>
		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		 <input class="form-control" type="text" name="username" style = "color:red"/>
		 </td>

		 <td style = "color : red; font-family : 'times new roman'">
		  <span class="error">* <?php echo $usernameErr;?></span>
		 </td>
	</tr>
	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 

		 Password: 
		 </td>
		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		 <input class="form-control" type="text" name="password" style = "color:red"/>
		 </td>
		 
		 <td style = "color : red; font-family : 'times new roman'">
		 <span class="error">* <?php echo $passwordErr;?></span>
		 </td>
	</tr>
	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'">

		 Confirm Password: 
		 </td>
		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		 <input class="form-control" type="text" name="confirm_password" style = "color:red"/>
		 </td>
		  <td style = "color : red; font-family : 'times new roman'">
		 <span class="error">* <?php echo $confirm_passwordErr;?></span>
		 </td>
	</tr>

	<tr>
		  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 

			   Department:
			   </td>
			   <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		  <select class="form-control" name ="department">
		  <option value="CS">CS </option>
		  <option value="Biology">Biology </option>
		  <option value= "Sociology">Sociology </option>
		  <option value= "Cotm">Cotm </option>
		  <option value= "Publick health">Public Health </option>
		  <option value= "Information technology">Information Technology</option>
		  <option value= "Sport Science">Sport Science</option>
		  <option value= "Geography">Geography </option>
		  <option value= "Mathematics">Mathematics</option>
		  <option value= "Physics">Physics </option>
		  </select>
		  <td style = "color : red; font-family : 'times new roman'">
		 <span class="error">* <?php echo $departmentErr;?></span>
		 </td>
		  </td>
	</tr>
	  <tr>
		  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		  
		  </td>
		   <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		  <input type="submit" class="col-lg-12 btn btn-primary" style="width:30%" name="submit" value="Sign Up">
		  </td>
	  </tr>
  </table>
  	    <a href = "http://localhost/helpdesk/index.php/login/login">already registered? login here</a>

</form>
