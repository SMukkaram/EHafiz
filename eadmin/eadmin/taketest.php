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
    
     <!--Form Wizard-->
    <link rel="stylesheet" type="text/css" href="css/jquery.steps.css" />
    
    <!--dynamic table-->
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
    
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
    
    <!-- blueimp Gallery styles -->
      <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
      <link rel="stylesheet" href="assets/file-uploader/css/jquery.fileupload.css">
      <link rel="stylesheet" href="assets/file-uploader/css/jquery.fileupload-ui.css">
      <!-- CSS adjustments for browsers with JavaScript disabled -->
      <noscript>
          <link rel="stylesheet" href="assets/file-uploader/css/jquery.fileupload-noscript.css">
      </noscript>
      <noscript>
          <link rel="stylesheet" href="assets/file-uploader/css/jquery.fileupload-ui-noscript.css">
      </noscript>
    
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
<section style="margin-top:15px;">
  <section class="card">
                          <div class="card-header">Select Test Topic</div>
                          <div class="card-body">
                              <form class="needs-validation" novalidate>
                                  <div class="form-row">
                                      <!--<div class="col-md-4 mb-3">
                                          <label for="validationCustom01">Assignment Name</label>
                                          <input type="text" class="form-control" id="validationCustom01" placeholder="Enter assignment name" value="" required>
                                          <div class="valid-feedback">
                                              Looks good!
                                          </div>
                                      </div>-->
                                      <div class="col-md-3 mb-3">
                                          <label for="validationCustom02">Part Name</label>
                                          <div class="form-group">
                                      <select class="js-example-basic-single">
                                         <option value="AL">Select Course</option>
                                          <option value="AL">Noorani Qaida</option>
                                          ...
                                          <option value="WY">Full Quran Learning</option>
                                      </select>
                                  </div>
                                      </div>
                                      <div class="col-md-3 mb-3">
                                          <label for="validationCustomUsername">Select Chapter</label>
                                          <div class="form-group">
                                      <select class="js-example-basic-single">
                                         <option value="AL">Select Type</option>
                                          <option value="AL">Alabama</option>
                                          ...
                                          <option value="WY">Wyoming</option>
                                      </select>
                                  </div>
                                     <button type="submit" class="btn btn-primary">Start Test</button>
                                      </div>
                                      </div>
                              </form>

                              <script>
                                  // Example starter JavaScript for disabling form submissions if there are invalid fields
                                  (function() {
                                      'use strict';
                                      window.addEventListener('load', function() {
                                          // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                          var forms = document.getElementsByClassName('needs-validation');
                                          // Loop over them and prevent submission
                                          var validation = Array.prototype.filter.call(forms, function(form) {
                                              form.addEventListener('submit', function(event) {
                                                  if (form.checkValidity() === false) {
                                                      event.preventDefault();
                                                      event.stopPropagation();
                                                  }
                                                  form.classList.add('was-validated');
                                              }, false);
                                          });
                                      }, false);
                                  })();
                              </script>
                          </div>
                      </section>
   <div class="row">
                  <div class="col-lg-12">
                      <!--progress bar start-->
                      <section class="card">
                          <header class="card-header">
                              Start Test <span class="badge badge-danger badge-pill float-right" style="margin-top:4px">2:03</span>
                          </header>
                          <div class="card-body">
                              <form id="wizard-validation-form" action="#">
                                  <div>
                                      <h3>Step 1</h3>
        <section>
            <div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                               <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
<div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
<div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
<div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
                                      </section>
                                      <h3>Step 2</h3>
        <section>
            <div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                               <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
<div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
<div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
<div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
                                      </section>
                                      <h3>Step 3</h3>
    <section>
            <div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                               <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
<div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
<div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
<div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
                                      </section>
                                      <h3>Step Final</h3>
<section>
            <div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                               <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
