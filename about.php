<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="ecommerce.css">
    <title>LizCosmetics: Buy a Product</title>


    <link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="themes/assets/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <span class="navbar-toggler-icon"></span>          
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">LizCosmetics</a>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="search.php">Face</a></li>
                <li><a href="request.php">Lips</a></li>
                <li><a href="request.php">Skin Care</a></li>
                <li class="active"><a href="sell.php">Brushes & Tools</a></li>
                <li class="active"><a href="sell.php">What's New</a></li>
                <li><a href="about.php">About Us</a>
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;My Cart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
              </ul>
             </div>

    <div class="pageTitle jumbotron">
      <div class="container">
        <h2>Real Beauty. Real Results!</h2>
      </div>
      <div class="container">
        <p>
        <p>Look for all your favorite products here, find the perfect coverage for your beauty routine.</p>
      </div>
    </div>


    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="container">
        <form action="php/sell_backend.php" method="post" enctype="multipart/form-data" >

        

          <br>
          <h2> Join our Insiders </h2>

          <div class="form-group">
            <label >Name:</label>
            <input class="form-control" name="contactname" placeholder="Enter Your Name">
          </div>
          <div class="form-group">
            <label >E-mail:</label>
            <input class="form-control" name="email" placeholder="Enter Your Email">
          <br><br>
          <input class="btn btn-danger" type="submit" value="Submit"> </input>
        </form>
      </div>
    </div>
    <div class="col-md-1"></div>
    </div>
    <br><br>

    <div class="introSection">
        <div class="container">
        <div class="row">
        <div class="col-lg-5">
        <h3>Welcome to Liz Cosmetics & Skin Care</h3>
        <p>
        We are beyond thrilled to introduce the Sleekiest Liz Chiduku Professional Makeup Color Palette, a limited-edition wardrobe of pigment-loaded shades for creating countless eye and face looks. 
        Known for her powerful charisma, bold makeup looks and love for all things futuristic (think high-fashion space alien meets grungy robotic angel), Aquaria is redefining the way people think about beauty, and we are sooooo here for it. Much like the superstar it’s inspired by, this versatile palette is anything but basic, and empowers you to create a universe of imaginative looks
        </p>
        </div>

        <div class="col-lg-4">
        <h3>Guaranteed <span style="color:#c83a3a">7</span>-day delivery</h3>
        <p>
        We value time as well as you do and we are working hard 24/7 to fullfill your dreams.
        <br><br>
        To keep up to our promise, we guarantee you a 7-day delivery.
        </p>

        </div>

        <div class="col-lg-3">
        <h3>100% Satisfaction Guarante</h3>
        <p>
        We will always honor a return for our customers if they are unsatisfied with a product for any reason. Just make sure you submit your return within 30 days of purchase for a full refund, minus original shipping costs.
        </p>

        </div>


    <!-- FOOTER -->
    <footer>
      <div class="container">
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>&copy; 2019 Copywrite <a href="about.php">Elizabeth Chiduku</a> </p>
      </div>
    </footer>



    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="themes/dist/js/bootstrap.min.js"></script>
    <script src="themes/assets/js/holder.js"></script>
    <!-- Slideshow container -->
<div class="slideshow-container">

  
</div>
  </body>
</html>