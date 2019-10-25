<?php
/**
 * Created by PhpStorm.
 * User: harsh
 * Date: 2019-10-22
 * Time: 4:00 PM
 */
?>
<html>
<head>
    <title>Wish My Trip</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Styles/loginstyle.css">
</head>

<body class="bg" background="Images/cr.jpg">
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="usercard">
            <div class="d-flex justify-content-center">
            <div class="logocontainer">
                <img src="Images/WishMyTrip.png" alt="Wish My Trip" class="brandlogo">
            </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" id="username" class="form-control input_user" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control input_pass" required>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="d-flex justify-content-center mt-3 login-container">
                <button type="button" name="button" id="login" class="btn login_btn">Login</button>
            </div>
            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    Don't have an account? <a href="#" class="ml-2">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">Forget your Password</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/9fe846089b.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
</body></html>
