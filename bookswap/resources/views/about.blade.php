@extends('layouts.app')
<html>
<title>About Us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
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


</style>

<body>

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

              <div class="panel panel-default">
                  <div class="panel-heading">
                      About Book Swap
                  </div>




                    <!-- About Section -->
                    <div class="w3-container w3-padding-32" id="about">

                      <p>A web app targeted for GGC students to exchange their books to other students.
                  I believe this is a good idea because this may create a closer community for the GGC students and it will be easier to use than the way GGC students exchange books (on Facebook) as of right now.


                      </p>

                    </div>

                    <div class="w3-row-padding w3-grayscale">
                      <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="h.jpg" alt="Hailey" height="100" width="150">
                        <h3>Hailey</h3>
                        <p class="w3-opacity">Project Manager</p>
                        <!-- <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>-->

                      </div>
                      <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="w.jpg" alt="Winston" height="100" width="150">
                        <h3>Winston</h3>
                        <p class="w3-opacity">Front-End Developer</p>
                        <!-- <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>-->

                      </div>
                      <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="a.jpg" alt="Adam" height="100" width="150">
                        <h3>Adam</h3>
                        <p class="w3-opacity">Back-End Developer</p>
                        <!-- <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>-->

                      </div>
                      <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="x.jpg" alt="Xavier" height="100" width="150">
                        <h3>Xavier </h3>
                        <p class="w3-opacity">Front-End Developer</p>
                        <!-- <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>-->

                      </div>

                        <p><button class="w3-btn-block"><a href="mailto:bookswapy@gmail.com" target="_top">Email Us</button></p>


                    </div>



                  <!-- End page content -->
                  </div>


                  <!-- Footer -->
                  <footer>
                    <div id = "footer">

                      <br>
                    <center>  <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons License" style="border-width:0"
                      src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br /><br>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>.</center>
                      <center> Copyright &copy; 2017 Bookswap </center>
                        </a>
                    </div>
                  </footer>


        </div>
    </div>
  </div>
</body>
</html>

@endsection
