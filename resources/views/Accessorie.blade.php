<?php
/**
 * Created by PhpStorm.
 * User: harsh
 * Date: 2019-10-27
 * Time: 3:47 AM
 */
?>

<html>
<head>
    <title>Accessories</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginstyle.css')}}">
    @include('header')

</head>
<body>
<div id="myBtnContainer" class="text-center mb-3 mt-2">
    <button class="btn active bg-info text-light" onclick="filterSelection('all')"> General</button>
    <button class="btn bg-success text-light" onclick="filterSelection('cars')"> For Male</button>
    <button class="btn bg-secondary text-light" onclick="filterSelection('animals')"> For Female</button>
    <button class="btn bg-danger text-light" onclick="filterSelection('fruits')"> Kids</button>
    <input class="ml-5 shadow border-dark w-25 mr-3" type="text" id="job" name="job" placeholder="Search Product">
    <input type="image" src="images/Search.png" width="24" height="25">

</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <section class="card mb-5">
                <img class="card-img-top " src="images/speedo.jpg">
                <div class="card-body">
                    <h3 class="card-title">Speedo</h3>
                    <h5 class="card-subtitle">Swimming Accessorie</h5>
                    <p class="card-text">Handful</p>
                </div>
                <div class="list-group list-group-horizontal-md list-group-flush">

                    <a class="list-group-item list-group-item-info text-center" data-toggle="popover"
                       data-placement="bottom" data-trigger="hover"
                       title="Info" data-content="Swimming Accessorie" href="#"><i class="fas fa-info ">
                            Info</i></a>
                    <a class="list-group-item list-group-item-danger text-center" href="#"><i class="fas fa-cart-plus">
                            Add To Cart</i></a>
                    <a class="list-group-item list-group-item-success text-center" href="#"><i class="fas fa-list">
                            WishList</i></a>
                </div>
            </section>
        </div>
        <div class="col-sm-4">
            <section class="card mb-5 bg-info text-light border-danger">
                <img class="card-img-top" src="images/Trunk.jpg">
                <div class="card-body">
                    <h3 class="card-title">Trunks</h3>
                    <h5 class="card-subtitle">Costume</h5>
                    <p class="card-text">Great Comfort</p>
                </div>
                <div class="list-group list-group-horizontal-md list-group-flush">
                    <a class="list-group-item list-group-item-info text-center "
                       data-toggle="popover"
                       data-placement="bottom" data-trigger="hover"
                       title="Info" data-content="Great Comfort" href="#"><i class="fas fa-info ">
                            Info</i></a>
                    <a class="list-group-item list-group-item-danger text-center" href="#"><i class="fas fa-cart-plus">
                            Add To Cart</i></a>
                    <a class="list-group-item list-group-item-success text-center" href="#"><i class="fas fa-list">
                            WishList</i></a>
                </div>
            </section>
        </div>
        <div class="col-sm-4">
            <section class="card mb-5 bg-primary text-light border-danger">
                <img class="card-img-top" src="images/cap.jpg">
                <div class="card-body">
                    <h3 class="card-title">Caps</h3>
                    <h5 class="card-subtitle">Swimming Cap</h5>
                    <p class="card-text">Care For Hair</p>
                </div>
                <div class="list-group list-group-horizontal-md list-group-flush">
                    <a class="list-group-item list-group-item-info text-center" data-toggle="popover"
                       data-placement="bottom" data-trigger="hover"
                       title="Info" data-content="Care For Hair" href="#"><i class="fas fa-info ">
                            Info</i></a>
                    <a class="list-group-item list-group-item-danger text-center" href="#"><i class="fas fa-cart-plus">
                            Add To Cart</i></a>
                    <a class="list-group-item list-group-item-success text-center" href="#"><i class="fas fa-list">
                            WishList</i></a>
                </div>
            </section>
        </div>
        <div class="col-sm-4">
            <section class="card mb-5 bg-danger text-light border-primary">
                <img class="card-img-top" src="images/Unicorn.png">
                <div class="card-body">
                    <h3 class="card-title">Novelty Toy</h3>
                    <h5 class="card-subtitle">Pool Unicorn</h5>
                    <p class="card-text">Toy For Children</p>
                </div>
                <div class="list-group list-group-horizontal-md list-group-flush">
                    <a class="list-group-item list-group-item-info text-center"
                       data-toggle="popover"
                       data-placement="bottom" data-trigger="hover"
                       title="Info" data-content="Toy For Children"href="#"><i class="fas fa-info ">
                            Info</i></a>
                    <a class="list-group-item list-group-item-danger text-center" href="#"><i class="fas fa-cart-plus">
                            Add To Cart</i></a>
                    <a class="list-group-item list-group-item-success text-center" href="#"><i class="fas fa-list">
                            WishList</i></a>
                </div>
            </section>
        </div>
    </div>
</div>
</div>
<script src="https://kit.fontawesome.com/9fe846089b.js" crossorigin="anonymous"></script>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('[data-toggle="popover"]').popover();
    })
</script>
</body>
@include('footer')
</html>


