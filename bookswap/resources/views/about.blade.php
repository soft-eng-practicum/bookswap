@extends('layouts.app')
<!-- FILE LOCATION: resources\views\layouts\app.blade.php
NOTE: this consists of the repetitive html & import information -->
<title>BookSwap | Profile</title>

@section('content')
<div class="container">
    <div class="panel">
        <div class="panel-heading"><h1>About</h1></div>
        <div class="panel-body">
            <!-- About Section -->
            <div class="col-md-12" id="about">
                <p class="about-bookswap">
                    A web app targeted for GGC students to buy and sell books with other GGC students.<br>
                    We believe that this is a great idea since it facilitates the way people exchange books,
                    and it'll create a closer community and bring students together, compared to something like Facebook.
                </p>
            </div>
            <div class="col-md-12 bgimg-openbook bgimg-openbook-gray-dark">
                <div class="about-left half">
                    <div class="about-left pic">
                        <img class="myPic" src="h.jpg" alt="Hailey">
                    </div>
                    <div class="about-left content">
                        <h3>Hailey</h3>
                        <p>
                            Project Manager &amp; Back-End Developer<br>
                            <small><a href="mailto:hmontgomery@ggc.edu">hmontgomery@ggc.edu</a></small>
                        </p>
                    </div>
                </div>
                <div class="about-right half">
                    <div class="about-right pic">
                        <img class="myPic" src="w.jpg" alt="Winston">
                    </div>
                    <div class="about-right content">
                        <h3>Winston</h3>
                        <p>
                            Lead Front-End Developer<br>
                            <small><a href="mailto:hmontgomery@ggc.edu">hmontgomery@ggc.edu</a></small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 bgimg-openbook bgimg-openbook-gray-light">
                <div class="about-left half">
                    <div class="about-left pic">
                        <img class="myPic" src="a.jpg" alt="Adam">
                    </div>
                    <div class="about-left content">
                        <h3>Adam</h3>
                        <p>
                            Lead Back-End Developer<br>
                            <small><a href="mailto:aprintz@ggc.edu">aprintz@ggc.edu</a></small>
                        </p>
                    </div>
                </div>
                <div class="about-right half">
                    <div class="about-right pic">
                        <img class="myPic" src="x.jpg" alt="Xavier">
                    </div>
                    <div class="about-left content">
                        <h3>Xavier</h3>
                        <p>
                            Graphic Designer &amp; Front-End Developer<br>
                            <small><a href="mailto:xlazo@ggc.edu">xlazo@ggc.edu</a></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End page content -->
@endsection
