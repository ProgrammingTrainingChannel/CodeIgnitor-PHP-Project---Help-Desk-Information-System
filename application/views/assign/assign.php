
<form method="post"> 

<table style="width:100%" class="table">
	<tr>
		<td colspan="8" align="center">
			<h2>List of Requests</h2>
		</td>
	</tr>

	<tr>
		<td colspan="3" align="center" style = "color : blue; font-family : 'times new roman'">
			<h2><?php echo $message;?></h2>
		</td>
	</tr>

	<tr>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:10%">Request ID</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Username</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Office Number</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Block Number</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Request Date</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:10%">Problem</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Comment</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman'"> Assign </td>           
		</tr>
		
		<tr>
		
		
		<?php foreach ($requests as $request): ?>
		
		<tr>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $request['request_id']; ?></td>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $request['username']; ?></td>
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
<h2>Assign Technician for Request</h2>
		</td>
</tr>
	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
		Username:
		 </td>
		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">


			<select class="form-control" name="username">
				<option value="0"> Select a username </option>
			<?php
				foreach($users as $row)
				{
					echo '<option value="'.$row->username.'">'.$row->username.' ( '.$row->phone_no.' )</option>';
				}
			?>
			</select>
		 </td>
		 <td>
			<span class="error" style = "color : red; font-family : 'times new roman'">* <?php echo $usernameErr;?></span>
		 </td>
	</tr>
	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
			Assign Date:
		</td>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
			<input class="form-control" type="date" name="assign_date" style = "color:red"/>
		 </td>
		 <td>
			<span class="error" style = "color : red; font-family : 'times new roman'">* <?php echo $assign_dateErr;?></span>
		 </td>
	</tr>
	 <tr>
		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
		 	<label> Remark: </label>
		</td>  
		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
		  	<textarea class="form-control" name="remark" rows="7" cols="30"> </textarea>
		 </td>
		 <td>
		 </td>
	 </tr> 
  <tr>
	  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
	 
	  </td>
	   <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
	  	<input type="submit" class="col-lg-12 btn btn-primary" style="width:30%" name="submit" value="assign">
	  </td>
	  <td>
	  </td>
  </tr>
</table>
</form>
