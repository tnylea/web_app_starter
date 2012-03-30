<?php
    header("Content-type: text/css; charset: UTF-8");
    
    $primary_color = '#bb0000';
    $primary_color_lightened = '#E2533F';
?>

body
{
	margin:0px;
	padding:0px;
	font-family:'Helvetica Neue', Helvetica, Arial;
}

.container{
	text-align:center;
}

.container form table
{
	width:480px;
	margin:0px auto;
	text-align:left;
}

h1
{
	
	font-weight:200;
	background: <?= $primary_color ?>;
	margin:0px;
	text-align:center;
	color:#ffffff;
	padding:10px 0px;
	box-shadow: 0px 4px 0px #891C11, inset 0px 1px 0px <?= $primary_color ?> !important;
	margin-bottom:20px;
}

input[type=text], input[type=password]{
	position: relative;
	background: white;
	border: 1px solid silver;
	border-radius: 6px;
	color: #545454;
	font-size: 20px;
	line-height:34px;
	height: 46px;
	margin: 0;
	padding: 0 10px;
	padding-top:2px;
	width: auto;
	box-shadow: inset 0px 2px 0px #969696;
}

input:focus {
    outline: none;
}

input[type=submit]
{
	position: relative !important;
	cursor: pointer !important;
	display: inline-block !important;
	border-radius: 7px !important;
	font-size: 20px !important;
	font-weight: 200 !important;
	color: white !important;
	text-transform: none !important;
	text-decoration: none !important;
	text-shadow: -1px 1px 0px #343434 !important;
	padding: 10px 17px 8px 17px !important;
	width: auto;
	min-height: 30px;
	float: none;
	top: 0;
	outline: none;
	-webkit-transition: all 0.10s;
	-moz-transition: all 0.10s;
	transition: all 0.10s;
	background: <?= $primary_color ?> !important;
	background: -moz-linear-gradient(top, <?= $primary_color ?> 0%, <?= $primary_color_lightened ?> 100%) !important;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#F36652), color-stop(100%,<?= $primary_color_lightened ?>)) !important;
	background: -webkit-linear-gradient(top, <?= $primary_color ?> 0%,<?= $primary_color_lightened ?> 100%) !important;
	background: -o-linear-gradient(top, <?= $primary_color ?> 0%,<?= $primary_color_lightened ?> 100%) !important;
	background: -ms-linear-gradient(top, <?= $primary_color ?> 0%,<?= $primary_color_lightened ?> 100%) !important;
	background: linear-gradient(top, <?= $primary_color ?> 0%,<?= $primary_color_lightened ?> 100%) !important;
	border: solid 1px <?= $primary_color ?> !important;
	box-shadow: 0px 4px 0px <?= $primary_color ?>, inset 0px 1px 0px <?= $primary_color ?> !important;
	-moz-box-shadow: 0px 4px 0px <?= $primary_color ?>, inset 0px 1px 0px <?= $primary_color ?> !important;
	-webkit-box-shadow: 0px 4px 0px <?= $primary_color ?>, inset 0px 1px 0px <?= $primary_color ?> !important;
}

input[type=submit]:active	
{
	outline: none;
    top: 3px !important;
    box-shadow: 0px 1px 0px <?= $primary_color ?>, inset 0px 1px 0px <?= $primary_color ?> !important;
    -moz-box-shadow: 0px 1px 0px <?= $primary_color ?>, inset 0px 1px 0px <?= $primary_color ?> !important;
    -webkit-box-shadow: 0px 1px 0px <?= $primary_color ?>, inset 0px 1px 0px <?= $primary_color ?> !important;
    font-size:40px;
}

input[type=button]:focus
{
	outline: none; 
    -moz-outline-style: none;
}


