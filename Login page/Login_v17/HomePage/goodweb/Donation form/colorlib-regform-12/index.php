<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donation Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" action="insert.php" class="appointment-form" id="appointment-form">
                <h2>Donation form</h2>
                <div class="form-group-1">
                    <input type="text" name="name" id="name" placeholder="Your Name" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="number" name="phone_number" id="phone_number" placeholder="Phone number" required />
                    <input type="textarea" name="address" id="title" placeholder="Address" required />
                    <input type="number" name="amount" id="amount" placeholder="Amount" required />
                    <h3>How would you like to pay?</h3>
                    <div class="select-list">
                                <select name="coursetype" id="course_id">
                                    <option disabled="disabled" selected="selected"></option>
                                    <option>Cash</option>
                                    <option>Cheque</option>
                                    <option>Demand Draft</option>
                                </select>
                                <div class="select-dropdown"></div>
                        </div>
                    <h3>who would you like to pay?</h3>
                     <div class="select-list">
                                <select name="orgname" id="course_id">
                                     <?php
                                         $mysqli= NEW MySQLi('localhost','root','root123','animalrescue');
                                         $res=$mysqli->query("SELECT oname FROM organisation");
                                            while($rows = $res->fetch_assoc()){
                                            $oname=$rows['oname'];
                                            echo "<option>$oname</option>";
                                          }
                                        ?> 
                                    </select>
                                <div class="select-dropdown"></div>
                        </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Confirm Payment" />
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>