<div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
<div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
<div class="form-group clearfix">
                <label class="col-lg-12">
                    <h4 class="hafizQues">Accusamus voluptatem error ullam placeat facere, est explicabo quod aspernatur praesentium repellat qui voluptate, eius quasi sapiente!</h4>
                </label>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12"><span class="hafizAns">Ans:</span></div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea class="form-control " id="ccomment" name="comment" placeholder="Enter Your Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="pross" style="background:rgba(0,0,0,.5);position:fixed;width:100%;text-align:center;height:500px;color:#fff;display:none">
                                <p>Analysing Your File</p>
                                <img src="https://cdn.bdswiss.com/img/platformv2/loader.gif" width="50" />
                            </div>
                            <p>15 minutes video
                                &amp; 10 minutes audio only <input type="file" id="vid" onchange="checkFileDuration()"></p>
                            File (video/audio):

                        </div>
                    </div>
                </div>
            </div>
                                      </section>
                                  </div>
                              </form>
                          </div>
                      </section>


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
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>
    
    <!--script for this page-->
    <script src="js/form-validation-script.js"></script>
    
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
    
    <!--dynamic table initialization -->
    <script src="js/dynamic_table_init.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    
    <!--Video Player Js Start-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelement-and-player.min.js"></script>
    
    <!-- blueimp Gallery script -->
  <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
  <script src="assets/file-uploader/js/jquery.iframe-transport.js"></script>
  <!-- The basic File Upload plugin -->
  <script src="assets/file-uploader/js/jquery.fileupload.js"></script>
  <!-- The File Upload processing plugin -->
  <script src="assets/file-uploader/js/jquery.fileupload-process.js"></script>
  <!-- The File Upload image preview & resize plugin -->
  <script src="assets/file-uploader/js/jquery.fileupload-image.js"></script>
  <!-- The File Upload audio preview plugin -->
  <script src="assets/file-uploader/js/jquery.fileupload-audio.js"></script>
  <!-- The File Upload video preview plugin -->
  <script src="assets/file-uploader/js/jquery.fileupload-video.js"></script>
  <!-- The File Upload validation plugin -->
  <script src="assets/file-uploader/js/jquery.fileupload-validate.js"></script>
  <!-- The File Upload user interface plugin -->
  <script src="assets/file-uploader/js/jquery.fileupload-ui.js"></script>
  <!-- The main application script -->
  <script src="assets/file-uploader/js/main.js"></script>
  <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
  <!--[if (gte IE 8)&(lt IE 10)]>
  <script src="assets/file-uploader/js/cors/jquery.xdr-transport.js"></script>
  <![endif]-->
    
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

<!--Form Wizard-->
  <script src="js/jquery.steps.min.js" type="text/javascript"></script>
  <script src="js/jquery.validate.min.js" type="text/javascript"></script>
      
 <!--script for this page-->
    <script src="js/jquery.stepy.js"></script>
    
    <script>
      //reference
//https://developer.mozilla.org/en-US/docs/Web/API/FileReader/
//http://community.sitepoint.com/t/get-video-duration-before-upload/30623/4

//set your time on MaxTime like minutes:seconds
//if you wanna hours just replace below line on line 25
//var time = hours+':'minutes + ':' + seconds;

//maxTime = "01:00:00"; //if add a hours

var videoMaxTime = "15:00"; //minutes:seconds   //video
var audioMaxTime = "10:00"; //minutes:seconds   //audio
var uploadMax = 52428800; //bytes  //30MP

//for seconds to time
function secondsToTime(in_seconds) {

  var time = '';
  in_seconds = parseFloat(in_seconds.toFixed(2));

  var hours = Math.floor(in_seconds / 3600);
  var minutes = Math.floor((in_seconds - (hours * 3600)) / 60);
  var seconds = in_seconds - (hours * 3600) - (minutes * 60);
  //seconds = Math.floor( seconds );
  seconds = seconds.toFixed(0);

  if (hours < 10) {
    hours = "0" + hours;
  }
  if (minutes < 10) {
    minutes = "0" + minutes;
  }
  if (seconds < 10) {
    seconds = "0" + seconds;
  }
  var time = minutes + ':' + seconds;

  return time;

}

