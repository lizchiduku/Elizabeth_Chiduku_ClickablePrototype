<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
    <title>LizCosmetics: Buy a Product </title>

    <link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="themes/assets/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <!-- NAVBAR -->
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">LizChiduku</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="search.php">Search</a></li>
                <li><a href="request.php">Request</a></li>
                <li class="active"><a href="sell.php">Sell</a></li>
                <li><a href="about.php">About Us</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;My Cart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="pageTitle jumbotron">
      <div class="container">
        <h2>Products</h2>
      </div>
      <div class="container">
        <p></p>
        <p>Lorem Ipsum hagagajsjsga.</p>
      </div>
    </div>


    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="container">
        <form action="php/sell_backend.php" method="post" enctype="multipart/form-data" >

          <h2> Product Details </h2>

          <div class="form-group">
            <label >Name:</label>
            <input class="form-control" name="bname" placeholder="Enter Name">
          </div>

          <div class="form-group">
            <label >Author:</label>
            <input class="form-control" name="author" placeholder="Enter Author Name">
          </div>

          <div class="form-group">
            <label >Subject:</label>
            <input class="form-control" name="subject" placeholder="Enter Subject">
          </div>

          <div class="form-group">
            <label >Price:</label>
            <input class="form-control" name="price" placeholder="Quote ">
          </div>

          <br>
          <h2> Contact Details </h2>

          <div class="form-group">
            <label >Your Name:</label>
            <input class="form-control" name="contactname" placeholder="Enter Your Name">
          </div>

          <div class="form-group">
            <label >E-mail:</label>
            <input class="form-control" name="email" placeholder="Enter Your Email">
          </div>
          
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
        <h3>Welcome to LizCosmetics</h3>
        <p>
          We are beyond thrilled to introduce the Sleekiest Liz Chiduku Professional Makeup Color Palette, a limited-edition wardrobe of pigment-loaded shades for creating countless eye and face looks. 
          Known for her powerful charisma, bold makeup looks and love for all things futuristic (think high-fashion space alien meets grungy robotic angel), Aquaria is redefining the way people think about beauty, and we are sooooo here for it. Much like the superstar it’s inspired by, this versatile palette is anything but basic, and empowers you to create a universe of imaginative looks        
      <br>
        <br><br>
        LizCosmetics, Your Trusted Brand!.
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
        <h3>Selections</h3>
        <p>
        We value our customers grab your special offer of 10% off today.
        </p>

        </div>

        </div>
        </div>
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
  </body>
</html>