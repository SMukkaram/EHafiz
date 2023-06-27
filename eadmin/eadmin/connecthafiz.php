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
            <div class="col-lg-12">
                      <section class="card">
                                 
                                  <!--Summernote start-->
              <div class="row">
                  <div class="col-md-12">
                      <section class="card">
                          <header class="card-header head-border">
                              Enquiry Form
                          </header>
                          <div class="card-body">
                             <div class="row">
                                     <div class="col-md-5">
                                     <div class="form-group">
                                      <label>Title</label>
                                      <div class="iconic-input">
                                          <i class="fa fa-bullhorn"></i>
                                          <input type="text" class="form-control" placeholder="Enter Title">
                                      </div>
                                  </div>
                                 </div>
                                 </div>
                              <div class="summernote">Enter Your Text Here...</div>
                          </div>
                          <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                      </section>
                  </div>
              </div>
              <!--Summernote end-->
                      </section>
                      <section class="card ">
                          <header class="card-header">
                              Timeline
                              <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                          </header>
                          <div class="card-body profile-activity" >
                                  <h5 class="pull-right">11 Nov 2019</h5>
                                  <div class="activity blue">
                                      <span>
                                          <i class="fa fa-bullhorn"></i>
                                      </span>
                                      <div class="activity-desk">
                                          <div class="card">
                                              <div class="card-body">
                                                  <div class="arrow"></div>
                                                  <h3>Title</h3>
                                                  <i class=" fa fa-clock-o"></i>
                                                  <h4>10:45 AM</h4>
                                                  <p>Please note which location you will consider, or both. Reporting to the VP  you will be responsible for managing.. </p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="activity alt purple">
                                      <span>
                                          <i class="fa fa-rocket"></i>
                                      </span>
                                      <div class="activity-desk">
                                          <div class="card">
                                              <div class="card-body">
                                                  <div class="arrow-alt"></div>
                                                  <h3>Title</h3>
                                                  <i class=" fa fa-clock-o"></i>
                                                  <h4>12:30 AM</h4>
                                                  <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                            </div>
                      </section>
                  </div>
          </section>
      </section>
      <!--main content end-->

      <!--footer start-->
      <!--footer end-->
  </section>
 <?php include("js/alljs.js"); ?>
   
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
