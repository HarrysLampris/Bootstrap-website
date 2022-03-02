<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Register Page</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <style>
        body {
            color: #fff;
            background: #eeeeee;
            font-family: 'Roboto', sans-serif;
        }

        .form-control {
            height: 41px;
            background: #f2f2f2;
            box-shadow: none !important;
            border: none;
        }

        .form-control:focus {
            background: #e2e2e2;
        }

        .form-control,
        .btn {
            border-radius: 3px;
        }

        .signup-form {
            width: 490px;
            margin: 30px auto;
        }

        .signup-form form {
            color: #999;
            border-radius: 3px;
            margin-bottom: 15px;
            background: #fff;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .signup-form h2 {
            color: #333;
            font-weight: bold;
            margin-top: 0;
        }

        .signup-form hr {
            margin: 0 -30px 20px;
        }

        .signup-form .form-group {
            margin-bottom: 20px;
        }

        .signup-form input[type="checkbox"] {
            margin-top: 3px;
        }

        .signup-form .row div:first-child {
            padding-right: 10px;
        }

        .signup-form .row div:last-child {
            padding-left: 10px;
        }

        .signup-form .btn {
            font-size: 16px;
            font-weight: bold;
            background: #3598dc;
            border: none;
            min-width: 140px;
        }

        .signup-form .btn:hover,
        .signup-form .btn:focus {
            background: #2389cd !important;
            outline: none;
        }

        .signup-form a {
            color: #fff;
            text-decoration: underline;
        }

        .signup-form a:hover {
            text-decoration: none;
        }

        .signup-form form a {
            color: #3598dc;
            text-decoration: none;
        }

        .signup-form form a:hover {
            text-decoration: underline;

        }

        .signup-form .hint-text {
            padding-bottom: 15px;
            color: #3598dc;
            text-align: center;
        }

        /* Password Requirments */
        .invalid {
            color: red;
        }

        .valid {
            color: green;
        }
    </style>
</head>

<body>

    <div>
        <?php
	
	?>
    </div>

    <!--Navigation bar-->
    <?php 
        include 'nav.php';
    ?>


    <div class="signup-form">
        <form action="sign_up.php" method="post">
            <h2>Sign Up</h2>
            <p>Please fill in this form to create an account!</p>
            <hr>
            <div class="row">
                <div class="form-group">
                    <div class="col-xs-6">
                        <input class="form-control" id="firstname" type="text" name="firstname" placeholder="First Name"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <input class="form-control" id="lastname" type="text" name="lastname" placeholder="Last Name"
                        required>
                </div>
            </div>

            <div class="form-group">
                <input class="form-control" id="email" type="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input class="form-control" id="password" type="password" name="password" placeholder="Password"
                    required>
            </div>

            <div class="form-group">
                <input class="form-control" id="c_password" type="password" name="confirm_password"
                    placeholder="Confirm Password" required="required">
            </div>

            <p style="color: #333;">Password must contain the following:</p>
            <li id="length" class="invalid">Minimum 8 characters</li>
            <li id="capital" class="invalid">A capital (uppercase) letter</li>
            <li id="letter" class="invalid">A lowercase letter</li>
            <li id="number" class="invalid">A number</li>
            <li id="special" class="invalid">A specal character (&$#@_)</li>
            <li id="samepass" class="invalid">Passwords are the same</li>
            <hr>

            <div class="form-group">
                <input class="form-control" id="phonenumber" type="text" name="Phonenumber" placeholder="Phone number"
                    required>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-xs-6">
                        <input class="form-control" id="address" type="text" name="Address" placeholder="Street"
                            required="required">
                    </div>
                </div>
                <div class="form-group">
                    <input class="form-control" id="city" type="text" name="City" placeholder="City"
                        required="required">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-xs-6">
                        <input class="form-control" id="postal_code" type="text" name="postal_code"
                            placeholder="Postal Code" required="required">
                    </div>
                </div>
                <div class="form-group">
                </div>
            </div>

            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a
                        href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-lg" id="register" type="button" name="create">Sign Up</button>
            </div>

        </form>

        <div class="hint-text">Already have an account? <a class="hint-text" href="login.html">Login here</a></div>
    </div>






    <script type="text/javascript">

        //Get the passswords
        var myInput = document.getElementById("password");
        var myInput2 = document.getElementById("c_password");

        //Get the password requirments
        var length = document.getElementById("length");
        var capital = document.getElementById("capital");
        var letter = document.getElementById("letter");
        var number = document.getElementById("number");
        var special_character = document.getElementById("special");
        var samepass = document.getElementById("samepass");

        //Password listener
        myInput.onkeyup = function () {

            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Sepcial Character
            var specialCharacters = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
            if (myInput.value.match(specialCharacters)) {
                special_character.classList.remove("invalid");
                special_character.classList.add("valid");
            } else {
                special_character.classList.remove("valid");
                special_character.classList.add("invalid");
            }

            // Validate length
            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }

            // Validate Password
            var pass1 = document.getElementById("password").value;
            var pass2 = document.getElementById("c_password").value;
            if (pass1.toString() === pass2.toString() && pass1.toString() != "") {
                samepass.classList.remove("invalid");
                samepass.classList.add("valid");
            } else {
                samepass.classList.remove("valid");
                samepass.classList.add("invalid");
            }

        }

        myInput2.onkeyup = function () {

            // Validate Password
            var pass1 = document.getElementById("password").value;
            var pass2 = document.getElementById("c_password").value;
            if (pass1.toString() === pass2.toString() && pass1.toString() != "") {
                samepass.classList.remove("invalid");
                samepass.classList.add("valid");
            } else {
                samepass.classList.remove("valid");
                samepass.classList.add("invalid");
            }
        }

        $(function () {
            $('#register').click(function (e) {


                if (length.classList == "valid" &&
                    capital.classList == "valid" &&
                    letter.classList == "valid" &&
                    number.classList == "valid" &&
                    special_character.classList == "valid" &&
                    samepass.classList == "valid") {


                    var firstname = $('#firstname').val();
                    var lastname = $('#lastname').val();
                    var email = $('#email').val();
                    var password = $('#password').val();
                    var phonenumber = $('#phonenumber').val();
                    var address = $('#address').val();
                    var city = $('#city').val();
                    var postal_code = $('#postal_code').val();


                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'process.php',
                        data: { firstname: firstname, lastname: lastname, email: email, password: password, phonenumber: phonenumber, address: address, city: city, postal_code: postal_code },
                        success: function (data) {
                            Swal.fire({
                                'title': 'Successful',
                                'text': data,
                                'type': 'success'
                            }),
                            setTimeout(' window.location.href =  "login.php"', 1000);
                        },
                        error: function (data) {
                            Swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors while saving the data.',
                                'type': 'error'
                            })
                        }
                    });
                } else {
                    alert("Wrong input values!");
                }
            });
        });

    </script>

</body>

<!--footer-->
<?php 
    include 'footer1.php';
?>

</html>