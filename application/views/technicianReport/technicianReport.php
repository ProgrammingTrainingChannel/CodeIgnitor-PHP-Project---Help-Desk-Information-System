
<form method="post"> 

	
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
<h2>Filter list of requests and their Feedback using Technician Username</h2>
		</td>
</tr>
	<tr>
		<td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
        		Username:
        		 </td>
        		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
        			<select class="form-control" name="username">
        			<?php
        				foreach($users as $row)
        				{
        					echo '<option value="'.$row->username.'">'.$row->username.' ( '.$row->phone_no.' )</option>';
        				}
        			?>
        			</select>
        		 </td>
        		 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">

                 		  </td>
                 		   <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
                 		  <input type="submit" class="col-lg-12 btn btn-primary" name="submit" value=" Show Requests">
                 		  </td>
	</tr>
</table>
<table style="width:100%" class="table">
<tr>
		<td colspan="8" align="center">
<h2>List of Filtered Requests</h2>
		</td>
</tr>
	<tr>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:10%">Request ID</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Username</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Office Number</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Block Number</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Request Date</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:15%">Problem</td>
		<td style = "background-color : green ; color : white; font-family : 'times new roman';  width:20%">Comment</td>
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
		</tr>


	<?php endforeach; ?>

	</tr>
</table>
</form>
