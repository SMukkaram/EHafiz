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

    <?php include("css/allcss.css"); ?>
    
    <style>
        .cPanelContainer {
  margin:auto;
  padding:0;
}

.cPanelHeader {
  margin:auto;
  padding:15px;
  background:#0078d7;
  text-align:center;
}

.cPanelHeader > h3, .cPanelHeader > h5 {
  margin:auto;
  color:#f0f0f0;
  font-weight:100;
}

.cPanelFooter {
  margin:auto;
  padding:50px;
  background:#0078d7;
  text-align:center;
}

.cPanelFooter > span {
  color:#f0f0f0;
  font-size:15px;
  font-weight:400;
}

.cPanelContent {
  margin:auto;
  padding:0;
  background:#2d93e4;
  text-align:center;
  display:flex;
}

.cPanelSection {
  position:relative;
  flex:1;
  transition:0.3s;
  -moz-transition:0.3s;
  -o-transition:0.3s;
  -webkit-transition:0.3s;
  padding:25px;
  border-right:1px solid #2d93e4;
  border-left:1px solid #2d93e4;
}

.cPanelSection:hover {
  background:#0078d7;
  flex:2;
  border-right:1px solid #f0f0f0;
  border-left:1px solid #f0f0f0;
}

.cPanelContent > div:first-child {
  border-left:none;
}

.cPanelContent > div:last-child {
  border-right:none;
}

.cPanelContent > div:last-child:after {
  display:none;
}

.cPanelContent > div:after {
  position:absolute;
  top:50%;
  left:100%;
  transform:translate(-50%, -50%);
  z-index:1;
  opacity:1;
  padding:5px 13px;
  border-radius:50%;
  background:#2d93e4;
  transition:0.3s;
  -moz-transition:0.3s;
  -o-transition:0.3s;
  -webkit-transition:0.3s;
  content: "\f061";
	font-size:25px;
  font-family: FontAwesome;
  color:#f0f0f0;
}

.cPanelContent h5 {
  color:#f0f0f0;
  font-weight:400;
}

.cPanelContent p {
  font-size:14px;
  color:#f0f0f0;
  padding:0 10%;
}

.cPanelArrowPulse {
  position:absolute;
  width:0%;
  padding-bottom:0%;
  border-radius:50%;
  top:50%;
  left:100%;
  transform:translate(-50%, -50%);
  background:#f0f0f0;
  opacity:0;
  z-index:2;
  
  animation-name:cPanelArrowPulseAnimation;
  animation-duration:2s;
  animation-iteration-count:infinite;
  animation-timing-function:ease-out;
}

@keyframes cPanelArrowPulseAnimation {
  0% { opacity:1; width:0%; padding-bottom:0%; }
  50% { opacity:0; width:20%; padding-bottom:20%; }
  100% { opacity:0; width:0%; padding-bottom:0%; }
}
    </style>

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
              <div class="cPanelContainer">

  <!--  Header  -->
  <div class="cPanelHeader">
    <h3>5 Level of Quran Learning Programme</h3>
    <h5>Understanding of Quran Learning</h5>
  </div>

  <!--  Content  -->
  <div class="cPanelContent">
    
  <!--  Section 01  -->
  <div class="cPanelSection">
    <div class="cPanelArrowPulse"></div>
    <h5>Level 01</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <a class="btn btn-info mycouse_btn levelBtn">Click</a>
  </div>

  <!--  Section 02  -->
  <div class="cPanelSection">
    <div class="cPanelArrowPulse"></div>
    <h5>Level 02</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <a class="btn btn-info mycouse_btn levelBtn">Click</a>
  </div>
    
  <!--  Section 03  -->
  <div class="cPanelSection">
    <div class="cPanelArrowPulse"></div>
    <h5>Level 03</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <a class="btn btn-info mycouse_btn levelBtn">Click</a>
  </div>

  <!--  Section 04  -->
  <div class="cPanelSection">
    <h5>Level 04</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <a class="btn btn-info mycouse_btn levelBtn">Click</a>
  </div>
   
 <!--  Section 05  -->
  <div class="cPanelSection">
    <h5>Level 05</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <a class="btn btn-info mycouse_btn levelBtn">Click</a>
  </div>
  </div>
              </div>

