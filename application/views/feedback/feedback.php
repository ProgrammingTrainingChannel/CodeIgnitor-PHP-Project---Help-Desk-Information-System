
<form method="post"> 
	
<table style="width:100%" class="table">
	<tr>
		<td colspan="8" align="center">
			<h2>List of Requests</h2>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center" style = "color : blue; font-family : 'times new roman'">
			<h3><?php echo $message;?></h3>
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
		<td style = "background-color : green ; color : white; font-family : 'times new roman'"> Feedback </td>            
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
			<td style = "color : red; font-family : 'times new roman'">
				<span class="error">* <?php echo $request_idErr;?></span>
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

   
   
   
<table style="width:100%" class="table">
<tr>
		<td colspan="8" align="center">
<h2>Add Feedback for Request</h2>
		</td>
</tr>

	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
			feedback date:
		</td>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
			<input class="form-control" type="date" name="feedback_date" style = "color:red"/>
		</td>
		<td style = "color : red; font-family : 'times new roman'">
			<span class="error">* <?php echo $feedback_dateErr;?></span>
		</td>
	</tr>
	<tr>
		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
		  		feed back:
		 </td>
		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
		  	<textarea class="form-control" name="feedback" rows="7" cols="60"> </textarea>
		 </td>
		 <td style = "color : red; font-family : 'times new roman'">
			 <span class="error">* <?php echo $feedbackErr;?></span>
		 </td>
	 </tr>
	 <tr>
		  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'"> 
		  </td>
		  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
		  		<input type="submit" class="col-lg-12 btn btn-primary" style="width:30%" name="submit" value="send">
		  </td>
		  <td>
		  </td>
	 </tr>
 </table>

 	<table style="width:100%" class="table">
     <tr>
     		<td colspan="8" align="center">
     <h2>List of feedbacks</h2>
     		</td>
     </tr>
     	<tr>
     		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:10%">feedback id </td>
     		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%"> request id </td>
     		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">username</td>
     		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">feedback date</td>
     		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">feedback</td>


     	</tr>

     	<tr>


     		<?php foreach ($feedbacks as $feedback): ?>

     		<tr>
     			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $feedback['feedback_id']; ?></td>
     			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $feedback['request_id']; ?></td>
     			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $feedback['username']; ?></td>
     			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $feedback['feedback_date']; ?></td>
     			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'"><?php echo $feedback['feedback']; ?></td>

     		</tr>


     	<?php endforeach; ?>

     	</tr>
     </table>

</form>
