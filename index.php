<!DOCTYPE html>
 <html>
   <head>
      <!--Head Include-->
      <?php include("head.php"); ?>

      <title>Home | Chatversity</title>
   </head>

   <body>
      <!--Navbar Include-->
      <?php include("navbar.php"); ?>

     <!-- Hero Section -->
     <section id="_heroSection" class="section d-flex align-items-center bg-primary" style="height:100vh;">
        <div class="container">
            <div class="row">
              <div class="col-12 col-md-8">
                  <span class="text-secondary">For Students, Teachers and Universities</span>
                  <h1 class="text-white">Chat for 
                    <span class="text-secondary" id="#">
                      Students
                      <!-- TODO: add typed JS -->
                    </span>
                  </h1>
                  <h5 class="text-white">Connecting and collaborating with your students and fellow classmates has never been easier.</h5>
                  <button class="btn btn-light mt-5">Open Chatversity in your browser</button>
                  <div class="download-buttons mt-4">
                    <small class="text-uppercase text-info d-block mb-2">now Available on ios and android</small>
                    <button class="btn btn-info">Download for iOS</button>
                    <button class="btn btn-info">Download for Android</button>
                  </div>
              </div>
            </div>
           </div>
     </section>
     <script type="text/javascript">
     // Shrink header navigation on scroll
     $(document).ready(function(){
      $(window).on("scroll", function () {
          $('#_primary-navigation').toggleClass('tiny', $(document).scrollTop() > 80);
        });
     });
     </script>

     <section style="height:2000px;">
       <div class="container">
        <div class="row">
          <div class="col">

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
