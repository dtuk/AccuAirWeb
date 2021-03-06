@extends('layouts.layout')
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">



        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="view" style="background-image: url('https://vrworldnyc.com/wp-content/uploads/2017/06/contact-1-2.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Accuair</strong>
                            </h1>
                            <div class="center"> <img src="/welcome/img/newlogo.png" width="100px" height="100px" alt="accuair"></div>


                            <p>
                                <h4>"Just Breathing Can Be Such a luxury Sometimes"</h4>
                            </p>

                            {{--<p class="mb-4 d-none d-md-block">--}}
                                {{--<strong></strong>--}}
                            {{--</p>--}}


                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/First slide-->


        </div>
        <!--/.Slides-->


    </div>
    <!--/.Carousel Wrapper-->





{{--<br>--}}
{{--<hr>--}}
{{--<div id="map"></div>--}}
<div class="container">



    <!--Section: Main info-->
    <section class="mt-5 wow fadeIn">
        <hr class="my-5">
        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <img src="/welcome/img/Screenshot.png" class="img-fluid z-depth-1-half"
                     alt="">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!-- Main heading -->
                <h3 class="h3 mb-3">How To Use This Web Application</h3><br>
               
                <ul style="list-style: none; ">
                <li>
                 <!--Grid row-->
                  <div class="row">
                    <div class="col-2">
                      <i class="fas fa-sign-in-alt fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                    </div>
                    <div class="col-10 mb-2 pl-3">
                      <h5 class="feature-title font-bold mb-1">Login or signup our web site. </h5>
                
                    </div>
                  </div>
                <!--/Grid row-->
                </li> <br><br>

                <li>
                 <!--Grid row-->
                 <div class="row">
                    <div class="col-2">
                      <i class="fas fa-map-marker-alt fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                    </div>
                    <div class="col-10 mb-2 pl-3">
                      <h5 class="feature-title font-bold mb-1">Select specific city, from any of the icon in map </h5>
                
                    </div>
                  </div>
                <!--/Grid row-->
                </li><br>


                <li>
                 <!--Grid row-->
                 <div class="row">
                    <div class="col-2">
                      <i class="fas fa-mouse-pointer fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                    </div>
                    <div class="col-10 mb-2 pl-3">
                      <h5 class="feature-title font-bold mb-1">Click to get the full air pollution historical data. </h5>
                
                    </div>
                  </div>
                <!--/Grid row-->
                </li><br>

                </ul>

                <p>Our System is based on measurement of <b>Carbon Dioxide(CO2)</b>,<b> Carbon Monoxide(CO)</b>, <b>Temperature</b>, <b>Humidity</b> emissions.All measurements are based on hourly readings</p>
              

                <hr>

   

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Section: Main info-->
</div>




{{--<!--Main layout-->--}}
{{--<main>--}}
    {{--<div class="container">--}}
        {{----}}
        {{--<!-- Section: Main features & Quick Start-->--}}
        {{--<section>--}}

            {{--<h3 class="h3 text-center mb-5">About Accuair mobile Application</h3>--}}

            {{--<!--Grid row-->--}}
            {{--<div class="row wow fadeIn">--}}

                {{--<!--Grid column-->--}}
                {{--<div class="col-lg-6 col-md-12 px-4">--}}

                    {{--<!--First row-->--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-1 mr-3">--}}
                            {{--<i class="fas fa-code fa-2x indigo-text"></i>--}}
                        {{--</div>--}}
                        {{--<div class="col-10">--}}
                            {{--<h5 class="feature-title">Bootstrap 4</h5>--}}
                            {{--<p class="grey-text">Thanks to MDB you can take advantage of all feature of newest Bootstrap 4.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--/First row-->--}}

                    {{--<div style="height:30px"></div>--}}

                    {{--<!--Second row-->--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-1 mr-3">--}}
                            {{--<i class="fas fa-book fa-2x blue-text"></i>--}}
                        {{--</div>--}}
                        {{--<div class="col-10">--}}
                            {{--<h5 class="feature-title">Detailed documentation</h5>--}}
                            {{--<p class="grey-text">We give you detailed user-friendly documentation at your disposal. It will help--}}
                                {{--you to implement your ideas--}}
                                {{--easily.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--/Second row-->--}}

                    {{--<div style="height:30px"></div>--}}

                    {{--<!--Third row-->--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-1 mr-3">--}}
                            {{--<i class="fas fa-graduation-cap fa-2x cyan-text"></i>--}}
                        {{--</div>--}}
                        {{--<div class="col-10">--}}
                            {{--<h5 class="feature-title">Lots of tutorials</h5>--}}
                            {{--<p class="grey-text">We care about the development of our users. We have prepared numerous tutorials,--}}
                                {{--which allow you to learn--}}
                                {{--how to use MDB as well as other technologies.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--/Third row-->--}}

                {{--</div>--}}
                {{--<!--/Grid column-->--}}

                {{--<!--Grid column-->--}}
                {{--<div class="col-lg-6 col-md-12">--}}

                    {{--<p class="h5 text-center mb-4">Watch our "5 min Quick Start" tutorial</p>--}}
                    {{--<div class="embed-responsive embed-responsive-16by9">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--/Grid column-->--}}

            {{--</div>--}}
            {{--<!--/Grid row-->--}}

        {{--</section>--}}
        {{--<!--Section: Main features & Quick Start -->--}}

        {{--<hr class="my-5">--}}



    {{--</div>--}}
{{--</main>--}}
{{--<!--Main layout-->--}}


<!-- Footer -->
<!--Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">
    <!-- Footer Links -->
    <hr class="my-4">
    <div class="container-fluid text-center text-md-center">


        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">


                <!-- Content -->
                <h5 class="text-uppercase">Accuair Web Application</h5>


            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
                <div class="text-left">
                    <!-- Links -->
                    <h5 class="text-uppercase">Useful Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">About Accuair</a>
                        </li>
                        <li>
                            <a href="#!">Gas Pollution</a>
                        </li>

                    </ul>
                </div>



            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
                <div class="text-left">

                <!-- Links -->
                <h5 class="text-uppercase">Find Us</h5>

                <ul class="list-unstyled">


                    <li>
                        <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                            <i class="fab fa-facebook-f mr-3"></i>Facebook
                        </a>
                    </li>

                    <li>
                        <a href="https://twitter.com/MDBootstrap" target="_blank">
                            <i class="fab fa-twitter mr-3"></i>Twitter
                        </a>
                    </li>




                </ul>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->



</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="/home/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/home/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/home/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/home/js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();

</script>



<script>
    // This example adds a search box to a map, using the Google Place Autocomplete
    // feature. People can enter geographical searches. The search box will return a
    // pick list containing a mix of places and predicted search terms.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 7.873054, lng: 80.771797},
            zoom: 8.5,
            mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });

        map.addListener('click', function(e) {
            console.log("lat: "+e.latLng.lat()+", long: "+e.latLng.lng());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            // Clear out the old markers.
            markers.forEach(function(marker) {
                marker.setMap(null);
            });
            markers = [];

            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                var icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };

                // Create a marker for each place.
                markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                }));



                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6dnjTHHpUV7dWHTFB9ks33sx2dvzINpE&libraries=places&callback=initAutocomplete"
        async defer></script>




</body>



</html>
