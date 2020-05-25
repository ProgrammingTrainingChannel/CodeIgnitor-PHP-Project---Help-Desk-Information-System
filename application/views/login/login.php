
<form method="post">  
<table style="width:50%">
<tr>
		<td colspan="2" align="center">
<h2>Login Form</h2>
		</td>
</tr>
	<tr>
		<td colspan="3" style = "color : red; font-family : 'times new roman'">
			<span class="error">* <?php echo $errorMessage;?></span>
		</td>
	</tr>
	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman';  width:35%"> 
		Username: 
		</td>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman';  width:35%"> 
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
		   <td colspan="3" align="center" style = "background-color : aqua ; color : red; font-family : 'times new roman'">
		  <input type="submit" class="col-lg-12 btn btn-primary" style="width:30%" name="submit" value="LOGIN">
		  </td>
	  </tr>
  </table>

<br/>
  <a href = "http://localhost/helpdesk/index.php/sign_up/sign_up">No Account Yet? Sign Up</a>
</form>

