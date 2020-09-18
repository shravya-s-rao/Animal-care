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
	$a=$_POST['animal'];
	$n=$_POST['noofanimals'];
	$s=$_POST['situation'];
	$d=$_POST['description'];
	$t=$_POST['time'];
	$e=$_POST['email'];
	$u=$_POST['username'];
	$na=$_POST['Name'];
	$p=$_POST['phone_number'];
	$ad=$_POST['address'];
	

	$qry=mysqli_query($con,"INSERT INTO `complainant`(`animal`,`noofanimals`,`situation`,`description`,`time`,`email`,`username`,`Name`,`phone_number`,`address`) VALUES('$a','$n','$s','$d','$t','$e','$u','$na','$p','$ad')") or die(mysqli_error($con));

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
              window.location='index.php';
              </script>
		";
	}
}
 ?>  