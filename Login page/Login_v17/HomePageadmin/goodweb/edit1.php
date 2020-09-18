
<?php 
$id=$_GET['id'];
include('db.php');
$sql=mysqli_query($con,"SELECT * FROM `organisation` WHERE id='$id'");
$res=mysqli_fetch_array($sql);  
if(isset($_POST['submit']))
{
	$n=$_POST['q12_organisationContact[phone]'];
	$m1=$_POST['q3_locationOf[addr_line1]'];
	$m2=$_POST['q3_locationOf[addr_line2]'];

	$qry=mysqli_query($con,"UPDATE `organisation` SET `q12_organisationContact[phone]`='$n',`q3_locationOf[addr_line1]`='$m1',`q3_locationOf[addr_line2]`='$m2'WHERE id='$id'") or die(mysqli_error($con));

	if($qry==true)
	{
		echo "
          <script>
              alert('updated');
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
}
?>
</body>
</html>