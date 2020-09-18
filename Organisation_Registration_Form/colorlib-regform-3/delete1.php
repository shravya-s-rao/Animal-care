<?php

$id=$_GET['id'];
include('db.php');
$sql=mysqli_query($con,"DELETE FROM `organisation` WHERE q4_organisationFounderchairman[first]='$q4_organisationFounderchairman[first]'");

if($sql==true)
	{
		echo "
          <script>
              alert('deleted');
              window.location='index.php';
              </script>
		";
	}
	else
	{
		echo "
           <script>
              alert('failed');
              window.location='index.php';
              </script>
		";
	}
?>