<?php
include_once('hms/include/config.php');

if (isset($_POST['submit'])) {

	$name = $_POST['fullname'];
	$email = $_POST['emailid'];
	$mobileno = $_POST['mobileno'];
	$dscrption = $_POST['description'];

	$query = mysqli_query($con, "insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");

	echo "<script>alert('Your information succesfully submitted');</script>";
	echo "<script>window.location.href ='contact.php'</script>";
}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>KenyaEMR | Contact us</title>
	<!-- Favicon Link -->
	<link rel="icon" href="images/favicon.ico" type="image/gif" sizes="16x16">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

	<!-- Local CSS link -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- Start of Header -->
	<div class="header">
		<div class="wrap">
			<!-- Start of  Logo -->
			<div class="logo">
				<a href="index.html" style="font-family: 'Open Sans', sans-serif; font-size: 30px;">KenyaEMR | Health Management System</a>
			</div>
			<!--end-logo-->

			<!--start-top-nav-->
			<div class="top-nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li class="active"><a href="contact.php">contact</a></li>
				</ul>
			</div>
			<div class="clear"> </div>
			<!--end-top-nav-->
		</div>
		<!--end-header-->
	</div>


	<div class="clear"> </div>

	<!--Start of Wrap-->
	<div class="wrap">
		<div class="contact">
			<div class="section group">
				<div class="col span_1_of_3">
					<div class="company_address">
						<h2>UoN CRISSP Project Address :</h2>
						<p>35 Church Road,</p>
						<p>Westlands,</p>
						<p>Kenya</p>
						<p>Phone:(254) 715 303 307</p>
						<p>Fax: (000) 000 00 00 0</p>
						<p>Email: <span>info@uoncrissp.com</span></p>
					</div>
				</div>
				<div class="col span_2_of_3">
					<div class="contact-form">
						<h2>Contact Us</h2>
						<form name="contactus" method="post">
							<div>
								<span><label>NAME</label></span>
								<span><input type="text" name="fullname" required="true" value=""></span>
							</div>
							<div>
								<span><label>E-MAIL</label></span>
								<span><input type="email" name="emailid" required="ture" value=""></span>
							</div>
							<div>
								<span><label>MOBILE.NO</label></span>
								<span><input type="text" name="mobileno" required="true" value=""></span>
							</div>
							<div>
								<span><label>Message Description</label></span>
								<span><textarea name="description" required="true"> </textarea></span>
							</div>
							<div>
								<span><input type="submit" name="submit" value="Submit"></span>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
		<div class="clear"> </div>
	</div>
	<!-- End of Wrap -->

	<div class="clear"> </div>

	<!-- Start of Footer -->
	<div class="footer">
		<div class="wrap">
			<div class="footer-left">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="contact.php">contact</a></li>
				</ul>
			</div>

			<div class="clear"> </div>
		</div>
	</div>
	<!-- End of Footer -->

</body>

</html>