<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Open Stack Mobile Testing IAAS</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>

<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="inde.php"><b>Open</b>Stack</a>
        </div>

        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#/login "><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    ///////////////////////
<!--
    <ul ng-init="tab = 1">
        <li ng-class="{active:tab===1}">
            <a href ng-click="tab = 1">What you eat?</a>
        </li>
        <li ng-class="{active:tab===2}">
            <a href ng-click="tab = 2">Favorite juice?</a>
        </li>
        <li ng-class="{active:tab===3}">
            <a href ng-click="tab = 3">Do you close your eyes?</a>
        </li>
        <br><br>
        <p ng-show="tab === 1"> I eat chocolates, alive! </p>
        <p ng-show="tab === 2"> I drink pulpy orange juice, mango milk shake... </p>
        <p ng-show="tab === 3"> yeah, I sleep at weekend. I am human... :D</p>
    </ul>
-->
    /////////////////////////
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu" ng-init="tab=1">

                <li ng-class="{active:tab===1}">
                    <a class="active-menu" href ng-click="tab = 1"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap"></i> Mobile Instance<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Android<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#/android">Android 4.4</a>
                                </li>
                                <li>
                                    <a href="#/android">Android 5.0</a>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#/chart"><i class="fa fa-bar-chart-o"></i> Hub</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap"></i> Test Server<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Ubuntu<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#/userver">Ubuntu 12.10</a>
                                </li>
                                <li>
                                    <a href="#/userver">Ubuntu 14.04</a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="#/cserver">Cirros</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#/detail"><i class="fa fa-table"></i> Details</a>
                </li>
                <li>
                    <a href="#/bill"><i class="fa fa-edit"></i> Bill</a>
                </li>
                <li>
                    <a href="http://docs.openstack.org/"><i class="fa fa-table"></i> Help</a>
                </li>

                <!--<li>-->
                    <!--<a href="#"><i class="fa fa-fw fa-file"></i> Empty Page</a>-->
                <!--</li>-->
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" ng-app="website">
        
        <div id="page-inner">
<div ng-view></div>
        </div>
         <!--/. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Js -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- Morris Chart Js -->
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>


<script src="assets/js/easypiechart.js"></script>
<script src="assets/js/easypiechart-data.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.1/angular.min.js"></script>
<script src="https://code.angularjs.org/1.3.0-rc.1/angular-route.min.js"></script>

<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>
<script src="js/website.js"></script>

</body>

</html>
