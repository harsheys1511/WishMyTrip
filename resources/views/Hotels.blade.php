

<html>
<style>
    .checked {
        color: orange;
    }
</style>
<head>
    <title>Hotels</title>

    <script src="https://kit.fontawesome.com/9fe846089b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginstyle.css')}}">
    @include('header')


</head>
<body>
<div class="text-center mt-2">
    <form>
        <input class="shadow border-dark w-25 mr-3" type="text" id="job" name="job" placeholder="Search By City">
        <input type="image" src="images/Search.png" width="24" height="25">
    </form>
</div>
<div class="container">
    <section class="media mb-4 mt-2 bg-dark text-light ">
        <img class="d-flex mr-3 img-fluid rounded" style="width: 200px;" src="images/clock.jpg">
        <div class="media-body">
            <h2>Clock Tower</h2>
            <h5>London</h5>
            <p>Big Ben is the nickname for the Great Bell of the clock at the north end of the Palace of Westminster in
                London
                and is usually extended to refer to both the clock and the clock tower.
                The official name of the tower in which Big Ben is located was originally the Clock Tower,
                but it was renamed Elizabeth Tower in 2012 to mark the Diamond Jubilee of Elizabeth II.</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <br>
            <!--            <a class="text-danger" href="#">More Info</a>-->
            <div id="accordion">
                <div class="card bg-dark">
                    <div class="card-header">
                        <a class="card-link text-light" data-toggle="collapse" href="#collapseOne">
                            More Info
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse text-light" data-parent="#accordion">
                        <div class="card-body">
                            <p><br> We are currently searching for a highly motivated&nbsp;<b>AB Testing Lead&nbsp;
                                </b>who will drive the use of testing methodologies, the preparation and execution of a testing plan and the use of Adobe Target to help stakeholder teams to optimize
                                their customer facing web products within princess.com to improve business results.&nbsp;</span>
                            </p>
                            In a city with enviable quality of life balance,
                            our corporate offices are located in beautiful Southern California in downtown Santa Clarita. Santa Clarita is what CNN Money
                            Magazine calls “one of the best places to live in California.” With award-winning schools, special events and a large arts and cultural scene, Santa Clarita is the third largest city in Los Angeles
                            County and is ranked as one of the safest cities in not only California, but in the nation.<br> <br> <b>Responsibilities</b></span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="media mb-4 bg-primary text-light">
        <div class="media-body ml-3">
            <h2>Taj Mahal</h2>
            <h5>India</h5>
            <p>The Taj Mahal is an ivory-white marble mausoleum on the south bank of the Yamuna river in the Indian city
                of Agra. It was commissioned in
                1632 by the Mughal emperor Shah Jahan (reigned from 1628 to 1658) to house the tomb of his favourite
                wife, Mumtaz Mahal;
                it also houses the tomb of Shah Jahan himself. The tomb is the centrepiece of a 17-hectare (42-acre)
                complex,
                which includes a mosque and a guest house, and is set in formal gardens bounded on three sides by a
                crenellated wall.</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <br>
            <!--            <a class="text-dark" href="#">More Info</a>-->
            <div id="accordion" class="">
                <div class="card bg-primary">
                    <div class="card-header">
                        <a class="card-link text-light" data-toggle="collapse" href="#collapseTwo">
                            More Info
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse text-light" data-parent="#accordion">
                        <div class="card-body">
                            <p><br> We are currently searching for a highly motivated&nbsp;<b>AB Testing Lead&nbsp;
                                </b>who will drive the use of testing methodologies, the preparation and execution of a testing plan and the use of Adobe Target to help stakeholder teams to optimize
                                their customer facing web products within princess.com to improve business results.&nbsp;</span>
                            </p>
                            In a city with enviable quality of life balance,
                            our corporate offices are located in beautiful Southern California in downtown Santa Clarita. Santa Clarita is what CNN Money
                            Magazine calls “one of the best places to live in California.” With award-winning schools, special events and a large arts and cultural scene, Santa Clarita is the third largest city in Los Angeles
                            County and is ranked as one of the safest cities in not only California, but in the nation.<br> <br> <b>Responsibilities</b></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="d-flex ml-3 img-fluid rounded" style="width: 200px;" src="images/india.jpg">
    </section>
    <section class="media mb-4">
        <img class="d-flex mr-3 img-fluid rounded" style="width: 200px;" src="images/australia.jpg">
        <div class="media-body">
            <h2>Sydney Opera House</h2>
            <h5>Australia</h5>
            <p>The Sydney Opera House is a multi-venue performing arts centre at Sydney Harbour in Sydney, New South
                Wales, Australia.
                It is one of the 20th century's most famous and distinctive buildings.
                Designed by Danish architect Jørn Utzon, the building was formally opened on 20 October 1973 after a
                gestation beginning with Utzon's 1957 selection as winner of an international design competition. The
                Government of New South Wales, led by the premier, Joseph Cahill, authorised work to begin in 1958 with
                Utzon directing construction. The government's decision to build Utzon's design is often
                overshadowed by circumstances that followed, including cost and scheduling overruns as well as the
                architect's ultimate resignation.</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <br>
            <!--            <a class="text-danger" href="#">More Info</a>-->
            <div id="accordion">
                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                            More Info
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p><br> We are currently searching for a highly motivated&nbsp;<b>AB Testing Lead&nbsp;
                                </b>who will drive the use of testing methodologies, the preparation and execution of a testing plan and the use of Adobe Target to help stakeholder teams to optimize
                                their customer facing web products within princess.com to improve business results.&nbsp;</span>
                            </p>
                            In a city with enviable quality of life balance,
                            our corporate offices are located in beautiful Southern California in downtown Santa Clarita. Santa Clarita is what CNN Money
                            Magazine calls “one of the best places to live in California.” With award-winning schools, special events and a large arts and cultural scene, Santa Clarita is the third largest city in Los Angeles
                            County and is ranked as one of the safest cities in not only California, but in the nation.<br> <br> <b>Responsibilities</b></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="media mb-4">
        <div class="media-body">
            <h2>Effiel Tower</h2>
            <h5>Paris</h5>
            <p>is a wrought-iron lattice tower on the Champ de Mars in Paris, France. It is named after the engineer
                Gustave Eiffel,
                whose company designed and built the tower.
                Constructed from 1887 to 1889 as the entrance to the 1889 World's Fair, it was initially criticised by
                some of France's
                leading artists and intellectuals for its design, but it has become a global cultural icon of France and
                one of the most recognisable structures in the world.[3]
                The Eiffel Tower is the most-visited paid monument in the world; 6.91 million people ascended it in
                2015.</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <br>
            <!--            <a class="text-danger" href="#">More Info</a>-->
            <div id="accordion">
                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                            More Info
                        </a>
                    </div>
                    <div id="collapseFour" class="collapse text-light" data-parent="#accordion">
                        <div class="card-body">
                            <p><br> We are currently searching for a highly motivated&nbsp;<b>AB Testing Lead&nbsp;
                                </b>who will drive the use of testing methodologies, the preparation and execution of a testing plan and the use of Adobe Target to help stakeholder teams to optimize
                                their customer facing web products within princess.com to improve business results.&nbsp;</span>
                            </p>
                            In a city with enviable quality of life balance,
                            our corporate offices are located in beautiful Southern California in downtown Santa Clarita. Santa Clarita is what CNN Money
                            Magazine calls “one of the best places to live in California.” With award-winning schools, special events and a large arts and cultural scene, Santa Clarita is the third largest city in Los Angeles
                            County and is ranked as one of the safest cities in not only California, but in the nation.<br> <br> <b>Responsibilities</b></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="d-flex ml-3 img-fluid rounded" style="width: 200px;" src="images/Paris.jpg">
    </section>
</div>
</body>
@include('footer')
</html>


