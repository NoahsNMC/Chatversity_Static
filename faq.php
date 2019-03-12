<!DOCTYPE html>
<html>
  <head>
    <!--Head Include-->
    <?php include("head.php"); ?>

    <title>FAQ | Chatversity</title>
    <style>
     .card-head {

     }
     .card-body {

     }
    </style>
  </head>
  <body>
    <!--Navbar Include-->
    <?php include("navbar.php"); ?>

    <!-- FAQ Section -->
    <section class="d-flex align-items-center" style="height:100vh;">
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 text-center">
          <h1 class="text-primary">FAQ</h1>
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
                  Chatversity is a college/university communication app for students
                  and teachers that help bring schools closer.
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
                  Chatversity has 4 price tiers that are aimed at the Schools and
                  not the students. If youre college supports Chatversity or your
                  school is apart of our beta list, it is free to use.
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
                    Where can I get Chatversity?
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
                  Chatversity is free on iOS and Android. You can always access
                  Chatversity from the web as well.
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
                  Yes, to help keep cost down to schools we do collect data. You can
                  see how we collect your data and how we store it
                  <a href="https://chatversityapp.com/data-policy">here</a>.
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
                    What colleges/universities are apart of Chatversity?
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
                  Chatversity is primarily in Michigan and most Michigan schools are
                  in our database.
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
