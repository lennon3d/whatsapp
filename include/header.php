<?php include_once 'config.php';?>	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/dashboard.css" rel="stylesheet">

   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	
	<?php include_once 'lib/db.php';?>
	<?php include_once 'lib/helpers.php';?>
	
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">WhatsApp Web APP</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="#" id="dropdownMenu1" data-toggle="dropdown">Action <span class="glyphicon glyphicon-chevron-down"></span></a>
            	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
			    <li role="presentation" class="divider"></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="./index.php">Logout</a></li>
			  </ul>
            </li>
          </ul>
        
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="home.php">WhatsAPP</a></li>
            <li><a href="addsender.php"><span class="glyphicon glyphicon-plus"></span> Add Sender</a></li>
            <li><a href="listsender.php"><span class="glyphicon glyphicon-list"></span> List Sender</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active "><a href="#">Senders</a></li>
            <?php 
            $senders = $helpers->getSenders();;
            foreach ($senders as $value) {
            	$activeclass = ($_SESSION && $_SESSION['senderid'] == $value["username"])? "alert alert-success" :"alert alert-info";
            	echo '<li ><a href="setsender.php?id='.$value["id"].'" class="'.$activeclass.'"><span class="glyphicon glyphicon-user"></span> '.$value["username"].'</a></li>';
            }?>
          </ul>
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          