<section class="userLevels" style="margin-top:15px;">
   <div class="card border-left-3 border-left-primary card-2by1">
                            <div class="card-body">
                                <div class="media flex-wrap align-items-center">
                                    <div class="media-body" style="min-width: 180px"> <i class="fa fa-credit-card"></i>
                                        Your subscription ends on <strong>09 Nov 2019</strong>
                                    </div>
                                    <div class="media-right">
                                        <a class="btn btn-success" href="#">Upgrade</a>
                                    </div>
                                </div>
                            </div>
                        </div>
</section>        

<section class="userLevels" style="margin-top:15px;">
    <div class="row">
            <div class="col-lg-8">
        <!--state overview start-->
              <div class="row state-overview">
                  <div class="col-lg-6 col-sm-12">
                      <section class="card">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                  0
                              </h1>
                              <p>Total Lectures</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                      <section class="card">
                          <div class="symbol red">
                              <i class="fa fa-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                  0
                              </h1>
                              <p>Submited Assignments</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                      <section class="card">
                          <div class="symbol magento">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  0
                              </h1>
                              <p>Attained Test</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                      <section class="card">
                          <div class="symbol blue">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                                  0
                              </h1>
                              <p>Achive Certificates</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                      <section class="card">
                          <div class="symbol grey">
                              <i class="fa fa-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  0
                              </h1>
                              <p>Total Plugin Games</p>
                          </div>
                      </section>
                  </div>
              </div>
              <!--state overview end-->
    </div>
    <div class="col-lg-4">
         <!--widget start-->
                      <aside class="profile-nav alt green-border">
                          <section class="card">
                              <div class="user-heading alt green-bg">
                                  <a href="#">
                                      <img alt="" src="img/profile-avatar.jpg">
                                  </a>
                                  <h1>Assigned Hafiz</h1>
                                  <h5>Jonathan Smith</h5>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe aperiam fugit ipsam eveniet natus. Est, illum hic qui ex tempora cum doloribus sunt optio consequuntur. Numquam optio ratione, veritatis facilis.</p>
                              </div>

                              <ul class="nav nav-pills nav-stacked">
                                  <li class="nav-item"><a class="nav-link" href="javascript:;"> <i class="fa fa-facebook"></i> Facebook </a></li>
                                  <li class="nav-item"><a class="nav-link" href="javascript:;"> <i class="fa fa-twitter"></i> Tweeter </a></li>
                                  <li class="nav-item"><a class="nav-link" href="javascript:;"> <i class="fa fa-linkedin"></i> Linkedin </a></li>
                              </ul>

                          </section>
                      </aside>
                      <!--widget end-->
                              
                              <!--<section class="card">
                          <header class="card-header">
                              Stages
                          </header>
                          <div class="card-body">
                             <ul class="paid-part">
                                 <li> <a href="#">Part A</a>
                                 <div class="make-switch switch-small d-block">
                                          <input type="checkbox" checked>
                                      </div>
                                 </li>
                                 <li> <a href="#">Part B</a>
                                 <div class="make-switch switch-small d-block" data-off="default">
                                          <input type="checkbox" checked>
                                      </div>
                                 </li>
                             </ul>         
                         </div>
                      </section>-->
                              
                              <section class="card">
                          <header class="card-header">
                              Duration <i class="fa fa-clock-o"></i> <span>252 hrs 29 min</span>
                          </header>
                          <div class="list-group">
                <a class="list-group-item " href="javascript:;">
                    <h3 class="list-group-item-text"> <i class="fa fa-signal"></i> Level 01</h3>
                </a>
            </div>
                      </section>
                              
                              <!--<section class="card">
                          <header class="card-header">
                              Star Rating
                          </header>
                          <div class="card-body">
                              <span class="rating">
                                  <span class="star"></span>
                                  <span class="star"></span>
                                  <span class="star"></span>
                                  <span class="star"></span>
                                  <span class="star"></span>
                              </span>
                          </div>
                      </section>-->
    </div>
        </div>
</section>
          </section>
      </section>
      <!--main content end-->

      <!--footer start-->
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/slidebars.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
    <script src="js/count.js"></script>
    
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
    
<!--My Js Start-->
<script>
    $(document).ready(function(){
        $('.levelBtn').click(function(){
            $(".userLevels").toggle();
        })
    })
</script>
<!--My Js End-->
    
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
