<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Complainant Form</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="insert.php" method="POST" id="myform">
				<div class="form-left">
					<h2>Animal Infomation</h2>
					<div class="form-row">
						<select name="animal">
						    <option class="option" value="Dogs">Dogs</option>
						    <option class="option" value="Cats">Cats</option>
						    <option class="option" value="Birds">Birds</option>
						    <option class="option" value="Hamsters/Guinea pigs">Hamsters/Guinea pigs</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<input type="number" name="noofanimals" id="noofanimals" class="noofanimals" placeholder="No.of.Animals" required>
					</div>
                 		<div class="form-row">
                 			<label class="form-label">Situation</label>
						<select name="situation">
						    <option value="accident">Accident</option>
						    <option value="homeless">Homeless</option>
						    <option value="health issue">Health issue</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<input type="textarea" name="description" class="company" id="company" placeholder="Short description of situation" required>
					</div>
						<div class="form-row">
							<label class="form-label">How long can you wait before we reach you?</label>
						</div>
						<div class="form-row">
							<select name="time">
							    <option value="<15mins"><15mins</option>
							    <option value="<30mins"><30mins</option>
							    <option value="<45mins"><45mins</option>
							    <option value="1 hour or more">1 hour or more</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
				</div>
				<div class="form-right">
					<h2>Complainant Details</h2>
					<div class="form-row">
						<input type="text" name="email" class="additional" id="additional" placeholder="Email">
					</div>
					<div class="form-row">
						<input type="text" name="username" class="additional" id="additional" placeholder="Your Username used in this site.">
					</div>
					<div class="form-row">
						<input type="text" name="Name" class="Name" id="street" placeholder="Full Name" required>
					</div> 
						<div class="form-row">
							<input type="text" name="phone_number" class="zip" id="zip" placeholder="Phone number" required>
						</div>
					<div class="form-row">
						<div class="form-row">
							<input type="textarea" name="address" class="code" id="code" placeholder="Location of incident" required>
						</div>
					</div>
					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="submit" class="register" value="Register Complaint">
					</div>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>