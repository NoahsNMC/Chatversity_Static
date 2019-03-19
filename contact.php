<!DOCTYPE html>
<html>

<head>
    <!--Head Include-->
    <?php include("head.php"); ?>

    <!-- Import glyphicon.css -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/styles.css" media="screen,projection" />

    <title>Contact | Chatversity</title>
</head>

<body>
    <!--Navbar Include-->
    <?php include("navbar.php"); ?>

    <section class="section d-flex" style="min-height:100vh; margin-bottom: 30px;">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-12 text-center">
                <h1 class="text-secondary">Contact Us</h1>
                <h5 class="text-primary">We'd love to hear from you!</h5>
            </div>
        </div>
        <div class="row">
            <!-- Contact info -->
            <div class="col-12 col-sm-6 col-md-7 offset-md-1 col-lg-5 offset-lg-2">
                <p class="text-light">
                    Please contact us if you have any questions or comments. We'd love to get feedback to further
                    enhance your experience with Chatversity.
                </p>
                <p><span class="glyphicon glyphicon-map-marker mr-4 text-primary"></span><a href="https://www.google.com/maps/place/NMC/@44.7653609,-85.5858994,15z/data=!4m5!3m4!1s0x0:0x6ea4d36989831337!8m2!3d44.7653609!4d-85.5858994">1701 E Front St<br />Traverse City, MI 49686</a></p>
                <p><span class="glyphicon glyphicon-earphone mr-4 text-primary"></span><a href="tel:8772957945">877-295-7945</a></p>
                <p><span class="glyphicon glyphicon-envelope mr-4 text-primary"></span><a href="mailto:info@chatversityapp.com">info@chatversityapp.com</a></p>
            </div>
            <!-- <div class="col-sm-1"></div> -->
            <!-- Contact form -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <form action="" method="post">
                    <input class="form-control" type="email" name="email" placeholder="Your Email Address" required>
                    <textarea class="form-control mt-4" name="message" rows="5"> </textarea>
                    <input class="btn btn-primary btn-block mt-4" type="submit" value="Submit">
                </form>
            </div>

            <?php 
                $to = "info@chatversityapp.com";
                $subject = "Chatversity";

                if (isset($_POST['submit'])) {
                    $message = $_POST['message'];
                    $email = $_POST['email'];

                    mail($to,$subject,$message);
                }
            ?>
        </div>
    </div>
    </section>

    <!--Footer Include-->
    <?php include("footer.php"); ?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="materialize-src/js/bin/materialize.min.js"></script>
</body>

</html>