<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
          $("#myModal").modal('show');
          $("#slide").slideUp(2000);
      });
  </script>
  <style>
    .wrapper:hover #slide {
    transition: 1s;
    left: 0;
}
    </style>
  </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">RedBook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
          </ul>
          <span class="navbar-text">
            Navbar text with an inline element
          </span>
        </div>
      </nav>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="b1.jpg" alt="First slide">
            <br>
            <div class="carousel-caption">
              <h5 style="font-weight: bold;">50% Off on even on old books</h5>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="b2.jpg" alt="Second slide">
            <br>
            <div class="carousel-caption">
              <h5 style="font-weight: bold;">Buy and sell Second Hand Books</h5>
              </div>
        </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="b3.jpg" alt="Third slide">
            <br>
            <div class="carousel-caption">
              <h5 style="font-weight: bold;">Get fastest Delivery across india</h5>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><br>
      
      <div class="container" id="slide">
        <div class="row">
          <div class="col">
            <img src="9.jpeg" style='border-radius: 50px;' alt="..." class="img-thumbnail">
          </div>
          <div class="col">
            <img src="10.png" style='border-radius: 50px;' alt="..." class="img-thumbnail">
          </div>
          <div class="col">
            <img src="11.png" style='border-radius: 50px;' alt="..." class="img-thumbnail">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <img src="12.png" style='border-radius: 50px;' alt="..." class="img-thumbnail">
          </div>
          <div class="col">
            <img src="jee.png" alt="..." style='border-radius: 50px;' class="img-thumbnail">
          </div>
          <div class="col">
            <img src="neet.png" alt="..." style='border-radius: 50px;' class="img-thumbnail">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <img src="upsc.png" style='border-radius: 50px;' alt="..." class="img-thumbnail">
          </div>
          <div class="col">
            <img src="ssc.png" alt="..." style='border-radius: 50px;' class="img-thumbnail">
          </div>
          <div class="col">
            <img src="other.png" alt="..." style='border-radius: 50px;' class="img-thumbnail">
          </div>
        </div>
      </div>
      
      <!-- Modal -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>