function checkFileDuration() {

  var file = document.querySelector('input[type=file]').files[0];
  var reader = new FileReader();
  var fileSize = file.size;

  if (fileSize > uploadMax) {
    alert('file too large');
    $('#vid').val("");
  } else {
    $('#pross').show();
    reader.onload = function(e) {

      if (file.type == "video/mp4" || file.type == "video/ogg" || file.type == "video/webm") {
        var videoElement = document.createElement('video');
        videoElement.src = e.target.result;
        var timer = setInterval(function() {
          if (videoElement.readyState === 4) {
            getTime = secondsToTime(videoElement.duration);
            if (getTime > videoMaxTime) {
              alert('1 minutes video only')
              $('#vid').val("");
            }
            $('#pross').hide();
            clearInterval(timer);
          }
        }, 500)
      } else if (file.type == "audio/mpeg" || file.type == "audio/wav" || file.type == "audio/ogg") {

        var audioElement = document.createElement('audio');
        audioElement.src = e.target.result;
        var timer = setInterval(function() {
          if (audioElement.readyState === 4) {
            getTime = secondsToTime(audioElement.duration);
            if (getTime > audioMaxTime) {
              alert('1 minutes audio only')
              $('#vid').val("");
            }
            $('#pross').hide();
            clearInterval(timer);
          }
        }, 500)
      } else {
        var timer = setInterval(function() {
          if (file) {

            alert('invaild File')
            $('#vid').val("");
            $('#pross').hide();
            clearInterval(timer);
          }
        }, 500)

      }

    };
    if (file) {
      reader.readAsDataURL(file);

    } else {
      alert('nofile');
    }

  }
}
      </script>


  <script>

      //step wizard

      $(function() {
          $('#default').stepy({
              backLabel: 'Previous',
              block: true,
              nextLabel: 'Next',
              titleClick: true,
              titleTarget: '.stepy-tab'
          });
      });
  </script>

  <script type="text/javascript">
      $(document).ready(function () {
          var form = $("#wizard-validation-form");
          form.validate({
              errorPlacement: function errorPlacement(error, element) {
                  element.after(error);
              }
          });
          form.children("div").steps({
              headerTag: "h3",
              bodyTag: "section",
              transitionEffect: "slideLeft",
              onStepChanging: function (event, currentIndex, newIndex) {
                  form.validate().settings.ignore = ":disabled,:hidden";
                  return form.valid();
              },
              onFinishing: function (event, currentIndex) {
                  form.validate().settings.ignore = ":disabled";
                  return form.valid();
              },
              onFinished: function (event, currentIndex) {
                  alert("Submitted!");
              }
          }).validate({
              errorPlacement: function errorPlacement(error, element) {
                  element.after(error);
              },
              rules: {
                  confirm: {
                      equalTo: "#password"
                  }
              }
          });
      });


  </script>
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
  
<!--File Upload Start-->
<!-- The template to display files available for upload -->
  <script id="template-upload" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
      <tr class="template-upload fade">
          <td>
              <span class="preview"></span>
          </td>
          <td>
              <p class="name">{%=file.name%}</p>
              <strong class="error text-danger"></strong>
          </td>
          <td>
              <p class="size">Processing...</p>
              <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
          </td>
          <td>
              {% if (!i && !o.options.autoUpload) { %}
              <button class="btn btn-primary start" disabled>
                  <i class="glyphicon glyphicon-upload"></i>
                  <span>Start</span>
              </button>
              {% } %}
              {% if (!i) { %}
              <button class="btn btn-warning cancel">
                  <i class="glyphicon glyphicon-ban-circle"></i>
                  <span>Cancel</span>
              </button>
              {% } %}
          </td>
      </tr>
      {% } %}
  </script>
  <!-- The template to display files available for download -->
  <script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
      <tr class="template-download fade">
          <td>
            <span class="preview">
                {% if (file.thumbnail_url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnail_url%}"></a>
                {% } %}
            </span>
          </td>
          <td>
              <p class="name">
                  {% if (file.url) { %}
                  <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnail_url?'data-gallery':''%}>{%=file.name%}</a>
                  {% } else { %}
                  <span>{%=file.name%}</span>
                  {% } %}
              </p>
              {% if (file.error) { %}
              <div><span class="label label-danger">Error</span> {%=file.error%}</div>
              {% } %}
          </td>
          <td>
              <span class="size">{%=o.formatFileSize(file.size)%}</span>
          </td>
          <td>
              {% if (file.deleteUrl) { %}
              <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
              <i class="glyphicon glyphicon-trash"></i>
              <span>Delete</span>
              </button>
              <input type="checkbox" name="delete" value="1" class="toggle">
              {% } else { %}
              <button class="btn btn-warning cancel">
                  <i class="glyphicon glyphicon-ban-circle"></i>
                  <span>Cancel</span>
              </button>
              {% } %}
          </td>
      </tr>
      {% } %}
  </script>
<!--File Upload End-->
   <!--My Js Start-->
<script>
    $(document).ready(function(){
        $('#showCourse').click(function(){
            $(".courseplan1").toggle();
        })
    })
</script>
<!--My Js End-->
    
  </body>
</html>
