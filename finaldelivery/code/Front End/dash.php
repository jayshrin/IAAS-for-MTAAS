<!DOCTYPE html>
<html ng-app="website">
<head lang="en">
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
<!--<div ng-view><div>-->
<div class="row">
<div class="col-md-12">
<h1 class="page-header">
{{tle}} <small>{{bodyy}}</small>
</h1>
{{user}}
<ol class="breadcrumb">
<li><a href="#/bill">Home</a></li>
<li><a href="#">Library</a></li>
<li class="active">Data</li>
</ol>
</div>
</div>


<!-- /. ROW  -->

<div class="row">
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="panel panel-primary text-center no-boder bg-color-green green">
<div class="panel-left pull-left green">
<i class="fa fa-bar-chart-o fa-5x"></i>

</div>
<div class="panel-right pull-right">
<!--<h3>8,457</h3>-->
<!--<h3>Billing</h3>-->
</div>
</div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="panel panel-primary text-center no-boder bg-color-blue blue">
<div class="panel-left pull-left blue">
<i class="fa fa-shopping-cart fa-5x"></i>
</div>

<div class="panel-right pull-right">
<!--<h3>8,457</h3>-->
<!--<h3>Mobile Instances</h3>-->
</div>
</div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="panel panel-primary text-center no-boder bg-color-red red">
<div class="panel-left pull-left red">
<i class="fa fa fa-comments fa-5x"></i>

</div>
<div class="panel-right pull-right">
<!--<h3>8,457</h3>-->
<!--<h3>Hub</h3>-->
</div>
</div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="panel panel-primary text-center no-boder bg-color-brown brown">
<div class="panel-left pull-left brown">
<i class="fa fa-users fa-5x"></i>

</div>
<div class="panel-right pull-right">
<!--<h3>8,457</h3>-->
<!--<h3>Test Servers</h3>-->
</div>
</div>
</div>
</div>


<!--<div class="row">
<div class="col-xs-6 col-md-3">
<div class="panel panel-default">
<div class="panel-body easypiechart-panel">
<h4>CPU</h4>
<div class="easypiechart" id="easypiechart-blue" data-percent="82" ><span class="percent">82%</span>
</div>
</div>
</div>
</div>
<div class="col-xs-6 col-md-3">
<div class="panel panel-default">
<div class="panel-body easypiechart-panel">
<h4>Ram</h4>
<div class="easypiechart" id="easypiechart-orange" data-percent="55" ><span class="percent">55%</span>
</div>
</div>
</div>
</div>
<div class="col-xs-6 col-md-3">
<div class="panel panel-default">
<div class="panel-body easypiechart-panel">
<h4>Storage</h4>
<div class="easypiechart" id="easypiechart-teal" data-percent="84" ><span class="percent">84%</span>
</div>
</div>
</div>
</div>
<div class="col-xs-6 col-md-3">
<div class="panel panel-default">
<div class="panel-body easypiechart-panel">
<h4>Instances</h4>
<div class="easypiechart" id="easypiechart-red" data-percent="46" ><span class="percent">46%</span>
</div>
</div>
</div>
</div>
</div>-->
<!--/.row-->

<div class="row">
<div class="col-md-9 col-sm-12 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
Bar Chart
</div>
<div class="panel-body">
<div id="morris-bar-chart"></div>
</div>
</div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
Donut Chart
</div>
<div class="panel-body">
<div id="morris-donut-chart"></div>
</div>
</div>
</div>

<footer><p>{{team}} </p></footer>
    
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.1/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.3.0-rc.1/angular-route.min.js"></script>
    <script src="js/website.js"></script>


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




<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>

</body>
</html>
