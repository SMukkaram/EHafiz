<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Certificates</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


  </head>

  <body class="light-sidebar-nav">

  <section id="container" class="">
     <!--header start-->
      <?php include("header.php"); ?>
      <!--header end-->
      <!--sidebar start-->
      <?php include("sidebar.php"); ?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row" id="draggable_portlets">
                  <div class="col-md-6 column sortable">
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="card">
                          <div class="card-header">Portlet 1</div>
                          <div class="card-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="card ">
                          <div class="card-header bg-primary text-light">Portlet 2</div>
                          <div class="card-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="card">
                          <div class="card-header bg-success text-light">Portlet 3</div>
                          <div class="card-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                  </div>
                  <div class="col-md-6 column sortable">
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="card">
                          <div class="card-header bg-warning text-light">Portlet 4</div>
                          <div class="card-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="card ">
                          <div class="card-header bg-danger text-light">Portlet 5</div>
                          <div class="card-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="card">
                          <div class="card-header bg-info text-light">Portlet 6</div>
                          <div class="card-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2018 &copy; e - Hafiz.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
    <script src="js/draggable-portlet.js"></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

      <script>
          jQuery(document).ready(function() {
              DraggablePortlet.init();
          });
      </script>

  </body>
</html>
