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

 <!-- PRICING-TABLE CONTAINER -->
 <h1 style="margin-top:100px; text-align:center; font-size: 50px">Pricing Overview</h1>

<div class="columns">
  <ul class="price">
    <li class="header ">FREE</li>
    <li class="grey">$ 0.00 / year</li>
    <li>10GB Storage</li>
    <li class="grey"><a href="#" class="button">Host My Chatversity</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Basic</li>
    <li class="grey">$ 9.99 / year</li>
    <li>10GB Storage</li>
    <li class="grey"><a href="#" class="button">Host My Chatversity</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Plus</li>
    <li class="grey">$ 24.99 / year</li>
    <li>25GB Storage</li>
    <li class="grey"><a href="#" class="button">Host My Chatversity</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Premium</li>
    <li class="grey">$ 49.99 / year</li>
    <li>50GB Storage</li>
    <li class="grey"><a href="#" class="button">Host My Chatversity</a></li>
  </ul>
</div>
    
    <!--Footer Include-->
    <?php include("footer.php"); ?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="materialize-src/js/bin/materialize.min.js"></script>
<style>
  *{
    border-radius: 8px;
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
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
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

  .button {
    background-color: #0E425F;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 15px;
  }

  @media only screen and (max-width: 100px) {
    .columns {
      width: 100%;
    }
  }
</style>
</body>
</html>