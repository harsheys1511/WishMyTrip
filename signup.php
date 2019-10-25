<?php

if(isset($_POST['submit']))
{

    header("Location: index.php");
}


?>
<html>
<head>
    <title>Wish My Trip</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Styles/style.css">
</head>

<body class="bg" background="Images/cr.jpg">
<div class="container h-150">
    <div class="d-flex justify-content-center h-100">
        <div class="usercard">
            <div class="d-flex justify-content-center">
            
            </div>
            <div class="d-flex justify-content-center form_container">
                <form method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" id="username" class="form-control input_user"  placeholder="User Name">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="email" id="email" class="form-control input_user"  placeholder="User Email">
                    </div>
                 
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" id="password"class="form-control input_pass" placeholder="Password">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone-square-alt"></i></i></span>
                        </div>
                        <input type="text" name="phone" id="phone" class="form-control input_user"  placeholder="Phone Number">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-calendar-day"></i></i></span>
                        </div>
                        <input type="date" name="dob" id="dob" class="form-control input_user"  placeholder="Date of birth">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-address-card"></i></i></span>
                        </div>
                        <textarea placeholder="Address" width="150"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login-container">
                <input type="submit" name="submit"  value="Signup" class="btn login_btn">
            </div>
                    </div>
                </form>
            </div>
           
            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    Already have an account? <a href="#" class="ml-2">Login</a>
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
