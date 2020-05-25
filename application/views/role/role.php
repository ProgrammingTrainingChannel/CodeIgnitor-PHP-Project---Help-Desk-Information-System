
<form method="post">

<table style="width:100%" class="table">
<tr>
		<td colspan="8" align="center">
<h2>Filter list of users by there department</h2>
		</td>
</tr>
	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
        		Department:
        		 </td>
        		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
        			<select class="form-control" name="department">
        			<?php
        				foreach($departments as $row)
        				{
        					echo '<option value="'.$row->department.'">'.$row->department.' </option>';
        				}
        			?>
        			</select>
        		 </td>
        		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">

                 		  </td>
                 		   <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
                 		  <input type="submit" class="col-lg-12 btn btn-primary" name="submit" value=" Filter Users ">
                 		  </td>
	</tr>
</table>

	<table style="width:100%">
<tr>
		<td colspan="7" align="center">
<h2>List of Users</h2>
		</td>
</tr>
	<tr>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">First Name</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Middle Name</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Last Name</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Email</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Department</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:20%">Username</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman'"> Assign Role</td>         
		</tr>
		
		<tr>
		
		
		<?php foreach ($users as $user): ?>
		
		<tr>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $user['first_name']; ?></td>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $user['middle_name']; ?></td>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $user['last_name']; ?></td>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $user['email']; ?></td>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $user['department']; ?></td>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $user['username']; ?></td>
			<td > <input  type ="radio" name="username" value= "<?php echo $user['username']; ?>"></td>
		</tr>
		
	
	<?php endforeach; ?>
	
		</tr>
	</table>
	
	<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


   
   <form method="post">  
<table style="width:50%">
<tr>
		<td colspan="2" align="center">
<h2>Assign Role for User</h2>
		</td>
</tr>
	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		Role: 

		  </td>
		</td>
		  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		  <select class="form-control" name ="type">
		  <option value="0"> User </option>
		  <option value="1"> HardwareAndSoftware Team Leader </option>
		  <option value="2"> OfficeMachine Team Leader </option>
		  <option value="3"> InternetAndOther Team Leader </option>
		  <option value= "4"> HardwareAndSoftware Technician </option>
		  <option value= "5"> OfficeMachine Technician </option>
		  <option value= "6"> InternetAndOther Technician </option>
		  <option value= "7"> Administrator </option>
		  </select>
		  

		 </td>
	</tr>
  <tr>
	  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
	 
	  </td>
	   <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
	  <input type="submit" name="submit" value="Assign Role">  
	  </td>
  </tr>
  </table>
</form>
