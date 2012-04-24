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

.page_width
{
	width: 960px;
	margin: 0px auto;
}

.container form table
{
	width:500px;
	margin:0px auto;
	text-align:left;
	float:left;
}

td
{
	padding:5px;
}

h1
{
	float:left;
	font-size:20px;
	color:#434343;
}

label{
	margin-top:4px;
	margin-right:2px;
	font-weight:bold;
	color:#787878;
	font-size:14px;
	margin-bottom:10px;
	display:block;
	float:left;
}


input[type=text], input[type=password], textarea{
	position: relative;
	background: white;
	border: 1px solid silver;
	border-radius: 5px;
	color: #343434;
	font-size: 14px;
	line-height:16px;
	height: 36px;
	margin: 0;
	padding: 0 10px;
	width: 96%;
	float:left;
	resize: none;
}

label[for=remember]
{
	float:left;
	width:auto;
}

input:focus {
    outline: none;
}

input[type=submit]
{
	position: relative !important;
	cursor: pointer !important;
	display: inline-block !important;
	font-size: 14px !important;
	font-weight: bold;
	color: white !important;
	text-transform: none !important;
	text-decoration: none !important;
	padding: 10px 17px 8px 17px !important;
	width: auto;
	min-height: 30px;
	clear:both;
	float: left;
	top: 0;
	outline: none;
	background: <?= $primary_color ?> !important;
	border:0px;
	font-size:28px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	margin-left:8px;
	
}

input[type=submit]:hover	
{
	background: <?= $primary_color_lightened; ?> !important;
}

input[type=button]:focus
{
	outline: none; 
    -moz-outline-style: none;
}

#remember
{
	position:relative;
	float:left;
	top:4px;
	margin-right:5px !important;
}

td a
{
	float:right;
	margin-top:5px;
}

td a:last-child
{
	margin-right:20px;
}

td span
{
	color: red; 
	clear:both; 
	display:block; 
	padding-top:1px;
}

.clear
{
	clear:both;
}

