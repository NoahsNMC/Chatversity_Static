<footer id="_chatversityFooter" class="bg-secondary">
<div class="container py-5">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="#"><img src="/content/Logo-Light.png" alt="" width="150px"></a></h2>
                </div>
                <div class="col-sm-2">
                    <span class="overline text-lighter">Get started</span>
                    <ul>
                        <li><a href="/index.php" class="text-light">Home</a></li>
                        <li><a href="#" class="text-light">Download</a></li>
                        <li><a href="https://chatversity.app" class="text-light">Sign up</a></li>
                        <li><a href="/pricing.php" class="text-light">Pricing</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                <span class="overline text-lighter">About Us</span>
                    <ul>
                        <li><a href="/about.php" class="text-light">About Chatversity</a></li>
                        <li><a href="/about.php#about-us" class="text-light">Meet the Team</a></li>
                        <li><a href="#" class="text-light">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                <span class="overline text-lighter">Support</span>
                    <ul>
                        <li><a href="/faq.php" class="text-light">FAQ</a></li>
                        <li><a href="/contact.php" class="text-light">Contact Us</a></li>
                        <li><a href="#" class="text-light">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                <span class="overline text-lighter">Social</span>
                    <div class="social-networks py-3">
                        <a href="#" class="twitter text-primary"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="facebook text-primary"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="google text-primary"><i class="fab fa-google-plus"></i></a>
                    </div>
                    <a href="/contact.php" class="btn btn-outline-primary btn-sm">Contact us</a>
                </div>
            </div>
        </div>
        <div class="footer-copyright py-2 bg-darker">
            <small class="text-light">Copyright &copy; Chatversity 2019</small>
        </div>
    <!-- <a href="index.php" class="btn btn-link">Home </a> <span class="footer-split">|</span>
    <a href="about.php" class="btn btn-link"> About </a> <span class="footer-split">|</span>
    <a href="contact.php" class="btn btn-link"> Contact </a> <span class="footer-split">|</span>
    <a href="pricing.php" class="btn btn-link"> Pricing </a> <span class="footer-split">|</span>
    <a href="faq.php" class="btn btn-link"> FAQ</a> -->

    <style>

#_chatversityFooter .footer-copyright {
    background-color: #333333;
    padding-top: 3px;
    padding-bottom: 3px;
    text-align: center;
}


#_chatversityFooter .navbar-brand {
    margin-top: 45px;
    height: 65px;
}

#_chatversityFooter ul {
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;
    margin-top:16px;
}

#_chatversityFooter h5 {
    font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#_chatversityFooter h2 a{
    font-size: 50px;
    text-align: center;
    color: #fff;
}

#_chatversityFooter a {
    text-decoration: none;
}

#_chatversityFooter a:hover,
#_chatversityFooter a:focus {
    text-decoration: none;
    color: white;
}

#_chatversityFooter .social-networks a {
    font-size: 32px;
    color: #f9f9f9;
    padding: 10px;
    transition: 0.2s;
}

#_chatversityFooter .social-networks a:hover {
    text-decoration: none;
}

@media screen and (max-width: 767px) {
    #_chatversityFooter {
        text-align: center;
    }
}
</style>

    
<script type="text/javascript">
    $(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.pathname;
    console.log(pathname);
    var test = $('.navbar-nav li a[href="'+pathname+'"]');
    console.log(test);
    $('.navbar-nav > li > a[href="'+pathname+'"]').parent().addClass('active');
})
</script> 
</footer>