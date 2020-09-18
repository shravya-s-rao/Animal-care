<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donation Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/form-img.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Register to make a change </h2>
                        <p>A Penny for a better cause !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Address</label>
                                    <input type="text" name="company" id="company" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">Organisation</label>
                                        <a href="#" class="form-link">Select</a>
                                    </div>
                                    <div class="select-list">
                                        <select name="meal_preference" id="meal_preference">
                                            <option value="Vegetarian">org1</option>
                                            <option value="Kosher">org2</option>
                                            <option value="Asian Vegetarian">org3</option>
                                            <!-- as and when the organisations are added in the org form, the changes has to be reflected here so add php code to reflect changes made in db -->
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="form-radio"> -->
                                    <!-- <div class="label-flex"> -->
                                        <!-- <label for="payment">Payment Mode</label> -->
                                        <!-- <a href="#" class="form-link">Payment Detail</a> -->
                                    <!-- </div> -->
                                    <!-- <div class="form-radio-group">             -->
                                        <!-- <div class="form-radio-item"> -->
                                            <!-- <input type="radio" name="payment" id="cash" checked> -->
                                            <!-- <label for="cash">Cash</label> -->
                                            <!-- <span class="check"></span> -->
                                       <!-- </div> -->
                                        <!-- <div class="form-radio-item"> -->
                                            <!-- <input type="radio" name="payment" id="cheque"> -->
                                            <!-- <label for="cheque">Cheque</label> -->
                                            <!-- <span class="check"></span> -->
                                        <!-- </div> -->
                                        <!-- <div class="form-radio-item"> -->
                                            <!-- <input type="radio" name="payment" id="demand"> -->
                                            <!-- <label for="demand">Demand Draf</label> -->
                                            <!-- <span class="check"></span> -->
                                        <!-- </div> -->
                                    <!-- </div>  -->
                                <!-- </div> -->
                                <div class="form-input">
                                    <label for="chequeno">DD / Cheque No.</label>
                                    <input type="text" name="chequeno" id="chequeno" />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">Drawn on ( Bank Name)</label>
                                    <input type="text" name="blank_name" id="blank_name" />
                                </div>
                                <div class="form-input">
                                    <label for="payable">Payable at</label>
                                    <input type="text" name="payable" id="payable" />
                                </div>
                            </div>
                        </div>
                        <div class="form-input">
                                    <label for="payus">Donate us(amt):</label>
                                    <input type="number" name="amt" id="payable" />
                                </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>