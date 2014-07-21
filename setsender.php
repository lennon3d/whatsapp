<?php
session_start();
include 'config.php';
include 'lib/db.php';
include 'lib/helpers.php';


if ($_GET && $_GET['id']) {
	$_SESSION['senderinfo'] = $helpers->getSenders($_GET['id']);
}

header('Location: messagingpanel.php');
die();