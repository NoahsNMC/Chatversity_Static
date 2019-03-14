<footer id="custom-footer">
    <a href="index.php" class="btn btn-link">Home </a> <span class="footer-split">|</span>
    <a href="about.php" class="btn btn-link"> About </a> <span class="footer-split">|</span>
    <a href="contact.php" class="btn btn-link"> Contact </a> <span class="footer-split">|</span>
    <a href="pricing.php" class="btn btn-link"> Pricing </a> <span class="footer-split">|</span>
    <a href="faq.php" class="btn btn-link"> FAQ</a>

    <hr>

    <small>Copyright &copy; Chatversity 2019</small>

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