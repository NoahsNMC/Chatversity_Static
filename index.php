<!DOCTYPE html>
 <html>
   <head>
      <!--Head Include-->
      <?php include("head.php"); ?>

      <title>Home | Chatversity</title>

      <!--TypedJS-->
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
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
                    <span id="typed" class="text-primary"></span>
                    <script>
                      var typed = new Typed('#typed', {
                          strings: ["Students", "Professors"],
                          typeSpeed: 25,
                          backSpeed: 25,
                          startDelay: 500,
                          backDelay: 2000,
                          loop: true
                      });
                    </script>
                  </h1>
                  <h5 class="text-light">Connecting and collaborating with your fellow classmates has never been easier.</h5>
                  <div class="download-buttons mt-4">
                    <a href="https://chatversity.app/signup"><button style="margin-top:5px;" class="btn btn-primary">I am a Student</button></a>
                    <a href="https://chatversity.app/signup"><button style="margin-top:5px;" class="btn btn-outline-primary">I am a Professor</button></a>
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
              When you <a href = "https://chatversity.app/signup">Sign Up</a> for Chatversity, we ask you to select the college or university that you attend, along with your major and personal interests. Based on this information, we recommend groups and connections at your university to help you meet new people and make the most of your time at college.
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
            <span class="overline text-primary">Simplifying Communication</span>
            <h3 class="text-secondary">Why Chatversity?</h3>
            <p class="text-light">
              Chatversity simplies communication for college students. With its intuitive layout and quick Sign Up process, Chatversity enables you to connect with your peers, join groups, and communicate effectively. Several of its features include instant messaging, university-specific groups, and the ability to add connections.
            </p>
           </div>
           <!-- right col -->
           <div class="col-12 col-md-6 offset-md-1">
             <!-- Features -->
             <div id="_featuresWrap">
               <!-- Feature 1 -->
               <div class="feature">
                 <img src="/content/track-courses-icon.png" width="48px" alt="">
                 <h6 class="text-secondary">Instant Messaging <span style="margin-left: 5px;"><i class="fa fa-check text-primary"></i></span></h6>
                 <p class="text-light body-2">
                    Whether its a conversation with a friend or everybody in a student organization, Chatversity allows you to instantly send and receive messages so that you can stay in-touch.
                 </p>
               </div>
               <!-- Feature 2 -->
               <div class="feature">
               <img src="/content/view-assignment-icon.png" width="48px" alt="">
                 <h6 class="text-secondary">University-Specific Groups <span style="margin-left: 5px;"><i class="fa fa-check text-primary"></i></span></h6>
                 <p class="text-light body-2">
                    Chatversity features groups that are unique to each registered university so that your group is only accessible by your peers.
                 </p>
               </div>
               <!-- Feature 3 -->
               <div class="feature">
               <img src="/content/manage-task-icon.png" width="48px" alt="">
                 <h6 class="text-secondary">Build Connections <span style="margin-left: 5px;"><i class="fa fa-check text-primary"></i></span></h6>
                 <p class="text-light body-2">
                    We think that one of the best ways to help students meet and connect with their peers is to allow users to build a friends lists, which we call your Connections.
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
          <p class="text-light">Chatversity offers the best way for college and university students to chat with their peers. Our app is built by and for students, with the purpose of improving, simplifying, and promoting communication.</p>
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
          <p class="text-light">Chatversity's built in task management system will assist students in staying focused on their work. We understand that college can be demanding and time-consuming, so we provide a simple way to help students stay on track.</p>
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
        <a href="https://chatversity.app/signup" class="btn btn-outline-primary btn-lg">Join Now</a>
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
