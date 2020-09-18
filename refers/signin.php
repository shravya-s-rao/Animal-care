<?php
include('db.php');
if(isset($_POST['submit']))
{
	$u=$_POST['username'];
	$pa=$_POST['pass'];
	$qry=mysqli_query($con,"SELECT * from registration where username='$u' and pass='$pa'");
    $res=mysqli_fetch_array($qry);
	if($res['username']==$u)
        {
            if($res['pass']==$pa)
            {
              echo "
              <script>
              alert('login succesfull');
              window.location='HomePage/goodweb/index.php';
              </script>
              ";
            }
            else
            {
              echo "
              <script>
              alert('unsuccesfull');
              window.location='login.php';
              </script>
              ";
            }
        }
        else
        {
              echo "
              <script>
              alert('wrong username and password');
              window.location='login.php';
              </script>
              ";
        }
}
?>