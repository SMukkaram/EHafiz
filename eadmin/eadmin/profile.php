<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Blank</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/colorpicker/css/bootstrap-colorpicker.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-multi-select/css/multi-select.css" />
    
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css" />

   <!-- switchery-->
    <link rel="stylesheet" type="text/css" href="assets/switchery/switchery.css" />

    <!--select 2-->
    <link rel="stylesheet" type="text/css" href="assets/select2/css/select2.min.css"/>

    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">
    
     <!--  summernote -->
      <link href="assets/summernote/summernote-bs4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    
    <!--Video Player Css Start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelementplayer.css">
    <link rel="stylesheet" href="css/video/context-menu.css">
    <link rel="stylesheet" href="css/video/loop.css">
    <link rel="stylesheet" href="css/video/stop.css">
    <link rel="stylesheet" href="css/video/playlist.css">
    <link rel="stylesheet" href="css/video/jump-forward.css">
    <link rel="stylesheet" href="css/video/skip-back.css">
    <link rel="stylesheet" href="css/video/source-chooser.css">
    <link rel="stylesheet" href="css/video/speed.css">
    <link rel="stylesheet" href="css/video/vrview.css">
    <!--<link rel="stylesheet" href="css/video/demo.css">-->
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
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="card">
                          <div class="user-heading round">
                              <a href="#">
                                  <img src="img/profile-avatar.jpg" alt="">
                              </a>
                              <h1>Jonathan Smith</h1>
                              <p>jsmith@flatlab.com</p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li class="active nav-item"><a class="nav-link" href="profile.php"> <i class="fa fa-user"></i> Profile</a></li>
                              <li class="nav-item"><a class="nav-link" href="edit-profile.php"> <i class="fa fa-edit"></i> Edit profile</a></li>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="card">
                        <header class="card-header biograph-v">
                              <h4>Bio Graph</h4>
                          </header>
                          <div class="card-body bio-graph-info">
                              
                              <div class="row">
                                  <div class="bio-row">
                                      <p><span>First Name </span>: Jonathan</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Last Name </span>: Smith</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Country </span>: Australia</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Birthday</span>: 13 July 1983</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Occupation </span>: UI Designer</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Email </span>: jsmith@flatlab.com</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Mobile </span>: (12) 03 4567890</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Phone </span>: 88 (02) 123456</p>
                                  </div>
                              </div>
                          </div>
                      </section>

                      <section class="card pb-3">
                        <header class="card-header biograph-v">
                              <h4>Billing</h4>
                          </header>
                          <div class="card-body bio-graph-info">
                             <form class="form-horizontal" role="form">
                                      <div class="form-group">
                                          <label  class="col-lg-4 control-label">NAME ON INVOICE</label>
                                          <div class="col-lg-6">
                                              <input type="name" class="form-control" id="name" placeholder=" " value="vishnu Kashap">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label  class="col-lg-4 control-label">ADDRESS</label>
                                          <div class="col-lg-6">
                                              <input type="name" class="form-control" id="name" placeholder=" " value="C-28, Ground Floor, Near Nirula's Hotel, Sector-2 Nearest, Metro Station Rd, Sector 15, Noida, Uttar Pradesh 201301">
                                          </div>
                                      </div>
                                      <div class="choose_country">
                                      <div class="form-group">
                                      <label  class="col-lg-4 control-label">COUNTRY</label>
                                      <div class="col-lg-6">
                                      <select class="form-control">
                                          <option>Oman</option>
                                          <option>Saudi</option>
                                          <option>India</option>
                                      </select>
                                  </div>
                                  </div>
                                  </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button type="submit" class="btn btn-info bg-success">Update Billing</button>
                                          </div>
                                      </div>
                                  </form>
                          </div>
                          <div class="vvv">
                            <div class="container">
                            <div class="row p-3">
                              <div class="col-md-12">
                                <h4>Payment Info</h4>
                                <ul>
                                  <li class="list-group-item">
                                    <div class="media align-items-center">
                                      <i class="fa fa-credit-card pay-v"></i>
                                      <div class="media-body">
                                        <p class="mb-0">**** **** **** 2422</p>
                                        <small>Updated on 12/02/2016</small>
                                      </div>
                                      <div class="media-right">
                                        <a href="#" class="btn bg-success" style="color: white;">
                                          <i class="fa fa-edit" style="color: white;"></i>
                                          EDIT
                                        </a>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="list-group-item">
                                    <div class="media align-items-center">
                                      <i class="fa fa-credit-card pay-v"></i>
                                      <div class="media-body">
                                        <p class="mb-0">**** **** **** 2422</p>
                                        <small>Updated on 12/02/2016</small>
                                      </div>
                                      <div class="media-right">
                                        <a href="#" class="btn bg-success" style="color: white;">
                                          <i class="fa fa-edit" style="color: white;"></i> 
                                          EDIT
                                        </a>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                                </div>
                              </div>
                              </div>
                            </div>
                          </div>
                      </section>
                  
                      <section>
    
                      </section>
                      <div class="row">
                      <aside class="profile-nav col-lg-3">
                      
                  </aside>
                      <aside class="profile-info col-lg-9">
                      <section class="card">
                        <header class="card-header biograph-v">
                              <h4>Subscription</h4>
                          </header>
                          <div class="card-body bio-graph-info border border-top-0 border-left-0 border-right-0">
                              <div class="row">
                                  <div class="col-md-3">
                                  <p>YOUR CURRENT PLAN</p>
                                  </div>
                                  <div class="col-md-6">
                                  <p class="secondsub-v">Basic, $9 per month</p>
                                  </div>
                                  <div class="col-md-3">
                                  <!-- <a href="#"><p class="click-v">Change Plan</p></a> -->
                                  </div>
                              </div>
                          </div>
                          <div class="card-body bio-graph-info border border-top-0 border-left-0 border-right-0">
                              <div class="row">
                                  <div class="col-md-3">
                                  <p>BILLING CYCLE</p>
                                  </div>
                                  <div class="col-md-6">
                                  <p class="secondsub-v">You will be charged $9 on Aug 20, 2018</p>
                                  <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">
                                      <h6 class="Enableauto-v">Enable automatic renewal</h6>
                                    </label>
                                  </div>
                                  
                                  </div>
                                  <div class="col-md-3">
                                  <!-- <a href="#"><p>Change Plan</p></a> -->
                                  </div>
                              </div>
                          </div>
                          <div class="card-body bio-graph-info border border-top-0 border-left-0 border-right-0">
                              <div class="row">
                                  <div class="col-md-3">
                                  <p>PAYMENT INFORMATION</p>
                                  </div>
                                  <div class="col-md-6">
                                 <p class="secondsub-v"><span><img src="img/profile/visa.png"></span>   Basic, $9 per month</p>
                                  </div>
                                  <div class="col-md-3">
                                  <!-- <a href="#"><p class="click-v">Change method</p></a> -->
                                  </div>
                              </div>
                          </div>
                          <div class="card-body bio-graph-info border border-top-0 border-left-0 border-right-0">
                              <div class="row">
                                  <div class="col-md-3">
                                  <p>CANCEL</p>
                                  </div>
                                  <div class="col-md-6">
                                  <button class="btn color-v" type="submit">Cancel subscription</button>
                                  <button class="btn color1-v" type="submit">Renew subscription</button>
                                  </div>
                                  <div class="col-md-3">
                                  <!-- <a href="#"><p>Change Plan</p></a> -->
                                  </div>
                              </div>
                          </div>
                      </section>
                  </aside>
                </div>
              </div>

              <!-- page end-->
          </section>
      </section>

  </section>
      <!--main content end-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/slidebars.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
    
    <!--Advance Form Js Start-->
    <!--this page plugins-->

  <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

  <!--select2-->
  <script type="text/javascript" src="assets/select2/js/select2.min.js"></script>

  <!--summernote-->
  <script src="assets/summernote/summernote-bs4.min.js"></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>


  <!--multiselect start + spinner + wysihtml5 scripts-->
  <script src="js/advanced-form-components.js"></script>
  <!--pickers script-->
  <script src="js/pickers/init-date-picker.js"></script>
  <script src="js/pickers/init-datetime-picker.js"></script>
  <script src="js/pickers/init-color-picker.js"></script>

  <!--bootstrap-switch-->
  <script src="assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>

  <!--bootstrap-switch-->
  <script src="assets/switchery/switchery.js"></script>
    <!--Advance Form Js End-->

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    
    <!--Video Player Js Start-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelement-and-player.min.js"></script>
