<?php include('conn.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>FoodOrderSystem</title>
	<link rel = "stylesheet" type = "text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	
	<style type="text/css">

	body{
		background-color: #3F000F;
	}
		
	#footer
	{
		position:relative;
		color:#fff;
		width:100%;
		height:150px;
		clear:both;
		background:linear-gradient(#2f2f2f ,#000);
		background:-moz-linear-gradient(#2f2f2f ,#000);
		background:-webkit-linear-gradient(#2f2f2f ,#000);
		-webkit-box-shadow:0px 0px 20px 0px black;
		-moz-box-shadow:0px 0px 20px 0px black;
		box-shadow:0px 0px 20px 0px black;
		border-top:1px solid black;
	}

	.foot
	{
		font-size:20px;
		position:relative;
		margin-top:30px;
		margin-left:80px;
		float:left;
	}

#foot 
	{
		position:relative;
		float:left;
		margin-left:21%;
	}
	
#foot ul a li
	{
		text-decoration:none;
		display:block;
		color:#fff;
	}
	
#foot ul a li:hover
	{
		-webkit-box-shadow:2px 2px 2px black;
		-moz-box-shadow:2px 2px 2px black;
		box-shadow:2px 2px 2px black;
		-webkit-border-radius:5px;
		-moz-border-radius:5px;
		border-radius:5px;
		position:relative;
	}
	#develop
	{
		position:relative;
		float:right;
		margin-right:15%;
	}
	
#develop ul a li
	{
		text-decoration:none;
		display:block;
		color:#fff;
	}
	
#develop ul a li:hover
	{
		-webkit-box-shadow:2px 2px 2px black;
		-moz-box-shadow:2px 2px 2px black;
		box-shadow:2px 2px 2px black;
		-webkit-border-radius:5px;
		-moz-border-radius:5px;
		border-radius:5px;
		position:relative;
	}
	


		/* Dialog 
	#overlay
	{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #000;
	opacity: 0.8;
	display: none;
	}
	#dialog {
	position: absolute;
	top: 16%;
	left: 35%;
	width: 30%;
	border: 4px solid #ccc;
	background: #fff;
	display: none;
	}
    #dialog h2 {
	margin: 0;
	padding: 8px;
	background: #ddd;
	font-size: 17px;
	}
	#dialog h2 span {
	display: block;
	float: right;
	padding: 0 5px;
	color: #c22;
	cursor: pointer;
	}
	#dialog form {
	padding: 20px;
	}
	input[type=text] {
	padding: 6px;
	width: 90%;
	}
	textarea {
	padding: 6px;
	font-family: Arial, Helvetica, sans-serif;
	width: 90%;       height: 140px;     } 
    input[type=submit] {       padding: 8px 18px;       margin-top: 10px;     }
	
	
*/



	</style>
</head>