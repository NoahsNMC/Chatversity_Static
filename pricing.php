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
      <div class="col-12 text-center">
        <h1 class="text-secondary">Pricing Guide</h1> <br>
        <p class="lead text-secondary">Find the <span class="text-primary">perfect plan</span> for your institution!</p>
      </div>
    </div>
  </div>
</section>
 <!-- PRICING-TABLE CONTAINER -->
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-mg-6 col-lg-3 mb-4">
        <ul class="price">
          <li class="header "> &mdash; Free &mdash;</li>
          <li class="grey">$ 0.00 / year</li>
          <li class="text-left">
            <strong>100</strong> Users / Month <br>
            <strong>30 Day</strong> Message Retention <br>
            <strong>1mb</strong> Max File Size <br>
            <strong>5,000</strong> Messages / Month <br>
          </li>
          <li class="grey"><button class="btn btn-secondary" onclick="displayPaymentAlert()">Get Started!</button></li>
        </ul>
      </div>
      <div class="col-12 col-mg-6 col-lg-3 mb-4">
        <div class="price-box">
        <ul class="price">
          <li class="header ">&mdash; Basic &mdash;</li>
          <li class="grey">$ 9.99 / year</li>
          <li class="text-left">
            <strong>500</strong> Users / Month <br>
            <strong>45 Day</strong> Message Retention <br>
            <strong>3mb</strong> Max File Size <br>
            <strong>25,000</strong> Messages / Month <br>
          </li>
          <li class="grey"><button class="btn btn-secondary" onclick="displayPaymentAlert()">Get Started!</button></li>
        </ul>
        </div>
      </div>
      <div class="col-12 col-mg-6 col-lg-3 mb-4">
        <ul class="price">
          <li class="header ">&mdash; Plus &mdash;</li>
          <li class="grey">$ 24.99 / year</li>
          <li class="text-left">
            <strong>2,000</strong> Users / Month <br>
            <strong>60 Day</strong> Message Retention <br>
            <strong>5mb</strong> Max File Size <br>
            <strong>100,000</strong> Messages / Month <br>
          </li>
          <li class="grey"><button class="btn btn-secondary" onclick="displayPaymentAlert()">Get Started!</button></li>
        </ul>
      </div>
      <div class="col-12 col-mg-6 col-lg-3 mb-4">
        <ul class="price">
          <li class="header ">&mdash; Premium &mdash;</li>
          <li class="grey">$ 49.99 / year</li>
          <li class="text-left">
            <strong>5,000</strong> Users / Month <br>
            <strong>90 Day</strong> Message Retention <br>
            <strong>10mb</strong> Max File Size <br>
            <strong>250,000</strong> Messages / Month <br>
          </li>
          <li class="grey"><button class="btn btn-secondary" onclick="displayPaymentAlert()">Get Started!</button></li>
        </ul>
      </div>
    </div>
  </div>
  <script>
    function displayPaymentAlert(){
      let msg = document.getElementById("payment-alert");
      if(msg.style.display == "none"){
        msg.style.display = "block";
      }

      msg.scrollIntoView(false);
    }
  </script>

  <!--Payment Alert-->
  <div class="container text-center mt-4 pb-4 mb-1" id="payment-alert" style="display:none;">
    <div class="alert alert-danger" role="alert">
      Finalized Pricing and Payment Mechanism Coming Soon!
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
