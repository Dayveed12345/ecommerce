<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrapIcons/font/bootstrap-icons.css')}}">
</head>

<body>
  <div class="container-fluid">
    <!-- Cart functionalities -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvas" aria-labelledby="cartOffcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="cartOffcanvasLabel">Your Shopping Cart</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <table class="table">
          <thead>
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Product 1</td>
              <td>$25.99</td>
              <td>
                <input type="number" class="form-control" value="1">
              </td>
              <td>$25.99</td>
              <td>
                <button class="btn btn-danger btn-sm">Remove</button>
              </td>
            </tr>
            <!-- Add more rows for additional cart items -->
          </tbody>
        </table>
        <div class="d-grid">
          <button class="btn btn-primary btn-block">Proceed to Checkout</button>
        </div>
      </div>
    </div>
    <!-- End of Cart functionalities -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light " style="margin-top:10px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item " style="margin-left:40px;">
              <!-- Using tenary operators -->
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item" style="margin-left:40px;">
              <a class="nav-link " href="#">About</a>
            </li>
            <li class="nav-item dropdown" style="margin-left:40px;">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Category
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Female</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Male</a></li>
              </ul>
            </li>
            <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li> -->
          </ul>
          <form class="d-flex" style="margin-right:20px;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
          <!-- <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Link with href
</a> -->
          <button class="btn btn-primary rounded-pill d-flex align-items-center" type="button" style="width:50px;"
            data-bs-toggle="offcanvas" data-bs-target="#cartOffcanvas" aria-controls="cartOffcanvas">
            <span class="bi bi-cart-fill me-2">
            </span><span class="badge bg-danger rounded-pill" style="margin-top:-20px;">99+</span>
          </button>
        </div>
      </div>
  </div>
  </nav>
  <!-- End of NavBar -->
  <!-- Body -->
  <div >
    <!-- <section class="bg-primary text-light text-center py-5">
       
          <h1 class="display-4">Welcome to ShopX</h1>
          <p class="lead">We offer amazing Outfits and Electronic Gadgets to make your life better.</p>
          <a href="#" class="btn btn-light btn-lg">Get Started</a>
      
      </section> -->
      <!-- carousel Section Start -->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('images/landing-cloth.jpg')}}" class="d-block w-100" style="height:300px;"alt="...">
            <div class="carousel-caption position-absolute translate-middle  p-3" style="margin-left:500px;">
          <h1 class=>Store X</h1>
          <h4>We offer amazing outfits and Electronic Gadgets to make your life better.</h4>
        </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/landing-cloth.jpg')}}" class="d-block w-100"style="height:300px;" alt="...">
            <div class="carousel-caption position-absolute translate-middle  p-3" style="margin-left:500px;">
          <h1 class=>Store X</h1>
          <h4>We offer amazing outfits and Electronic Gadgets to make your life better.</h4>
        </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/landing-cloth.jpg')}}" class="d-block w-100" style="height:300px;" alt="...">
            <div class="carousel-caption position-absolute translate-middle  p-3" style="margin-left:500px;">
          <h1 class=>Store X</h1>
          <h4>We offer amazing outfits and Electronic Gadgets to make your life better.</h4>
        </div>
          </div>
        </div>
      </div>
<!-- Ending carousel Section  -->
      <!-- Features Section -->
      <section class="py-2">
        <div class="container col-12" style="margin-left: 2px; width: 100%;">
          <div class="d-flex offset-lg-2 offset-sm-0 flex-wrap justify-content-start col-12">
            <div class="card shadow mx-3 col-lg-3 col-md-4 col-sm-6 mb-4">
              <img src="{{asset('images/landing-cloth.jpg')}}" class="card-img-top" alt="...">
              
              <div class="card-body">
                <h5 class="card-title">T-Shirt</h5>
                <p class="card-text">&#8358;4000</p>
                <p class="card-text fs-8 text-decoration-line-through">&#8358;4000</p>
                <button class="btn btn-primary shadow w-100">Add to cart</a>
              </div>
            </div>
            <div class="card shadow mx-3 col-lg-3 col-md-4 col-sm-6 mb-4">
              <img src="{{asset('images/landing-cloth.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">T-Shirt</h5>
                <p class="card-text">&#8358;4000</p>
                <p class="card-text fs-8 text-decoration-line-through">&#8358;4000</p>
                <button class="btn btn-primary shadow w-100">Add to cart</a>
              </div>
            </div>
            <div class="card shadow mx-3 col-lg-3 col-md-4 col-sm-6 mb-4">
              <img src="{{asset('images/landing-cloth.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">T-Shirt</h5>
                <p class="card-text">&#8358;4000</p>
                <p class="card-text fs-8 text-decoration-line-through">&#8358;4000</p>
                <button class="btn btn-primary shadow w-100">Add to cart</a>
              </div>
            </div>
            <div class="card shadow mx-3 col-lg-3 col-md-4 col-sm-6 mb-4">
              <img src="{{asset('images/landing-cloth.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">T-Shirt</h5>
                <p class="card-text">&#8358;4000</p>
                <p class="card-text fs-8 text-decoration-line-through">&#8358;4000</p>
                <button class="btn btn-primary shadow w-100">Add to cart</a>
              </div>
            </div>
            <div class="card shadow mx-3 col-lg-3 col-md-4 col-sm-6 mb-4">
              <img src="{{asset('images/landing-cloth.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">T-Shirt</h5>
                <p class="card-text">&#8358;4000</p>
                <p class="card-text fs-8 text-decoration-line-through">&#8358;4000</p>
                <button class="btn btn-primary shadow w-100">Add to cart</a>
              </div>
            </div>
            <div class="card shadow mx-3 col-lg-3 col-md-4 col-sm-6 mb-4">
              <img src="{{asset('images/landing-cloth.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">T-Shirt</h5>
                <p class="card-text">&#8358;4000</p>
                <p class="card-text fs-8 text-decoration-line-through">&#8358;4000</p>
                <button class="btn btn-primary shadow w-100">Add to cart</a>
              </div>
            </div>
            <div class="card shadow mx-3 col-lg-3 col-md-4 col-sm-6 mb-4">
              <img src="{{asset('images/landing-cloth.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">T-Shirt</h5>
                <p class="card-text">&#8358;4000</p>
                <p class="card-text fs-8 text-decoration-line-through">&#8358;4000</p>
                <button class="btn btn-primary shadow w-100">Add to cart</a>
              </div>
            </div>
            <div class="card shadow mx-3 col-lg-3 col-md-4 col-sm-6 mb-4">
              <img src="{{asset('images/landing-cloth.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">T-Shirt</h5>
                <p class="card-text">&#8358;4000</p>
                <p class="card-text fs-8 text-decoration-line-through">&#8358;4000</p>
                <button class="btn btn-primary shadow w-100">Add to cart</a>
              </div>
            </div>
            <div class="card shadow mx-3 col-lg-3 col-md-4 col-sm-6 mb-4">
              <img src="{{asset('images/landing-cloth.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">T-Shirt</h5>
                <p class="card-text">&#8358;4000</p>
                <p class="card-text fs-8 text-decoration-line-through">&#8358;4000</p>
                <button class="btn btn-primary shadow w-100">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <style>
        /* For small screens, display one card per row */
        @media (max-width: 767.98px) {
          .card {
            width: 100%;
            max-width: none;
          }
        }
      </style>


      <!-- Contact Section -->
      <section class="bg-light py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <h2 class="text-center mb-4">Contact Us</h2>
              <form>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="mb-3">
                  <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Using the card of boostrap -->
    </div>
  </div>
  <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</body>

</html>