<!DOCTYPE html>
<html>
  <head>
    <!--Head Include-->
    <?php include("head.php"); ?>

    <title>FAQ | Chatversity</title>
  </head>
  <body>
    <!--Navbar Include-->
    <?php include("navbar.php"); ?>

    <!-- FAQ Section -->
    <section class="d-flex align-items-center" style="min-height:100vh; margin-bottom: 30px;">
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 text-center">
          <h1 class="text-secondary">FAQ</h1>
          <br>
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button
                    class="btn btn-link"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    What is Chatversity?
                  </button>
                </h2>
              </div>

              <div
                id="collapseOne"
                class="collapse show"
                aria-labelledby="headingOne"
                data-parent="#accordionExample"
              >
                <div class="card-body">
                Chatversity is a messaging app to connect college and university students with their peers. Our goal is to promote and simplify communication so that students can make the most of their time at college.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button
                    class="btn btn-link collapsed"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    How much does Chatversity cost?
                  </button>
                </h2>
              </div>
              <div
                id="collapseTwo"
                class="collapse"
                aria-labelledby="headingTwo"
                data-parent="#accordionExample"
              >
                <div class="card-body">
                Chatversity has four different plans (Free, Basic, Plus, and Premium). These plans are to be paid by the university, not the students. If your college is on our Beta list, Chatversity will not charge them. View our <a href="/pricing.php" class="text-secondary">Price Guide</a>.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button
                    class="btn btn-link collapsed"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    How can I access Chatversity?
                  </button>
                </h2>
              </div>
              <div
                id="collapseThree"
                class="collapse"
                aria-labelledby="headingThree"
                data-parent="#accordionExample"
              >
                <div class="card-body">
                  You can download Chatversity for free on iOS and Android. You can also access <a href="https://chatversity.app" class="text-secondary">Chatversity</a> on the web.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                  <button
                    class="btn btn-link collapsed"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapseFour"
                    aria-expanded="false"
                    aria-controls="collapseFour"
                  >
                    Does Chatversity collect my data?
                  </button>
                </h2>
              </div>
              <div
                id="collapseFour"
                class="collapse"
                aria-labelledby="headingFour"
                data-parent="#accordionExample"
              >
                <div class="card-body">
                  Yes. You can see how we collect and store your data
                  <a class="text-secondary" href="https://chatversityapp.com/data-policy">Here</a>.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFive">
                <h2 class="mb-0">
                  <button
                    class="btn btn-link collapsed"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapseFive"
                    aria-expanded="false"
                    aria-controls="collapseFive"
                  >
                    Is my college/university set up with Chatversity?
                  </button>
                </h2>
              </div>
              <div
                id="collapseFive"
                class="collapse"
                aria-labelledby="headingFive"
                data-parent="#accordionExample"
              >
                <div class="card-body">
                  Most colleges and universities in the State of Michigan are. If your institution hasn't purchased one of our plans yet, ask a school's administrators to contact us about pricing and features.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md2">
        </div>
      </div>
    </section>

    <!--Footer Include-->
    <?php include("footer.php"); ?>

    <!--JavaScript at end of body for optimized loading-->
    <script
      type="text/javascript"
      src="materialize-src/js/bin/materialize.min.js"
    ></script>

  </body>
</html>
