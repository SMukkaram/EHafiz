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
                          <header class="card-header">
                              Feedback
                              <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                          </header>
                          <div class="card-body">
                              <div class="timeline-messages">
                                  <!-- Comment -->
                                  <div class="msg-time-chat">
                                      <a href="#" class="message-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                      <div class="message-body msg-in">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <p class="attribution"><a href="#">Jhon Doe</a> at 1:55pm, 13th April 2013</p>
                                              <p>Hello, How are you brother?</p>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- /comment -->

                                  <!-- Comment -->
                                  <div class="msg-time-chat">
                                      <a href="#" class="message-img"><img class="avatar" src="img/chat-avatar2.jpg" alt=""></a>
                                      <div class="message-body msg-out">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <p class="attribution"> <a href="#">Jonathan Smith</a> at 2:01pm, 13th April 2013</p>
                                              <p>I'm Fine, Thank you. What about you? How is going on?</p>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- /comment -->

                                  <!-- Comment -->
                                  <div class="msg-time-chat">
                                      <a href="#" class="message-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                      <div class="message-body msg-in">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <p class="attribution"><a href="#">Jhon Doe</a> at 2:03pm, 13th April 2013</p>
                                              <p>Yeah I'm fine too. Everything is going fine here.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- /comment -->

                                  <!-- Comment -->
                                  <div class="msg-time-chat">
                                      <a href="#" class="message-img"><img class="avatar" src="img/chat-avatar2.jpg" alt=""></a>
                                      <div class="message-body msg-out">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <p class="attribution"><a href="#">Jonathan Smith</a> at 2:05pm, 13th April 2013</p>
                                              <p>well good to know that. anyway how much time you need to done your task?</p>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- /comment -->
                                  <!-- Comment -->
                                  <div class="msg-time-chat">
                                      <a href="#" class="message-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                      <div class="message-body msg-in">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <p class="attribution"><a href="#">Jhon Doe</a> at 1:55pm, 13th April 2013</p>
                                              <p>Hello, How are you brother?</p>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- /comment -->
                              </div>
                              <div class="chat-form">
                                  <div class="input-cont ">
                                      <input type="text" class="form-control col-lg-12" placeholder="Type a message here...">
                                  </div>
                                  <div class="btn-group">
                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" class="default" />
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                                  <button class="btn btn-danger">Send</button>
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
