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
     <section id="_heroSection" class="section bg-white">
        <div class="container">
            <div class="row align-items-center">
              <div class="col-12 col-md-8">
                  <h1 class="text-secondary">Chat for 
                    <span class="text-secondary" id="#">
                      Students
                      <!-- TODO: add typed JS -->
                    </span>
                  </h1>
                  <h5 class="text-light">Connecting and collaborating with your students and fellow classmates has never been easier.</h5>
                  <div class="download-buttons mt-4">
                    <button class="btn btn-primary">I am a Student</button>
                    <button class="btn btn-outline-primary">I am a Teacher</button>
                  </div>
              </div>
              <div class="col-12 col-md-4">
                <img class="img-fluid d-none d-md-block" src="content/home-feature.png" alt="">
              </div>
            </div>
           </div>
     </section>
     
     <!-- How does it work -->
     <section class="section bg-lighter">
       <div class="container">
         <div class="row align-items-center py-5">
           <div class="col-12 col-md-8">
            <span class="overline text-primary">Chatversity</span>
            <h3 class="text-secondary">How Does it Work?</h3>
            <p class="text-light">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
           </div>
           <div class="col-12 col-md-4">
             <img class="img-fluid" src="content/order-confirmed.svg" alt="Jumping Illustration" />
           </div>
         </div>
       </div>
     </section>


     <!-- Why Chatversity -->
     <section class="section bg-white py-5">
       <div class="container">
         <!-- Row 1 -->
         <div class="row py-5">
           <!-- left col -->
           <div class="col-12 col-md-5">
            <span class="overline text-primary">Simplify your Life</span>
            <h3 class="text-secondary">Why Chatversity?</h3>
            <p class="text-light">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
           </div>
           <!-- right col -->
           <div class="col-12 col-md-6 offset-md-1">
             <!-- Features -->
             <div id="_featuresWrap">
               <!-- Feature 1 -->
               <div class="feature">
                 <img src="/content/track-courses-icon.png" width="48px" alt="">
                 <h6 class="text-secondary">Track Courses</h6>
                 <p class="text-light body-2">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 </p>
               </div>
               <!-- Feature 2 -->
               <div class="feature">
               <img src="/content/view-assignment-icon.png" width="48px" alt="">
                 <h6 class="text-secondary">View Assignments</h6>
                 <p class="text-light body-2">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 </p>
               </div>
               <!-- Feature 3 -->
               <div class="feature">
               <img src="/content/manage-task-icon.png" width="48px" alt="">
                 <h6 class="text-secondary">Manage Tasks</h6>
                 <p class="text-light body-2">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 </p>
               </div>
               <!-- endFeatures -->
             </div>
           </div>
         </div>
         <!-- endRow 1 -->
         <!-- Row 2 -->
         <!-- <div class="row">
           <div class="col-4"><div class="card shadow"><p>lorem</p></div></div>
           <div class="col-4"><div class="card"><p>lorem</p></div></div>
           <div class="col-4"><div class="card"><p>lorem</p></div></div>
         </div> -->
         <!-- endRow 2 -->
       </div>
     </section>
     <hr>

     <style>
     #_featuresWrap .feature img { position:absolute; transform: translateX(-150%); }
     </style>


    <!-- Better Chat -->
    <section class="section py-5">
    <div class="container">
      <div class="row py-5">
        <div class="col-12 col-md-6 col-lg-4 offset-lg-1">
          <img src="/content/home-phone-feature.png" class="img-fluid" alt="Home Phone Feature" />
        </div>
        <div class="col-12 col-md-6 col-lg-4 offset-lg-1">
          <span class="overline text-primary">Communicate</span>
          <h3 class="text-secondary">Better Chat</h3>
          <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- end Better Chat -->



    <!-- Task Management -->
    <section class="section py-5">
    <div class="container">
      <div class="row py-5">
        <div class="col-12 col-md-6 col-lg-4 offset-lg-1">
          <span class="overline text-primary">stay on target</span>
          <h3 class="text-secondary">Task Management</h3>
          <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="col-12 col-md-6 col-lg-4 offset-lg-1">
          <img src="/content/home-task-management-feature.png" class="img-fluid" alt="Home Task Management Feature" />
        </div>
      </div>
    </div>
  </section>
  <!-- end Task Management -->


  <!-- Call to Action -->
  <section class="section bg-lighter">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-12 text-center">
        <span class="overline text-primary">Get Started</span>
        <h3 class="text-secondary">Start Using Chatversity Today</h3>
        <a href="" class="btn btn-outline-primary btn-lg">Join Now</a>
      </div>
    </div>
  </div>
  </section>
  <!-- end Call to Action -->


     <script type="text/javascript">
     // Shrink header navigation on scroll
     $(document).ready(function(){
      $(window).on("scroll", function () {
          $('#_primary-navigation').toggleClass('tiny', $(document).scrollTop() > 80);
        });
     });
     </script>

     <!--Footer Include-->
     <?php include("footer.php"); ?>
     
     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="materialize-src/js/bin/materialize.min.js"></script>
   </body>
 </html>
