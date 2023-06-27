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
    <!--Video Player Css End-->
    
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
  </div>

  <!--  Section 02  -->
  <div class="cPanelSection">
    <div class="cPanelArrowPulse"></div>
    <h5>Level 02</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  </div>
    
  <!--  Section 03  -->
  <div class="cPanelSection">
    <div class="cPanelArrowPulse"></div>
    <h5>Level 03</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  </div>

  <!--  Section 04  -->
  <div class="cPanelSection">
    <h5>Level 04</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  </div>
   
 <!--  Section 05  -->
  <div class="cPanelSection">
    <h5>Level 05</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  </div>
  </div>
              </div>
              <!-- page end-->
<section style="margin-top:15px;">
    <div class="row">
    <div class="col-lg-8">
        <section class="card">
            <header class="card-header">
                <h4 class="list-group-item-heading">Noorani Qaida</h4>
            </header>
            <div class="list-group">
               <div class="media-wrapper">
        <video id="player1" width="729.33" height="421" controls preload="none"
               data-cast-title="Big Buck Bunny"
               data-cast-description="Big Buck Bunny is now even more a world standard for video standards"
               poster="http://mediaelementjs.com/images/big_buck_bunny.jpg">
            <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/CastVideos/mp4/BigBuckBunny.mp4" data-playlist-thumbnail="http://mediaelementjs.com/images/big_buck_bunny.jpg"
                    title="Big Buck Bunny" data-playlist-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vestibulum justo arcu. Vestibulum commodo lacus bibendum sollicitudin commodo." type="video/mp4">
            <source src="http://www.streambox.fr/playlists/test_001/stream.m3u8" title="Hls.js Demo" data-playlist-description="Curabitur et malesuada arcu. Praesent hendrerit, quam vel pellentesque aliquam, metus felis mattis velit, quis varius metus diam vitae diam. Integer ante massa, tempor in accumsan eu, sodales in lectus." type="application/x-mpegURL">
            <source src="http://la2.indexcom.com/me/flv/guqin.flv" title="Guqin - Ghost" type="video/flv">
        </video>
    </div>
                <a class="list-group-item " href="javascript:;">
                    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe doloribus unde quis nulla, maxime recusandae libero, perferendis animi omnis reiciendis dolor eligendi, aliquam expedita dolorum ullam sunt obcaecati asperiores quos.</p>
                </a>
            </div>
        </section>
        <section class="card">
            <header class="card-header">
                <h4 class="list-group-item-heading">What you'll learn</h4>
            </header>
            <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <div class="mejs__playlist-item-inner">
        <div class="mejs__playlist-item-thumbnail"><img tabindex="-1" src="http://mediaelementjs.com/images/big_buck_bunny.jpg"></div>
        <div class="mejs__playlist-item-content">
            <div><input type="radio" class="mejs__playlist-selector-input" name="mep_0_playlist" id="mep_0_playlist_item_0" data-playlist-index="0" value="https://commondatastorage.googleapis.com/gtv-videos-bucket/CastVideos/mp4/BigBuckBunny.mp4"><label class="mejs__playlist-selector-label" for="mep_0_playlist_item_0"><span>▶</span> Big Buck Bunny</label></div>
            <div class="mejs__playlist-item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vestibulum justo arcu. Vestibulum commodo lacus bibendum sollicitudin commodo.</div>
        </div>
    </div>
    <span class="badge badge-primary badge-pill">2:03</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <div class="mejs__playlist-item-inner">
        <div class="mejs__playlist-item-thumbnail"><img tabindex="-1" src="http://mediaelementjs.com/images/big_buck_bunny.jpg"></div>
        <div class="mejs__playlist-item-content">
            <div><input type="radio" class="mejs__playlist-selector-input" name="mep_0_playlist" id="mep_0_playlist_item_0" data-playlist-index="0" value="https://commondatastorage.googleapis.com/gtv-videos-bucket/CastVideos/mp4/BigBuckBunny.mp4"><label class="mejs__playlist-selector-label" for="mep_0_playlist_item_0"><span>▶</span> Big Buck Bunny</label></div>
            <div class="mejs__playlist-item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vestibulum justo arcu. Vestibulum commodo lacus bibendum sollicitudin commodo.</div>
        </div>
    </div>
    <span class="badge badge-primary badge-pill">25:01</span>
  </li>
</ul>
        </section>
    </div>
    <div class="col-lg-4">
        <section class="card">
            <header class="card-header">
                <h4 class="list-group-item-heading">Take Assignment</h4>
            </header>
            <div class="card-body">
                              
                              <button type="button" class="btn btn-info btn-block"><i class="fa fa-cloud-download"></i> Download PDF</button>
                              
                          </div>
        </section>
        
        <!--<section class="card">
                                  <div class="twt-feed blue-bg">
                                      <h1>Noorani Qaida</h1>
                                      <p>jsmith@flatlab.com</p>
                                      <a href="#">
                                          <img src="img/profile-avatar.jpg" alt="">
                                      </a>
                                  </div>
                                  <div class="weather-category twt-category">
                                      <ul>
                                          <li class="active">
                                              <h5>320</h5>
                                              Likes
                                          </li>
                                          <li>
                                              <h5>35</h5>
                                              Chapterss
                                          </li>
                                          <li>
                                              <h5>59</h5>
                                              Shares
                                          </li>
                                      </ul>
                                  </div>
                              </section>-->
                              
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
                              Duration <i class="fa fa-clock-o"></i> <span>2 hrs 29 min</span>
                          </header>
                          <div class="list-group">
                <a class="list-group-item " href="javascript:;">
                    <h3 class="list-group-item-text"> <i class="fa fa-signal"></i> Level 01</h3>
                </a>
            </div>
                      </section>
                              
                              <!--<section class="card">
                          <header class="card-header">
                              Star Rating Example
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
