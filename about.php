<!DOCTYPE html>
<html>
<head>
    <!--Head Include-->
    <?php include("head.php"); ?>

    <title>About | Chatversity</title>
<style>
    .custom-page {
    padding-top: 80px;
    }

    .page-padding {
    padding-top: 5%;
    }

    a {
    text-decoration: none;
    color: #007bff;
    }

    .float-right {
    float: right;
    }

    .styled-btn {
    padding: 5px 20px;
    background-color: #282828;
    color: white;
    border: 1px solid black;
    border-radius: 20px;
    }
    .about-page {
    height: 100%;
    }

    .fixed-layer {
    position: fixed;
    z-index: 0;
    }

    #about-lead {
    color: #adb5bd;
    }

    #about-chatversity {
    margin-left: 10%;
    margin-right: 10%;
    }

    .page-title {
    margin-bottom: 30px;
    }

    #chatversity-logo-title {
    width: 50px;
    }

    #img-phone {
    width: 100%;
    max-width: 300px;
    height: 400px;
    float: right;
    display: inline-block;
    margin-right: 20px;
    border: 1px solid black;
    }

    @media (max-width: 991px) {
    #img-phone {
        display: none;
    }
    #chatversity-logo-title {
        width: 40px;
    }
    .about-page {
        height: auto;
        min-height: 100%;
        padding-bottom: 30px;
    }
    .fixed-layer {
        position: relative;
    }
    }

    #about-us {
    background-color: #f8f9fa;
    padding-bottom: 50px;
    z-index: +2;
    border-top: 1px solid #adb5bd;
    position: relative;
    }

    .custom-card {
    margin-top: 50px;
    margin-bottom: 50px;
    width: 85%;
    }

    .card-image {
    max-width: 200px;
    display: inline-block;
    vertical-align: top;
    }

    .card-image > img {
    width: 200px;
    border: 1px solid #282828;
    border-radius: 10px;
    }

    .card-bio {
    width: 70%;
    padding-left: 30px;
    display: inline-block;
    }

    .card-bio-left {
    width: 70%;
    padding-right: 30px;
    display: inline-block;
    }

    .card-role {
    color: #6c757d;
    }

    .card-bio-text {
    text-align: justify;
    }

    .custom-line {
    color: #6c757d;
    width: 85%;
    }

    @media (max-width: 991px) {
    .custom-card {
        width: 100%;
    }
    .card-image {
        display: block;
        margin: 0 auto;
    }
    .card-bio {
        display: block;
        margin: 0 auto;
        padding-left: 0;
        text-align: center;
        padding-top: 20px;
        width: 100%;
    }
    .card-bio-left {
        display: block;
        margin: 0 auto;
        padding-right: 0;
        text-align: center;
        padding-bottom: 20px;
        width: 100%;
    }
    }
</style>
</head>
<body>
    <!--Navbar Include-->
    <?php include("navbar.php"); ?>

    <section class="custom-page container-fluid about-page">
        <div class="fixed-layer">
            <div class="page-padding"> </div> 
            <h1 class="text-center page-title">About Chatversity</h1>
            <div id="about-chatversity">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="#" id="img-phone">
                    </div>
                    <div class="col-lg-8 lead" id="about-lead">
                        Chatversity is a messaging app to connect college and university students with their peers. It was built by five college students with the goal of promoting and simplifying collaboration across college and university campuses. <br> <br>

                        <a href="contact.php" id="contact-us-btn" style="z-index:1;"><button class="btn btn-primary">Contact Us!</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid custom-page text-center" id="about-us">
        <h1 class="page-title">Meet the Team</h1>

        <hr class="custom-line"/>

        <div class="custom-card container-fluid text-left">
            <div class="card-image">
                <img src="static/media/connor-pic.png">
            </div>

            <div class="card-bio">
                <div class="card-text">
                    <h3>Connor Hansen</h3>
                    <span class="card-role">MEAN Stack Developer | UI/UX Designer</span> <br><br>
                    <span class="card-bio-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
            </div>
        </div>

        <hr class="custom-line"/>

        <div class="custom-card container-fluid text-right">
            <div class="card-bio-left">
                <div class="card-text">
                    <h3>Cati Kujawski</h3>
                    <span class="card-role">Database Administrator (DBA)</span> <br><br>
                    <span class="card-bio-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
            </div>

            <div class="card-image">
                <img src="static/media/cati-pic.png">
            </div>
        </div>

        <hr class="custom-line"/>

        <div class="custom-card container-fluid text-left">
            <div class="card-image">
                <img src="#" style="width:200px; height: 200px;">
            </div>

            <div class="card-bio">
                <div class="card-text">
                    <h3>Scott Peterson</h3>
                    <span class="card-role">Front-end Developer | UI/UX Designer </span> <br><br>
                    <span class="card-bio-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
            </div>
        </div>

        <hr class="custom-line"/>

        <div class="custom-card container-fluid text-right">
            <div class="card-bio-left">
                <div class="card-text">
                    <h3>Noah Osterhout</h3>
                    <span class="card-role">MEAN Stack Developer | Scrum Master</span> <br><br>
                    <span class="card-bio-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
            </div>

            <div class="card-image">
                <img src="static/media/noah-pic.png" style="width:200px; height: 200px;">
            </div>
        </div>

        <hr class="custom-line"/>

        <div class="custom-card container-fluid text-left">
            <div class="card-image">
                <img src="static/media/richie-pic.png">
            </div>

            <div class="card-bio">
                <div class="card-text">
                    <h3>Richie Tarkowski</h3>
                    <span class="card-role">MEAN Stack Developer</span> <br><br>
                    <span class="card-bio-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
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