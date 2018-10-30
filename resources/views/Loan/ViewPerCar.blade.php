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
  <header class="header row">
    <nav class="nav">
      <div class="navbar-header col-xs-12 col-sm-12 col-md-5">
        <a href="#" class="logo">ASTRA</a>
        <div class="menu">
          <button type="button" name="button"><img src="public/images/icon/menu.svg" alt=""></button>
        </div>
      </div>
      <ul class="navbar col-xs-12 col-sm-12 col-md-5">
        <li><a href="index.html">Home</a></li>
        <li><a href="product.html">Product</a></li>
        <li><a href="purchase.html">Purchase</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="about.html">About Us</a></li>
      </ul>
    </nav>
  </header>
  <main class="main row">
    <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="col-md-5 col-sm-7 col-xs-12">
        <figure class="thumbnails">
          <img class="imageProduct" src="{{$car->showPict}}" alt="">
          <figcaption>
            <a href="#" class="product-slides product-active"><img src="public/images/product/bmw7.jpg" alt=""></a>
            <a href="#" class="product-slides"><img src="public/images/product/bmw77.jpg" alt=""></a>
            <a href="#" class="product-slides"><img src="public/images/product/bmw777.jpg" alt=""></a>
            <a href="#" class="product-slides"><img src="public/images/product/bmw77.jpg" alt=""></a>
            <a href="#" class="product-slides"><img src="public/images/product/bmw777.jpg" alt=""></a>
            <a href="#" class="product-slides"><img src="public/images/product/bmw7.jpg" alt=""></a>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-7 col-sm-5 col-xs-12">
        <h3 class="nameProduct">{{$car->name}}</h3>
        <h3 class="price-detail"><b>{{number_format($car->price, 2) }}</b></h3>
        <p class="status">Ready</p>
        <div class="description">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="detailShop">
          <div class="col-xs-12 col-lg-8" style="margin-left: -10%">
          <div class="form-group" style="margin-top:20px;">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left; margin: 50px"><i>Instalment:</i></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <table>
                <thead>
                  <tr>
                    <th>Apply</th>
                    <th>Tenor</th>
                    <th>Angsuran Reguler</th>
                    <th>Angsuran Bonusan</th>
                    <th>Bayar 1</th>
                  </tr>
                </thead>
                @foreach($tenorcar as $data)
                <tbody style="color: black;">
                  <tr>
                    <td>{{ Form::radio('tenor', $data->idTenorCar, false) }}<label>&nbsp;</label></td>
                    <td>{{$data->lamaTenorCar}} Bulan</td>
                    <td>Rp. {{number_format($data->angReg,2)}}</td>
                    <td>Rp. {{number_format($data->angBon,2)}}</td>
                    <td>Rp. {{number_format($data->bayar1,2)}}</td>
                  </tr>
                </tbody>
                 @endforeach
              </table>
            </div>
          </div>
        </div>
          <a href="#" id="buy" class="col-xs-12 col-sm-3 col-sm-3">BUY</a>
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
<style>
.detailShop{
  border-collapse: collapse;
}  

.detailShop td, .detailShop th{
  border: 1px solid #ddd;
  padding: 10px;
}

.detailShop tr:hover {
  background-color: #f5f5f5;
}

.description{
  margin-bottom: -10%;
}

.col-md-9.col-sm-9.col-xs-12{
  margin-left: 8%;
  margin-top: -8%;
  width: 100%
}
</style>

</html>
