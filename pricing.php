<!DOCTYPE html>
<html>
<head>
    <!--Head Include-->
    <?php include("head.php"); ?>

    <title>Pricing | Chatversity</title>
</head>
<body>
    <!--Navbar Include-->
    <?php include("navbar.php"); ?>
</head>
<body>

<div style="min-height:100vh;">
<!-- Page intro -->
<section class="section">
  <div class="container">
    <div class="row py-5">
      <div class="col-12">
        <h1 class="text-secondary">Pricing Overview</h1>
      </div>
    </div>
  </div>
</section>
 <!-- PRICING-TABLE CONTAINER -->
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-mg-6 col-lg-3 mb-4">
        <ul class="price">
          <li class="header ">Free</li>
          <li class="grey">$ 0.00 / year</li>
          <li>Engage with classmates in real-time over private chat or chatroom messaging</li>
          <li class="grey"><a href="#" class="btn btn-outline-primary">Host My Chatversity</a></li>
        </ul>
      </div>
      <div class="col-12 col-mg-6 col-lg-3 mb-4">
        <div class="price-box">
        <ul class="price">
          <li class="header ">Basic</li>
          <li class="grey">$ 9.99 / year</li>
          <li>Engage with classmates in real-time over private chat or chatroom messaging</li>
          <li class="grey"><a href="#" class="btn btn-outline-primary">Host My Chatversity</a></li>
        </ul>
        </div>
      </div>
      <div class="col-12 col-mg-6 col-lg-3 mb-4">
        <ul class="price">
          <li class="header ">Plus</li>
          <li class="grey">$ 24.99 / year</li>
          <li>Engage with classmates in real-time over private chat or chatroom messaging</li>
          <li class="grey"><a href="#" class="btn btn-outline-primary">Host My Chatversity</a></li>
        </ul>
      </div>
      <div class="col-12 col-mg-6 col-lg-3 mb-4">
        <ul class="price">
          <li class="header ">Premium</li>
          <li class="grey">$ 49.99 / year</li>
          <li>Engage with classmates in real-time over private chat or chatroom messaging</li>
          <li class="grey"><a href="#" class="btn btn-outline-primary">Host My Chatversity</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

    
    <!--Footer Include-->
    <?php include("footer.php"); ?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="materialize-src/js/bin/materialize.min.js"></script>
<style>
  *{
    /* border-radius: 8px; */
  }

  .columns {
    float: left;
    width: 20%;
    margin-left: 10%;
    margin-right: 10%;
    margin: 2%;
    padding: 10px;
  }

  .price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
  }

  .price:hover {
    -webkit-box-shadow: 0px 4px 12px rgba(21, 157, 246, 0.2);
    box-shadow: 0px 4px 12px rgba(21, 157, 246, 0.2);
  }

  .price .header {
    background-color: #26B1FF;
    color: white;
    font-size: 25px;
  }

  .price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
  }

  .price .grey {
    background-color: #eee;
    font-size: 20px;
  }

  @media only screen and (max-width: 100px) {
    .columns {
      width: 100%;
    }
  }
</style>
</body>
</html>
