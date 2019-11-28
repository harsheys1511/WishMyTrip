
<html>
<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginstyle.css')}}">
    @include('header')




</head>
<body>

<div class="container">
    <div class="d-flex h-100 mt-2 mb-2">
        <div class="w-50 bg-dark text-light">
            <div class="ml-3">
                <h2>Ask Us Anything</h2>
                <p>Please dont hesitate to contact us regarding any question about our services</p>
                <form>
                    <h2 class="text-center">Inquiry Form</h2>
                    <h5>Name</h5>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" id="username" class="form-control input_user"
                               placeholder="Your Email ID" required>
                    </div>
                    <h5>Email ID</h5>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
                        </div>
                        <input type="text" name="username" id="username" class="form-control input_user"
                               placeholder="Your Email ID" required>
                    </div>
                    <h5>Comments</h5>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-comments"></i></span>
                        </div>
                        <textarea type="text" name="username" id="username" class="form-control input_user"
                                  placeholder="Your Email ID" required> </textarea>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login-container w-50">
                        <button type="button" name="button" id="login" class="btn login_btn bg-secondary text-light">
                            Submit
                        </button>
                    </div>

                </form>
            </div>
        </div>
        <div class="usercard bg-dark text-light h-100 w-50">
            <div>
                <div class="ml-3"><br>
                    <h3>Our Address</h3>
                    <i class="fas fa-map-pin"></i>
                    <div class="media">
                        <div class="media-body">
                            <p>75 Quinta CT, Ste B, Sacramento <br> CA 95823</p>
                        </div>
                    </div>
                    <i class="fas fa-phone-square-alt"></i>
                    <div class="media">
                        <div class="media-body">
                            <a href="tel:(916) 399 3444"><span>(916) 399 3444</span></a>
                        </div>
                    </div>
                    <i class="fas fa-envelope-square"></i>
                    <div class="media">
                        <div class="media-body d-flex">
                            <p><a href="mailto:Reservations@WishMyTrip.com">Reservations@WishMyTrip.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="map ml-3 mr-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3123.643067292199!2d-121.42093568419763!3d38.472800879638406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac5c0e8c26931%3A0x619a6dc4a8b45a26!2s75+Quinta+Ct+Ste+B%2C+Sacramento%2C+CA+95823%2C+USA!5e0!3m2!1sen!2sin!4v1524835678032"
                            width="100%" height="270" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://kit.fontawesome.com/9fe846089b.js" crossorigin="anonymous"></script>
<div class="bg-dark">
    @include('footer')
</div>
</html>
