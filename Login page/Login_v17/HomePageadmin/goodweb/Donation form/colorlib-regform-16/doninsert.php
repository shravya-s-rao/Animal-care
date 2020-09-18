<?php  
include('db.php');

if(isset($_POST['submit']))
{
	$f=$_POST['first_name'];
	$l=$_POST['last_name'];
	$c=$_POST['company'];
	$e=$_POST['email'];
	$p=$_POST['phone_number'];
    $m=$_POST['meal_preference'];
   // $pa=$_POST['payment'];
	$ch=$_POST['chequeno'];
	$b=$_POST['blank_name'];
	$pay=$_POST['payable'];
	// $s=$_POST['slide'];

	$qry=mysqli_query($con,"INSERT INTO `donation`(`first_name`,`last_name`,`company`,`email`,`phone_number`,`chequeno`,`blank_name`,`payable`)VALUES('$f','$l','$c','$e','$p',$ch','$b','$pay')") or die(mysqli_error($con));

	if($qry==true)
	{
		echo "
          <script>
              alert('registered successfully');
              window.location.href='http://13.233.56.180/project/Login%20page/Login_v17/HomePageadmin/goodweb/index.php';
              </script>
		";
	}
	else
	{
		echo "
           <script>
              alert('failed');
              window.location.href='http://13.233.56.180/project/Login%20page/Login_v17/HomePageadmin/goodweb/Donation form/colorlib-regform-16/index.php';
              </script>
		";
	}
}
?>