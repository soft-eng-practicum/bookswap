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
            <div class="col-sm-12" id="about">
                <p class="about-bookswap">
                    A web app targeted for GGC students to buy and sell books with other GGC students.<br>
                    We believe that this is a great idea since it facilitates the way people exchange books,
                    and it'll create a closer community and bring students together, compared to something like Facebook.
                </p>
            </div>

            <!-- GROUP 1: SoftDev II 2017 Fall -->
            <div class="col-sm-12 bgimg-openbook bgimg-openbook-gray-dark">
                <div class="about-left half">
                    <div class="about-left pic">
                        <img class="myPic" src="img/authors/hailey.jpg" alt="Hailey">
                    </div>
                    <div class="about-left content">
                        <h4>Hailey</h4>
                        <p>
                            Project Manager &amp; Back-End Developer<br>
                            <small><a href="mailto:hmontgomery@ggc.edu">hmontgomery@ggc.edu</a></small>
                        </p>
                    </div>
                </div>
                <div class="about-right half">
                    <div class="about-right pic">
                        <img class="myPic" src="img/authors/winston.jpg" alt="Winston">
                    </div>
                    <div class="about-left content">
                        <h4>Winston</h4>
                        <p>
                            Lead Front-End Developer<br>
                            <small><a href="mailto:akone1@ggc.edu">akone1@ggc.edu</a></small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 bgimg-openbook bgimg-openbook-gray-light">
                <div class="about-left half">
                    <div class="about-left pic">
                        <img class="myPic" src="img/authors/alex.jpg" alt="Adam">
                    </div>
                    <div class="about-left content">
                        <h4>Adam</h4>
                        <p>
                            Lead Back-End Developer<br>
                            <small><a href="mailto:aprintz@ggc.edu">aprintz@ggc.edu</a></small>
                        </p>
                    </div>
                </div>
                <div class="about-right half">
                    <div class="about-right pic">
                        <img class="myPic" src="img/authors/xavier.jpg" alt="Xavier">
                    </div>
                    <div class="about-left content">
                        <h4>Xavier</h4>
                        <p>
                            Graphic Designer &amp; Front-End Developer<br>
                            <small><a href="mailto:xlazo@ggc.edu">xlazo@ggc.edu</a></small>
                        </p>
                    </div>
                </div>
            </div>

            <!-- GROUP 1: SoftDev II 2017 Fall -->
            <div class="col-sm-12 bgimg-openbook bgimg-openbook-gray-dark">
                <div class="about-left half">
                    <div class="about-left pic">
                        <img class="myPic" src="img/authors/alek.jpg" alt="Alek">
                    </div>
                    <div class="about-left content">
                        <h4>Alek</h4>
                        <p>
                            Back-End Developer<br>
                            <small><a href="mailto:agartlan@ggc.edu">agartlan@ggc.edu</a></small>
                        </p>
                    </div>
                </div>
                <div class="about-right half">
                    <div class="about-right pic">
                        <img class="myPic" src="img/authors/chelsea.png" alt="Chelsea">
                    </div>
                    <div class="about-left content">
                        <h4>Chelsea</h4>
                        <p>
                            Graphic Designer &amp; Lead Front-End Developer<br>
                            <small><a href="mailto:cdalessandro@ggc.edu">cdalessandro@ggc.edu</a></small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 bgimg-openbook bgimg-openbook-gray-light">
                <div class="about-left half">
                    <div class="about-left pic">
                        <img class="myPic" src="img/authors/sierra.jpg" alt="Sierra">
                    </div>
                    <div class="about-left content">
                        <h4>Sierra</h4>
                        <p>
                            Front-End Developer<br>
                            <small><a href="mailto:swilliams37@ggc.edu">swilliams37@ggc.edu</a></small>
                        </p>
                    </div>
                </div>
                <div class="about-right half">
                    <div class="about-right pic">
                        <img class="myPic" src="img/authors/waylon.png" alt="Waylon">
                    </div>
                    <div class="about-left content">
                        <h4>Waylon</h4>
                        <p>
                            Lead Back-End Developer<br>
                            <small><a href="mailto:wlao@ggc.edu">wlao@ggc.edu</a></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End page content -->
@endsection
