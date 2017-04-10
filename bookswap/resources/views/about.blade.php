@extends('layouts.app')
<html>
<title>Book Swap: About Us Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">

<style>
.w3-btn-block{
  width: 15%;
  display: block;
  margin: 0 auto;
  background-color:#fff ;
  font-weight: bold;
  font-size: 15px;
}
.w3-btn-block:hover{
  box-shadow: none;
  text-decoration: none;

}
.myPic {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  box-shadow: 2px 2px 2px #ccc;

}
.myPic:hover{
  filter: brightness(1.1);
}
.w3-row-padding {
  text-align: center;
}
.panel-heading p {
  font-size:  15px;
  font-weight: bold;
  color: #696969;
  display: inline;
}
.panel-heading{
  text-align: center;

}

.footer {
  right: 0;
  bottom: 0;
  left: 0;
  padding: .2rem;
  background-color: #efefef;
  text-align: center;
}

ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
  }

  li {
      float: left;
  }

  li a {
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
  }
  li a:hover {
      text-decoration: none;
    }
  .disabled {
     pointer-events: none;
     cursor: default;
  }
</style>

<body>

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

              <div class="panel panel-default">
                  <div class="panel-heading">
                    <p>  About Book Swap </p>
                  </div>




                    <!-- About Section -->
                    <div class="w3-container w3-padding-32" id="about">

                      <center> A web app targeted for GGC students to buy and sell books with other GGC students. We believe that this is a great idea since it facilitates the way people exchange books, and it'll create a closer community and bring students together, compared to something like Facebook.
                      </center>

                    </div>

                    <div class="w3-row-padding w3-grayscale">
                      <div class="w3-col l3 m6 w3-margin-bottom">
                        <img class="myPic" src="h.jpg" alt="Hailey" height="100" width="150">
                        <h3>Hailey</h3>
                        <p class="w3-opacity">Project Manager & Back-End Developer</p>
                        <small><a href="mailto:hmontgomery@ggc.edu">hmontgomery@ggc.edu</a></small>
                        <!-- <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>-->

                      </div>
                      <div class="w3-col l3 m6 w3-margin-bottom">
                        <img class="myPic" src="w.jpg" alt="Winston" height="100" width="150">
                        <h3>Winston</h3>
                        <p class="w3-opacity">Lead Front-End Developer</p>
                        <small><a href="mailto:akone1@ggc.edu">akone1@ggc.edu</a></small>
                        <!-- <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>-->

                      </div>
                      <div class="w3-col l3 m6 w3-margin-bottom">
                        <img class="myPic" src="a.jpg" alt="Adam" height="100" width="150">
                        <h3>Adam</h3>
                        <p class="w3-opacity">Lead Back-End Developer</p>
                        <small><a href="mailto:aprintz@ggc.edu">aprintz@ggc.edu</a></small>
                        <!-- <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>-->

                      </div>
                      <div class="w3-col l3 m6 w3-margin-bottom">

                        <img class="myPic" src="x.jpg" alt="Xavier" height="100" width="150">
                        <h3>Xavier </h3>
                        <p class="w3-opacity">Graphic Designer & Front-End Developer </p>
                        <small><a href="mailto:xlazo@ggc.edu">xlazo@ggc.edu</a></small>

                        <!-- <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>-->

                      </div>

                        <p><button class="w3-btn-block"><a href="mailto:bookswapy@gmail.com" target="_top">Email Us</button></p>

                          <p><center>  <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons License" style="border-width:0"
                            src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br /><br>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>.</center></p>


                    </div>



                  <!-- End page content -->
                  </div>


                  <!-- Footer -->




        </div>
    </div>
  </div>
  <div class="footer">
    <ul>
      <li><a href="{{ url('/home') }}">Home</a></li>
      <li><a href="{{ url('/about') }}">About</a></li>
      <li><a href="{{ url('/faq') }}">FAQ</a></li>
      <li style="float:right"><a class="disabled" href="#copyright">Copyright &copy; 2017 <strong>BookSwap</strong>. All Rights Reserved.</a></li>
    </ul>
  </div>
</body>
</html>

@endsection
