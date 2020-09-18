<?php  
include('db.php');

if(isset($_POST['submit']))
{
	$a=$_POST['q4_organisationFounderchairman[first]'];
	$b=$_POST['q4_organisationFounderchairman[last]'];
	$c=$_POST['q6_organisationName'];
	
	$e=$_POST['q12_organisationContact[area]'];
	$f=$_POST['q12_organisationContact[phone]'];
	$d=$_POST['q5_organisationEmail'];
	$g=$_POST['q3_locationOf[addr_line1]'];
	$h=$_POST['q3_locationOf[addr_line2]'];
	$i=$_POST['q3_locationOf[city]'];
	$j=$_POST['q3_locationOf[state]'];
	$k=$_POST['q3_locationOf[postal]'];
	$l=$_POST['q11_typeOf'];

	$qry=mysqli_query($con,"INSERT INTO `organisation`(`q4_organisationFounderchairman[first]`, `q4_organisationFounderchairman[last]`, `q6_organisationName`, `q12_organisationContact[area]`, `q12_organisationContact[phone]`,`q5_organisationEmail`,`q3_locationOf[addr_line1]`,`q3_locationOf[addr_line2]`,`q3_locationOf[city]`,`q3_locationOf[state]`,`q3_locationOf[postal]`,`q11_typeOf`) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')") or die(mysqli_error($con));

	if($qry==true)
	{
		echo "
          <script>
              alert('registered successfully');
              window.location='http://13.233.56.180/project/Login%20page/Login_v17/HomePageadmin/goodweb/aboutorg.php';
              </script>
		";
	}
	else
	{
		echo "
           <script>
              alert('failed');
              window.location='http://13.233.56.180/project/Login%20page/Login_v17/HomePageadmin/goodweb/aboutorg.php';
              </script>
		";
	}
