<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ASTRA | Product</title>
  <link rel="stylesheet" href="public/build/css/master.css">
  <link rel="stylesheet" href="public/build/css/responsive.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="public/images/logo/favicon.ico" type="image/x-icon">
  <link rel="icon" href="public/images/logo/favicon.ico" type="image/x-icon">
</head>

<body class="container">
  <header class="row">
    <nav class="nav">
      <div class="navbar-header col-xs-12 col-sm-12 col-md-5">
        <a href="#" class="logo">ASTRA</a>
        <div class="menu">
          <button type="button" name="button"><img src="public/images/icon/menu.svg" alt=""></button>
        </div>
      </div>
      <ul class="navbar col-xs-12 col-sm-12 col-md-6">
        <li><a href="index.html">Home</a></li>
        <li><a href="product.html">Product</a></li>
        <li><a href="purchase.html">Purchase</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="about.html">About us</a></li>
        <li><a href="#">Cart</a></li>
      </ul>
    </nav>
  </header>
  <main class="main row">
    <div class="banner">
      <img src="public/images/logo/logo.png" alt="">
      <h4>Get your new car</h4>
      <div class="btn-group">
        <input type="search" name="" value="" placeholder="Search">
        <input type="button" name="" value=" ">
      </div>
      <h4>Popular Search :</h4>
      <div class="category-popular">
        <a href="#">Toyota</a>
        <a href="#">Daihatsu</a>
        <a href="#">BMW</a>
        <a href="#">Isuzu</a>
        <a href="#">Peugeot</a>
      </div>
    </div>
    <div class="container">
      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0">
        <div class="col-md-3 col-sm-4 col-xs-12 label">
          <div class="wrapset">
            <h3 class="headline">Categories</h3>
            <span class="btn-open plus"></span>
            <span class="line"></span>
            <ul class="page-category collapse">
              <li><a href="#">Toyota <span>(20)</span></a></li>
              <li><a href="#">Daihatsu <spBMWan>(15)</span></a></li>
              <li><a href="#">BMW <span>(5)</span></a></li>
              <li><a href="#">Isuzu <span>(31)</span></a></li>
              <li><a href="#">Peugeot <span>(15)</span></a></li>
            </ul>
          </div>
          <div class="wrapset">
            <h3 class="headline">Shop By</h3>
            <span class="btn-open plus"></span>
            <span class="line"></span>
            <div class="collapse">
              <div class="shop-by">
                <p>Type</p>
                <a href="#">Sport</a>
                <a href="#">Sedan</a>
                <a href="#">SUV</a>
                <a href="#">Truck</a>
              </div>
              <div class="portion">
                <p>Color</p>
                <a href="#">Navy</a>
                <a href="#">Jet Black</a>
                <a href="#">Pure White</a>
              </div>
            </div>
          </div>
          <button type="button" class="btn-filter" name="button">Filter</button>
          <div class="top-food">
            <img src="public/images/product/bmw7.jpg" alt="">
          </div>
          <div class="shared">
            <p>Share</p>
            <div class="wrap-shared">
              <a href="#"><img src="public/images/icon/002-facebook-logo.svg" alt=""></a>
              <a href="#"><img src="public/images/icon/003-twitter-logo-silhouette.svg" alt=""></a>
              <a href="#"><img src="public/images/icon/001-google-plus-logo.svg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12 content">
          <h3 class="headline">Popular Product</h3>
          <span class="line"></span>
          <div class="col-md-12 col-sm-12 col-xs-12 option-sort">
            <div class="col-md-8 col-sm-5 col-xs-12">
              <p>sory by</p>
              <select class="sorting" name="">
                <option value="">Name (A to Z)</option>
                <option value="">Name (Z to A)</option>
                <option value="">Price(low > high)</option>
                <option value="">Price(high > low)</option>
                <option value="">rating(highest)</option>
                <option value="">rating(lowest)</option>
              </select>
            </div>
            <div class="option-page col-md-4 col-sm-7 col-xs-12">
              <p>show </p>
              <select class="page" name="">
                <option value="">24</option>
                <option value="">48</option>
                <option value="">100</option>
              </select>
              <p>per page</p>
            </div>
          </div>
          @foreach($data as $cars)
          <div class="col-md-4 col-sm-4 col-xs-6 wrap">
            <figure class="product">
              
              <img src="{{$cars['showPict']}}" alt="">
              <figcaption>
                <a href="viewpercar{idCar}">{{$cars->name}}</a>
                <p class="price">{{number_format($cars->price,2)}}</p>
                <a href="viewpercar{idCar}" class="more">more detail</a>
              </figcaption>        
            </figure>
          </div>
          @endforeach
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="pagination">
              <ul>
                <li><a href="#"><</a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">></a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>
  <footer class="footer row">
    <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="row footer-1">
        <div class="col-md-3 col-sm-3 col-xs-12 about-us wrapset">
          <h3 class="heading-footer">Contact Us</h3>
          <span class="btn-open plus"></span>
          <ul class="collapse">
            <li>Location <span>K.H Syahdan No 68-A</span></li>
            <li>Phone <span>+62 21 000 0000</span></li>
            <li>Fax <span>+62 21 000 0000</span></li>
            <li>Email <span>xxx.xxx@acc.co.id</span></li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 subscribe wrapset">
          <h1 class="heading-footer">Astra</h1>
          <span class="btn-open plus"></span>
          <div class="collapse">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <form action="index.html" method="post" onsubmit="return valid()">
              <input type="email" name="" value="" placeholder="Please subscribe ..">
              <input type="submit" name="" value=" ">
            </form>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 about-us wrapset">
          <h3 class="heading-footer">About Us</h3>
          <span class="btn-open plus"></span>
          <div class="collapse">
            <p style="text-align:center;">Astra Credit Companies provides everything you need.</p>
          </div>
        </div>
      </div>
      <div class="row footer-2">
        <div class="col-md-3 col-sm-3 col-xs-12 sponsor">
          <a href="#" title="Burger-king"><img src="public/images/sponsor/Burger_King-logo-EB00FAD8D3-seeklogo.com.png" alt=""></a>
          <a href="#" title="Nestle"><img class="invert" src="public/images/sponsor/nestle-food-brand-vector-logo-400x400.png" alt=""></a>
          <a href="#" title="Danone"><img src="public/images/sponsor/Danone_dairy_brand_logo.svg.png" alt=""></a>
          <a href="#" title="unilever"><img src="public/images/sponsor/logo-unilever.PNG" alt=""></a>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 copyright">
          <p>Copyright (c) 2017 Copyright Astra All Rights Reserved.</p>
          <p>Design By Utama Pribadi.</p>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 social-media">
          <a href="#" title="Facebook"><img src="public/images/icon/002-facebook-logo.svg" alt=""></a>
          <a href="#" title="Twitter"><img src="public/images/icon/003-twitter-logo-silhouette.svg" alt=""></a>
          <a href="#" title="Google+"><img src="public/images/icon/001-google-plus-logo.svg" alt=""></a>
          <a href="#" title="Linked in"><img src="public/images/icon/004-linkedin-logo.svg" alt=""></a>
          <a href="#" title="pinterest"><img src="public/images/icon/002-pinterest.svg" alt=""></a>
          <a href="#" title="rss feed"><img src="public/images/icon/003-rss-symbol.svg" alt=""></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- ==== Jquery Script ==== -->
  <script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
  <script src="js/script.js" charset="utf-8"></script>
</body>

</html>
