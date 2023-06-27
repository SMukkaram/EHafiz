<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/logo/logo.png">

    <title>e-Hafiz User Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">

    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

  </head>

  <body class="light-sidebar-nav">

  <section id="container">
      <!--header start-->
      <?php include("header.php"); ?>
      <!--header end-->
      <!--sidebar start-->
      <?php include("sidebar.php"); ?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
              <div class="row state-overview">
                  <div class="col-lg-6 col-sm-12">
                      <section class="card">
                          <div class="symbol terques">
                              <i class="fa fa-play-circle-o"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                  0
                              </h1>
                              <p>Completed Videos</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                      <section class="card">
                          <div class="symbol blue">
                              <i class="fa fa-pencil-square-o"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                  0
                              </h1>
                              <p>Completed Test</p>
                          </div>
                      </section>
                  </div>
                  <!--<div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol yellow">
                              <i class="fa fa-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  0
                              </h1>
                              <p>New Order</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol blue">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                                  0
                              </h1>
                              <p>Total Profit</p>
                          </div>
                      </section>
                  </div>-->
              </div>
              <!--state overview end-->

              <div class="row">
                  <div class="col-lg-8">
                      <!--custom chart start-->
                      <div class="border-head">
                          <h3>COURSE WISE WEEKLY ASSIGNMENTS</h3>
                      </div>
                      
                      <!--custom chart end-->
                  </div>
                  <div class="col-lg-4">
                     <section class="card">
                          <header class="card-header">
                              ASSIGNMENT SUMMARY
                          </header>
                          <div class="card-body">
                             <dl class="dl-horizontal mtop20 p-progress">
                                          <dt>Submitted Out of Assigned:</dt>
                                          <dd>
                                              <div class="progress">
                                                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                              </div>
                                              <small>Project completed in <strong>75%</strong>. Remaining close the assignment.</small>
                                          </dd>
                                      </dl>
                                <dl class="dl-horizontal mtop20 p-progress">
                                          <dt>Checked Out of Submitted:</dt>
                                          <dd>
                                              <div class="progress">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                              </div>
                                              <small>Project completed in <strong>45%</strong>. Remaining close the assignment.</small>
                                          </dd>
                                      </dl>
                                <dl class="dl-horizontal mtop20 p-progress">
                                          <dt>In Progress Out of Checked:</dt>
                                          <dd>
                                              <div class="progress">
                                                  <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                              </div>
                                              <small>Project completed in <strong>65%</strong>. Remaining close the assignment.</small>
                                          </dd>
                                      </dl>
                                <dl class="dl-horizontal mtop20 p-progress">
                                          <dt>Final Marked Out of Checked:</dt>
                                          <dd>
                                              <div class="progress">
                                                  <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                                              </div>
                                              <small>Project completed in <strong>25%</strong>. Remaining close the assignment.</small>
                                          </dd>
                                      </dl>
                                <!--<dl class="dl-horizontal mtop20 p-progress">
                                          <dt>Submitted Out of Assigned:</dt>
                                          <dd>
                                              <div class="progress">
                                                  <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                                              </div>
                                              <small>Project completed in <strong>55%</strong>. Remaining close the project.</small>
                                          </dd>
                                      </dl>-->
                          </div>
                      </section>
                  </div>
              </div>

          </section>
      </section>
      <!--main content end-->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2018 &copy; e-Hafiz.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/count.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });

  </script>

  </body>
</html>
