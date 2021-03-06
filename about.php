<!DOCTYPE html>
<html>
<head>
    <!--Head Include-->
    <?php include("head.php"); ?>

    <title>About | Chatversity</title>
<style>
    .custom-page {
    padding-top: 40px;
    }

    .page-padding {
    padding-top: 5%;
    }

    a {
    text-decoration: none;
    color: #007bff;
    }

    .about-page {
        min-height: 100%;
    }

    .fixed-layer {
        position: fixed;
        z-index: 0;
        min-height: 100%;
    }

    .hover-link:hover{
        animation: rotate .3s;
    }

    @keyframes rotate {
        0% {
            transform: rotate(0deg); 
        }
        50% {
            transform: rotate(45deg); 
        }
        100% {
            transform: rotate(-45deg); 
        }
    }

    #img-phone {
    width: 100%;
    float: right;
    display: inline-block;
    margin-right: 10px;
    margin-top: -40px;
    }

    @media (max-width: 991px) {
        #img-phone {
            display: none;
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

    <section class="container-fluid about-page">
        <div class="fixed-layer">
            <div class="row py-5">
                <div class="col-12">
                <h1 class="text-center text-secondary">About Chatversity</h1>
                </div>
            </div>
            <div style="margin-left: 10%; margin-right: 10%;">
                <div class="row">
                    <div class="d-none d-md-block col-lg-4">
                        <img src="static/media/phone.png" id="img-phone">
                    </div>
                    <div class="col-12 col-lg-8">
                    <p class="text-light">
                        Chatversity is a messaging app to connect college and university students with their peers. It was built by five college students with the goal of promoting and simplifying collaboration across college and university campuses. <br> <br>
                        This project began as the idea to develop a messaging app for students at our college, Northwestern Michigan College. However, we soon decided to expand the project scope and make it available to all colleges and universities across the state of Michigan. <br> <br>
                        Read more about each member in our team of five below! <br> <br> 
                        <a href="#about-us" id="contact-us-btn"><button class="btn btn-secondary mt-2">Meet the Team!</button></a>
                        <a href="/contact.php" id="contact-us-btn"><button class="btn btn-primary mt-2">Contact Us!</button></a>
                    </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid custom-page text-center bg-lighter" id="about-us">
        <div class="container">
            <div class="row py-5">
                <div class="col-12">
                    <h1 class="text-secondary">Meet the Team</h1>
                </div>
            </div>
        </div>

        <hr class="custom-line"/>

        <div class="custom-card container-fluid text-left">
            <div class="card-image">
                <img src="static/media/connor-pic.png">
            </div>

            <div class="card-bio">
                <div class="card-text">
                    <span class="overline text-primary">MEAN Stack Developer | UI/UX Designer</span>
                    <h3 class="text-secondary">Connor Hansen</h3>
                    <p class="text-light">A web developer with a passion for creativity and design. Currently, Connor builds interactive digital experiences at <a class="text-secondary" href="legendarylion.com">Legendary Lion Web Design</a> in Northern Michigan.<br><br><span><a class="text-secondary" href="https://hvnsen.com"><i class="fab fa-dribbble hover-link"></i></a></span></p>
                </div>
            </div>
        </div>

        <hr class="custom-line"/>

        <div class="custom-card container-fluid text-right">
            <div class="card-bio-left">
                <div class="card-text">
                    <span class="overline text-primary">Database Administrator (DBA)</span>
                    <h3 class="text-secondary">Cati Kujawski</h3>
                    <p class="text-light">Cati is a part-time student at Ferris State University and is working on her Bachelor's degree in Computer Information Systems. She will be graduating in May 2020.</p>
                </div>
            </div>

            <div class="card-image">
                <img src="static/media/cati-pic.png">
            </div>
        </div>

        <hr class="custom-line"/>

        <div class="custom-card container-fluid text-left">
            <div class="card-image">
                <img src="static/media/scott-pic.png" style="width:200px; height: 200px;">
            </div>

            <div class="card-bio">
                <div class="card-text">
                    <span class="overline text-primary">Front-end Developer | UI/UX Designer </span>
                    <h3 class="text-secondary">Scott Peterson</h3>
                    <p class="text-light">Scott has been a student at NMC since 2013, but he switched into the CIT program in 2015. Scott has an Associate degree in another program, and he is working towards the CIT Associate. Scott is also pursuing a Bachelor's degree in Computer Information Systems through Ferris State University.</p>
                </div>
            </div>
        </div>

        <hr class="custom-line"/>

        <div class="custom-card container-fluid text-right">
            <div class="card-bio-left">
                <div class="card-text">
                    <span class="overline text-primary">MEAN Stack Developer | Scrum Master</span>
                    <h3 class="text-secondary">Noah Osterhout</h3>
                    <p class="text-light">Noah is a second-year student at Northwestern Michigan College in the CIT program. Noah describes himself as "<em>A programmer that is focused on creating kick ass websites and software</em>". <br><br><span><a class="text-secondary" href="https://noahosterhout.com/"><i class="fab fa-dribbble hover-link"></i></a></span></p>
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
                    <span class="overline text-primary">MEAN Stack Developer | Editor</span>
                    <h3 class="text-secondary">Richie Tarkowski</h3>
                    <p class="text-light">Richie is a second-year student at NMC and is pursuing the Computer Information Systems Bachelor's degree at Ferris State University.  Currently, Richie automates test cases at <a class="text-secondary" href="https://www.hagerty.com/">Hagerty</a>.  <br><br><span><a class="text-secondary" href="https://richietarkowski.com"><i class="fab fa-dribbble hover-link"></i></a></span></p>
                </div>
            </div>
        </div> 

    </section>
    
    <!--Footer Include-->
    <div  style="position: relative; z-index: 2;">
        <?php include("footer.php"); ?>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="materialize-src/js/bin/materialize.min.js"></script>
</body>
</html>