 <?php    
 include('db.php');

if(isset($_POST['submit']))
 {
	// if(!empty($_POST["registration"]))
	// {
		// $sql="
				// INSERT INTO registration (name)
				// SELECT '".$_POST["registration"]."' FROM registration
				// WHERE NOT EXISTS(
				// SELECT name FROM registration WHERE name='".$_POST["registration"]."'
				 // ) LIMIT 1
		 // ";
		// if(mysqli_query($connect, $sql))
	   // {
		 // $insert_id=mysqli_insert_id($connect);
			// if($insert_id !='')
			 // {
				 // header("location:data_already_insert.php?inserted=1");
			 // }
			 //else
			//{
				// header("location:data_already_insert.php?already=1");
			// }
		// }
	// }
	// else
	// {
		// header("location:data_already_insert.php?required=1");
	// }
// }
// if(isset($_GET["inserted"]))
// {
	// $message="name inserted";
// }
// if(isset($_GET["already"]))
// {
	// $message="name already inserted";
// }
// if(isset($_GET["required"]))
// {
	// $message = "name required";
// }

// {
	$n=$_POST['name'];
	$e=$_POST['email'];
	$p=$_POST['phone_number'];
	$ad=$_POST['address'];
	$amt=$_POST['amount'];
	$ct=$_POST['coursetype'];
	$cot=$_POST['orgname'];
	$qry=mysqli_query($con,"INSERT INTO `donation`(`name`,`email`,`phone_number`,`address`,`amount`,`coursetype`,`orgname`) VALUES('$n','$e','$p','$ad','$amt','$ct','$cot')") or die(mysqli_error($con));

	if($qry==true)
	{
		echo "
          <script>
              alert('Donation successful');
              window.location.href='http://13.233.56.180/project/Login%20page/Login_v17/HomePage/goodweb/index.php';
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
}
 ?>  