<script src="js/video/context-menu.js"></script>
<script src="js/video/loop.js"></script>
<script src="js/video/stop.js"></script>
<script src="js/video/playlist.js"></script>
<script src="js/video/facebook-pixel.js"></script>
<script src="js/video/jump-forward.js"></script>
<!--<script src="js/video/postroll.js"></script>-->
<script src="js/video/preview.js"></script>
<script src="js/video/quality.js"></script>
<script src="js/video/skip-back.js"></script>
<!--<script src="js/video/source-chooser.js"></script>-->
<script src="js/video/speed.js"></script>
<!--<script src="js/video/vrview.js"></script>-->
    <!--Video Player Js End-->
<script>
	var mediaElements = document.querySelectorAll('video, audio');

	for (var i = 0, total = mediaElements.length; i < total; i++) {

		var features = ['playpause', 'current', 'progress', 'duration', 'volume', 'playlist', 'loop', 'contextmenu', 'quality', 'skipback', 'jumpforward', 'speed', 'facebookpixel', 'fullscreen'];

		new MediaElementPlayer(mediaElements[i], {
			autoRewind: true,
			features: features,
		});
	}
</script>

<!--Advance Form Js Start-->
<script>

      jQuery(document).ready(function(){

          $('.summernote').summernote({
              height: 200,                 // set editor height

              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor

              focus: true                 // set focus to editable area after initializing summernote
          });
      });

  </script>

    <!--select2-->
  <script type="text/javascript">

      $(document).ready(function () {
          $(".js-example-basic-single").select2();

          $(".js-example-basic-multiple").select2();
      });
  </script>

  <!--bootstrap swither-->
  <script type="text/javascript">
      $(document).ready(function () {
          // Resets to the regular style
          $('#dimension-switch').bootstrapSwitch('setSizeClass', '');
          // Sets a mini switch
          $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-mini');
          // Sets a small switch
          $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-small');
          // Sets a large switch
          $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-large');


          $('#change-color-switch').bootstrapSwitch('setOnClass', 'success');
          $('#change-color-switch').bootstrapSwitch('setOffClass', 'danger');
      });
  </script>

  <!-- swithery-->
  <script type="text/javascript">
      $(document).ready(function () {
          //default
          var elem = document.querySelector('.js-switch');
          var init = new Switchery(elem);


          //small
          var elem = document.querySelector('.js-switch-small');
          var switchery = new Switchery(elem, { size: 'small' });

          //large
          var elem = document.querySelector('.js-switch-large');
          var switchery = new Switchery(elem, { size: 'large' });


          //blue color
          var elem = document.querySelector('.js-switch-blue');
          var switchery = new Switchery(elem, { color: '#7c8bc7', jackColor: '#9decff' });

          //green color
          var elem = document.querySelector('.js-switch-yellow');
          var switchery = new Switchery(elem, { color: '#FFA400', jackColor: '#ffffff' });

          //red color
          var elem = document.querySelector('.js-switch-red');
          var switchery = new Switchery(elem, { color: '#ff6c60', jackColor: '#ffffff' });


      });
  </script>
<!--Advance Form Js End-->

  </body>
</html>
