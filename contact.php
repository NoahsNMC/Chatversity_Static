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

    <section class="d-flex align-items-center" style="height:85vh;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h1 class="text-center text-primary">Contact Us</h1>
            </div>
            <div class="col-sm-2"></div>
            <!-- Contact info -->
            <div class="col-sm-4">
                <h3 class="text-secondary">We'd love to hear from you</h3>
                <p>
                    Please contact us if you have any questions or comments. We'd love to get user input to further
                    enhance
                    your experience.
                </p>
                <p><span class="glyphicon glyphicon-map-marker mr-4"></span>385 Noah's Place Suite 878</p>
                <p><span class="glyphicon glyphicon-earphone mr-4"></span>877-295-7945</p>
                <p><span class="glyphicon glyphicon-envelope mr-4"></span>trash@noahosterhout.com</p>
            </div>
            <div class="col-sm-1"></div>
            <!-- Contact form -->
            <div class="col-sm-3">
                <form>
                    <input class="form-control" type="email" name="email" placeholder="Email">
                    <textarea class="form-control mt-4" name="message" placeholder="Leave some feedback...">
                        </textarea>
                    <input class="btn btn-primary btn-block mt-4" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</section>
    <!--Footer Include-->
    <?php include("footer.php"); ?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="materialize-src/js/bin/materialize.min.js"></script>
</body>

</html>