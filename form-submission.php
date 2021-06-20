<!DOCTYPE html>
<html>
<head>
	<title> Survey Form </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Registration Form</h1>

<form action="form-submission.php" method="POST" autocomplete="on" novalidate>

<!-------------basic information sector------------------->

<fieldset> <legend>Basic Information:</legend><br>
	
	    <label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname"><br><br>

		<label for="gender"> Gender:</label>
		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label>
		<input type="radio" id="gender" name="gender" value="gender">
		<label for="gender">Female</label> <br><br>

		 <label for="birthday">Birthday:</label>
         <input type="date" id="birthday" name="birthday"><br><br>

        <label for="reg">Religion:</label>
		<select id="reg">
			<option value="islam">Islam</option>
			<option value="christianity">Christianity</option>
			<option value="hinduism">Hinduism</option>
			<option value="buddhism">Buddhism</option>
			<option value="others">otheres</option>
		</select><br><br></fieldset>
    
<!------------------------Contact Information Section---------->

<fieldset><legend>Contact Information:</legend><br>

     	<label for="prsadd">Pressent Address:</label>
		<input type="text" id="prsadd" name="prsadd"><br><br>

		<label for="pemadd">Permanent Address :</label>
		<input type="text" id="pemadd" name="pemadd"><br><br>

		<label for="email">Enter Email Adress : </label>
		<input type="email" id="email" name="email"><br><br>

		<label for="phone">Enter Phone Number :</label>
		<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br><br>

		<label for="link">Personal Website Lienk :</label>
		<input type="text" id="link" name="link"><br><br></fieldset>

<!---------------------Account Information Section---------------->

<fieldset> <legend>Basic Information:</legend><br>
	
	    <label for="username">User Name:</label>
		<input type="text" id="username" name="username"><br><br>

		<label for="pwd">Password:</label>
		<input type="password" id="pwd" name="pwd"> <br> <br>

<!----------------------------submit button at the end------------------->

        <input type="submit" name="submit" value="Submit"></form></fieldset>


    </form></body></html>