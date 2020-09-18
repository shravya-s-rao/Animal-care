<?php  
include('db.php');
echo "loading.....";
if(isset($_POST['submit']))
{
	$a=$_POST['ofname'];
	$b=$_POST['oname'];
	$c=$_POST['gender'];
	$e=$_POST['email'];
	$f=$_POST['phone'];
	// $d=$_POST['q5_organisationEmail'];
	$g=$_POST['username'];
	$h=$_POST['pass'];
	// $i=$_POST['q3_locationOf[city]'];
	// $j=$_POST['q3_locationOf[state]'];
	// $k=$_POST['q3_locationOf[postal]'];
	// $l=$_POST['q11_typeOf'];
	$qry=mysqli_query($con,"INSERT INTO `organisation`(`ofname`,`oname`,`gender`,`email`,`phone`,`username`,`pass`)VALUES('$a','$b','$c','$e','$f','$g','$h')")or die(mysqli_error($con));

	if($qry==true)
	{
		echo "
          <script>
             alert('Registered successfully');
             window.location.href='http://13.233.56.180/project/Login%20page/Login_v17/HomePageadmin/goodweb/aboutorg.php';
              </script>
		";
	}
	else
	{
	echo "
          <script>
            alert('failed');
            window.location.href='http://13.233.56.180/project/Login%20page/Login_v17/HomePageadmin/goodweb/Organisation_Registration_Form.php';
              </script>
		";
	}
}
?>