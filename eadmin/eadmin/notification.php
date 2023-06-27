<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>notification</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--dynamic table-->
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css" />

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
                    <div class="col-sm-12">
                        <section class="card">
                                
                            <div class="card-body">
                               <a href="index.php"><button class="btn btn-primary" style="float:right">Back</button></a>
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">User Notification</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Hafiz Notification</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Admin Notification</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="col-sm-12">
                                            <div class="card-body">
                                                <table class="table table-hover p-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Unique ID</th>
                                                            <th>Commnets</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                18/11/2019 9:28:23
                                                            </td>
                                                            <td>#A256C</td>
                                                            <td class="noti_cment">
                                                                Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                22/11/2014 12:23:03
                                                            </td>
                                                            <td>#A2655C</td>
                                                            <td class="noti_cment">
                                                                Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                22/11/2014 12:23:03
                                                            </td>
                                                            <td>#A857H</td>
                                                            <td class="noti_cment">
                                                                Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                22/11/2014 12:23:03
                                                            </td>
                                                            <td>#A254S</td>
                                                            <td class="noti_cment">
                                                                Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                22/11/2014 12:23:03
                                                            </td>
                                                            <td>#K933L</td>
                                                            <td class="noti_cment">
                                                                Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="col-sm-12">
                                            <div class="card-body">
                                                <table class="table table-hover p-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Unique ID</th>
                                                            <th>Commnets</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                18/11/2019 9:28:23
                                                            </td>
                                                            <td>#A256C</td>
                                                            <td class="noti_cment">
                                                                Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                22/11/2014 12:23:03
                                                            </td>
                                                            <td>#A2655C</td>
                                                            <td class="noti_cment">
                                                                Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                22/11/2014 12:23:03
                                                            </td>
                                                            <td>#A857H</td>
                                                            <td class="noti_cment">
                                                                Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                22/11/2014 12:23:03
                                                            </td>
                                                            <td>#A254S</td>
                                                            <td class="noti_cment">
                                                                Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                22/11/2014 12:23:03
                                                            </td>
                                                            <td>#K933L</td>
                                                            <td class="noti_cment">
                                                                Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="col-sm-12">
                                            <div class="card-body">
                                                <table class="table table-hover p-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Unique ID</th>
                                                            <th>Commnets</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                18/11/2019 9:28:23
                                                            </td>
                                                            <td>#A256C</td>
                                                            <td class="noti_cment">
                                                                Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                22/11/2014 12:23:03
                                                            </td>
                                                            <td>#A2655C</td>
                                                            <td class="noti_cment">
                                                                Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                22/11/2014 12:23:03
                                                            </td>
                                                            <td>#A857H</td>
                                                            <td class="noti_cment">
                                                                Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                22/11/2014 12:23:03
                                                            </td>
                                                            <td>#A254S</td>
                                                            <td class="noti_cment">
                                                                Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                22/11/2014 12:23:03
                                                            </td>
                                                            <td>#K933L</td>
                                                            <td class="noti_cment">
                                                                Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                                            </td>
                                                            <td>
                              <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Reply </a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->

        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                2019 &copy; Freshhouse.
                <a href="#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->

    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <script src="js/respond.min.js"></script>

    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>

    <!--dynamic table initialization -->
    <script src="js/dynamic_table_init.js"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--bootstrap-switch-->
    <script src="assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>

    <!--bootstrap swither-->
    <script type="text/javascript">
        $(document).ready(function() {
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
        $(document).ready(function() {
            //default
            var elem = document.querySelector('.js-switch');
            var init = new Switchery(elem);


            //small
            var elem = document.querySelector('.js-switch-small');
            var switchery = new Switchery(elem, {
                size: 'small'
            });

            //large
            var elem = document.querySelector('.js-switch-large');
            var switchery = new Switchery(elem, {
                size: 'large'
            });


        });
    </script>

</body>

</html>