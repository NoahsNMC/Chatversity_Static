<nav id="_primary-navigation" class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="index.php"><img src="content/Logo.png" width="175px" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pricing.php">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/faq.php">FAQ</a>
            </li>
        </ul>
        <div>
            <a href="https://chatversity.app/signup"><button class="btn btn-primary">Sign up</button></a>
            <a href="https://chatversity.app/login"><button class="btn btn-link">Login</button></a>
        </div>
    </div>
</nav>

<script type="text/javascript">
     // Shrink header navigation on scroll
     $(document).ready(function(){
      $(window).on("scroll", function () {
          $('#_primary-navigation').toggleClass('tiny', $(document).scrollTop() > 80);
        });
     });
</script>