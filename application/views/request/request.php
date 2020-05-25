

   
  <form method="post">  
<table style="width:100%" class="table">
	<tr>
		<td colspan="3" align="center">
		   <h1>Maintenance Request Form</h1>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center" style = "color : blue; font-family : 'times new roman'">
			<h3><?php echo $message;?></h3>
		</td>
	</tr>
		 <span class="error" style = "color : red; font-family : 'times new roman'"> <?php echo $usernameErr;?></span>


		<tr>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman';  width:35%">
				Request Date:
			</td>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman';  width:35%">
				<input class="form-control" type="date" name="request_date" style = "color:red"/>
			</td>
			<td style = "color : red; font-family : 'times new roman'">
				<span class="error">* <?php echo $request_dateErr;?></span>
			</td>
		</tr>

		<tr>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
				Block Number:
			 </td>
			 <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
				<input class="form-control" type="number" name="block_no" style = "color:red"/>
			 </td>
			 <td style = "color : red; font-family : 'times new roman'">
				<span class="error">* <?php echo $block_noErr;?></span>
			 </td>
		</tr>

		<tr>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
				Office Number:
			</td>
			<td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
				<input class="form-control" type="number" name="office_no" style = "color:red"/>
			 </td>
			 <td style = "color : red; font-family : 'times new roman'">
				<span class="error">* <?php echo $office_noErr;?></span>
			 </td>
		</tr>
		 <tr>
			  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">

				   Problem :
			  </td>
			  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
				  <select name="problem" class="form-control" >
						<option value="0"> Select a Problem </option>
					  <option value="1"> Hardware and software problem</option>
					  <option value= "2">office machine problem</option>
					  <option value= "3">Internet and others</option>
				  </select>
			  </td>
			  <td style = "color : red; font-family : 'times new roman'">
				 <span class="error">* <?php echo $problemErr;?></span>
			  </td>
		 </tr>
		<tr>
			  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
				  <label>problem description: </label>

			  </td>
			  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
					<textarea class="form-control" name="comment" rows="7" cols="60"> </textarea>
			  </td>
		</tr>
		<tr>
			  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">

			  </td>
			  <td style = "background-color : aqua ; color : red; font-family : 'times new roman'">
				<input type="submit" class="col-lg-12 btn btn-primary" style="width:50%" name="submit" value="Add New Request">
			  </td>
		</tr>
</table>
</form>
