<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginstyle.css')}}">
    @include('header')
</head>
<body>

<div class="container mb-2 mt-2">
    <div class="d-flex h-45">

        <section class="media mb-4 mt-2 bg-dark text-light w-100 ">
            <img class="d-flex mr-4 img-fluid rounded h-100" style="width: 200px;" src="images/r1.jpeg" >
            <div class="media-body">
                <h2> Bahamas Cruise</h2>
                <div>
                    <h5> Royal Carrabiean</h5>
                </div>

                <div>
                    <h5>4-5/nights</h5>
                </div>
                <h1 class="text-right"> Price</h1>
                <h2 class="text-right"> $200</h2>

                <div class="d-flex justify-content-center login-container">
                    <button type="button" name="button" id="login" class="btn login_btn bg-success text-light w-50 " onclick="document.location.href='/CruiseInfo'">
                        More Info
                    </button>
                </div>
                <br>
            </div>
        </section>





    </div>

    <div class="d-flex h-45">
        <!--        <div class="w-50">-->
        <!--            <img src="images/london.jpg" alt="Wish My Trip" class=" h-100 w-100">-->
        <!--        </div>-->


        <section class="media mb-4 mt-2 bg-dark text-light w-100 ">
            <img class="d-flex mr-4 img-fluid rounded h-100" style="width: 200px;" src="images/r2.jpg" >
            <div class="media-body">
                <h2> Norway Cruise Line</h2>
                <div>
                    <h5> Norway</h5>
                </div>

                <div>
                    <h5>6-7/nights</h5>
                </div>
                <h1 class="text-right"> Price</h1>
                <h2 class="text-right"> $300</h2>

                <div class="d-flex justify-content-center login-container">
                    <button type="button" name="button" id="login" class="btn login_btn bg-success text-light w-50 ">
                        More Info
                    </button>
                </div>
                <br>
            </div>
        </section>





    </div>

</div>




</div>
<script src="https://kit.fontawesome.com/9fe846089b.js" crossorigin="anonymous"></script>
</body>
@include('footer')
</html>
