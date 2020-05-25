
<form method="post"> 
<table style="width:100%" class="table">
<tr>
		<td colspan="8" align="center">
<h2>List of Requests</h2>
		</td>
</tr>
	<tr>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:10%">Request ID</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Office Number</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Block Number</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Request Date</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Problem</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:20%">Comment</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman'"> Appointment </td>         
	</tr>
		
	<tr>
		
		<?php foreach ($requests as $request): ?>
		
		<tr>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $request['request_id']; ?></td>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $request['office_no']; ?></td>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $request['block_no']; ?></td>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $request['request_date']; ?></td>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $request['problem']; ?></td>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $request['comment']; ?></td>
			<td > <input  type ="radio" name="request_id" value= "<?php echo $request['request_id']; ?>"></td>
			<td>
				<span class="error" style = "color : red; font-family : 'times new roman'">* <?php echo $request_idErr;?></span>
			 </td>

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
<table style="width:100%" class="table">
<tr>
		<td colspan="8" align="center">
<h2>Appointment Form</h2>
		</td>
</tr>

	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
			Appointment Date:
		</td>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
			<input class="form-control" type="date" name="appointment_date" style = "color:red"/>
		</td>
		 <td style = "color : red; font-family : 'times new roman'">
		 	<span class="error">* <?php echo $appointment_dateErr;?></span>
		 </td>
	</tr>
	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
			Solving Date:
		</td>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
			<input class="form-control" type="date" name="solving_date" style = "color:red"/>
		 </td>
		 <td style = "color : red; font-family : 'times new roman'">
			<span class="error">* <?php echo $solving_dateErr;?></span>
		 </td>
	</tr>
	 <tr>
		  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">

		<label>  Remark: </label>
		</td>  
		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
		  <textarea class="form-control" name="remark" rows="7" cols="30">I will come and fix the issue</textarea>
		  </td>
		  <td style = "color : red; font-family : 'times new roman'">
			<span class="error">* <?php echo $remarkErr;?></span>
		 </td>
	</tr>
	 <tr>
		  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		 
		  </td>
		   <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		  <input type="submit" class="col-lg-12 btn btn-primary" style="width:30%" name="submit" value=" Add Appointment">
		  </td>
		  <td style = "color : red; font-family : 'times new roman'">

		 </td>
	  </tr>

</table>

	<table style="width:100%" class="table">
    <tr>
    		<td colspan="8" align="center">
    <h2>List of Appointments</h2>
    		</td>
    </tr>
    	<tr>
    		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:10%">username </td>
    		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%"> appointment date</td>
    		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">solving date</td>
    		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">appointment id</td>
    		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">request id</td>
    		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">remark</td>

    	</tr>

    	<tr>


    		<?php foreach ($appointments as $appointment): ?>

    		<tr>
    			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $appointment['username']; ?></td>
    			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $appointment['appointment_date']; ?></td>
    			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $appointment['solving_date']; ?></td>
    			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $appointment['appointment_id']; ?></td>
    			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $appointment['request_id']; ?></td>
    			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $appointment['remark']; ?></td>
    		</tr>


    	<?php endforeach; ?>

    	</tr>
    </table>

</form>
