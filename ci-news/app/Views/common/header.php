<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Dashboard</title>

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">



<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<script nonce="4aeb8f74-8a63-4431-9b00-635ec1ee8f76">(function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return async function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">

<a href="index2.html" class="logo">

<span class="logo-mini"><b>A</b>LT</span>

<span class="logo-lg"><b>Admin</b>LTE</span>
</a>
<nav class="navbar navbar-static-top">

<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
<span class="sr-only">Toggle navigation</span>
</a>
<div class="navbar-custom-menu">
<ul class="nav navbar-nav">

<li class="dropdown messages-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-envelope-o"></i>
<span class="label label-success">4</span>
</a>
<ul class="dropdown-menu">
<li class="header">You have 4 messages</li>
<li>

<ul class="menu">
<li>
<a href="#">
<div class="pull-left">
<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
</div>
<h4>
Support Team
<small><i class="fa fa-clock-o"></i> 5 mins</small>
</h4>
<p>Why not buy a new awesome theme?</p>
</a>
</li>

<li>
<a href="#">
<div class="pull-left">
<img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
</div>
<h4>
AdminLTE Design Team
<small><i class="fa fa-clock-o"></i> 2 hours</small>
</h4>
<p>Why not buy a new awesome theme?</p>
</a>
</li>
<li>
<a href="#">
<div class="pull-left">
<img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
</div>
<h4>
Developers
<small><i class="fa fa-clock-o"></i> Today</small>
</h4>
<p>Why not buy a new awesome theme?</p>
</a>
</li>
<li>
<a href="#">
<div class="pull-left">
<img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
</div>
<h4>
Sales Department
<small><i class="fa fa-clock-o"></i> Yesterday</small>
</h4>
<p>Why not buy a new awesome theme?</p>
</a>
</li>
<li>
<a href="#">
<div class="pull-left">
<img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
</div>
<h4>
Reviewers
<small><i class="fa fa-clock-o"></i> 2 days</small>
</h4>
<p>Why not buy a new awesome theme?</p>
</a>
</li>
</ul>
</li>
<li class="footer"><a href="#">See All Messages</a></li>
</ul>
</li>

<li class="dropdown notifications-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-bell-o"></i>
<span class="label label-warning">10</span>
</a>
<ul class="dropdown-menu">
<li class="header">You have 10 notifications</li>
<li>

<ul class="menu">
<li>
<a href="#">
<i class="fa fa-users text-aqua"></i> 5 new members joined today
</a>
</li>
<li>
<a href="#">
<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
page and may cause design problems
</a>
</li>
<li>
<a href="#">
<i class="fa fa-users text-red"></i> 5 new members joined
</a>
</li>
<li>
<a href="#">
<i class="fa fa-shopping-cart text-green"></i> 25 sales made
</a>
</li>
<li>
<a href="#">
<i class="fa fa-user text-red"></i> You changed your username
</a>
</li>
</ul>
</li>
<li class="footer"><a href="#">View all</a></li>
</ul>
</li>

<li class="dropdown tasks-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-flag-o"></i>
<span class="label label-danger">9</span>
</a>
<ul class="dropdown-menu">
<li class="header">You have 9 tasks</li>
<li>

<ul class="menu">
<li>
<a href="#">
<h3>
Design some buttons
<small class="pull-right">20%</small>
</h3>
<div class="progress xs">
<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
<span class="sr-only">20% Complete</span>
</div>
</div>
</a>
</li>

<li>
<a href="#">
<h3>
Create a nice theme
<small class="pull-right">40%</small>
</h3>
<div class="progress xs">
<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
<span class="sr-only">40% Complete</span>
</div>
</div>
</a>
</li>

<li>
<a href="#">
<h3>
Some task I need to do
<small class="pull-right">60%</small>
</h3>
<div class="progress xs">
<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
<span class="sr-only">60% Complete</span>
</div>
</div>
</a>
</li>

<li>
<a href="#">
<h3>
Make beautiful transitions
<small class="pull-right">80%</small>
</h3>
<div class="progress xs">
<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
<span class="sr-only">80% Complete</span>
</div>
</div>
</a>
</li>

</ul>
</li>
<li class="footer">
<a href="#">View all tasks</a>
</li>
</ul>
</li>

<li class="dropdown user user-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
<span class="hidden-xs">Alexander Pierce</span>
</a>
<ul class="dropdown-menu">

<li class="user-header">
<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
<p>
Alexander Pierce - Web Developer
<small>Member since Nov. 2012</small>
</p>
</li>

<li class="user-body">
<div class="row">
<div class="col-xs-4 text-center">
<a href="#">Followers</a>
</div>
<div class="col-xs-4 text-center">
<a href="#">Sales</a>
</div>
<div class="col-xs-4 text-center">
<a href="#">Friends</a>
</div>
</div>

</li>

<li class="user-footer">
<div class="pull-left">
<a href="#" class="btn btn-default btn-flat">Profile</a>
</div>
<div class="pull-right">
<a href="#" class="btn btn-default btn-flat">Sign out</a>
</div>
</li>
</ul>
</li>

<li>
<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
</li>
</ul>
</div>
</nav>
</header>
