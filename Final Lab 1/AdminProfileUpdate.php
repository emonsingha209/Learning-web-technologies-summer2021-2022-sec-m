<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Update Profile | Admin</title>
</head>
		<form method="post" action="AdminProfileUpdateCheck.php" enctype="">
			<fieldset>
				<legend>Update Profile</legend>
				<table>
					<tr>
						<td>User Name</td>
						<tr></tr>
						<td><input type="text" name="upusername" value="" ></td>
					</tr>
					<tr>
						<td>Email</td>
						<tr></tr>
						<td><input type="email" name="upemail" value="" ></td>
					</tr>
					<tr>
						<td>Password</td>
						<tr></tr>
						<td><input type="password" name="upPassword" value="" ></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<tr></tr>
						<td><input type="password" name="upConfirm_Password" value="" ></td>
					</tr>
					<tr>
						<td>Address</td>
						<tr></tr>
						<td><input type="text" name="upaddress" value="" ></td>
						<tr></tr>
					</tr>
					</tr>
						<td>Division</td>
						<tr></tr>
						<td>
							<select name="updivision">
							    <option value="">select option</option>
								<option value="Dhaka">Dhaka</option>
								<option value="Chittagong">Chittagong</option>
								<option value="Sylhet">Sylhet</option>
								<option value="Rangpur">Rangpur</option>
								<option value="Khulna">Khulna</option>
								<option value="Barishal">Barishal</option>
								<option value="Rajshahi">Rajshahi</option>
								<option value="Mymensingh">Mymensingh</option>
							</select>
						</td>
						<tr></tr>
					</tr>
					<tr>
						<td>Postal Code</td>
						<tr></tr>
						<td><input type="number" name="uppostalcode" value="" ></td>
					</tr>
					<tr>
						<td>Contact Number</td>
						<tr></tr>
						<td><input type="tel" name="upcontnum" value="" ></td>
					</tr>
					<tr>
						<td>Gender</td>
						<tr></tr>
						<td>
							<input type="radio" name="upgender" value= "Male" > Male
							<input type="radio" name="upgender" value= "Female" > Female
							<input type="radio" name="upgender" value= "Other" > Other
						</td>
					</tr>
					<tr>
						<td>Date Of Birth</td>
						<tr></tr>
						<td><input type="date" name="updob" value="" ></td>
					</tr>
					<tr>
						<td>Blood Group</td>
						<tr></tr>
						<td>
							<select name="upBloodGroup">
							    <option value="">select option</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
							</select>
						</td>
					<tr>
						<td>CV</td>
						<tr></tr>
						<td><input type="file" name="upcv" value="" ></td>
					</tr>
					<tr>
						<td>Upload a picture</td>
						<tr></tr>
						<td><input type="file" name="uppicture" value="" ></td>
					</tr>
					<tr>
						<td>
						<br> </br>
							<input type="submit" name="" value="Update">
							<a href="Admin.php"> Back </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>
<?php
	}
	else {
		header('location:LogIn.html');
	}
?>