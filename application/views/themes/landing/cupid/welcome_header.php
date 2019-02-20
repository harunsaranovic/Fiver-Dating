<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $settings["site_description"]; ?>">
    <meta name="keywords" content="<?php echo $settings["site_tags"]; ?>">
    <link href="<?php echo base_url(); ?>css/site/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/flat.css">
		<link href="https://cdn.jsdelivr.net/npm/materialize-social@1.0.3/materialize-social.css" rel="stylesheet">




    
    <style>
	.firstpartheader_bgcolor {
    <?php
	if(!empty($settings["f_bg_color"])) {
	?>
	background-color: <?php echo $settings["f_bg_color"]; ?> !important; 
	<?php
	}
	?>
	}
	
	footer ul {
	<?php
	if(!empty($settings["f_bg_color"])) {
	?>
	background-color: <?php echo $settings["f_bg_color"]; ?> !important; 
	<?php
	}
	?>	
	}
	
	<?php
	if(!empty($settings["f_txt_color"])) {
	?>
	color: <?php echo $settings["f_txt_color"]; ?> !important; 
	<?php
	}
	?>
	}
	
	.logo a {
	<?php
	if(!empty($settings["f_txt_color"])) {
	?>
	color: <?php echo $settings["f_txt_color"]; ?> !important; 
	<?php
	}
	?>
	}
	
	.already_registered {
	<?php
	if(!empty($settings["f_txt_color"])) {
	?>
	color: <?php echo $settings["f_txt_color"]; ?> !important; 
	<?php
	}
	?>
	}
	
	#user-carousel {
	<?php
	if(!empty($settings["s_bg_color"])) {
	?>
	background-color: <?php echo $settings["s_bg_color"]; ?> !important; 
	<?php
	}
	?>	
	}
	
	body {
	<?php
	if(!empty($settings["s_bg_color"])) {
	?>
	background-color: <?php echo $settings["s_bg_color"]; ?> !important; 
	<?php
	}
	?>	
	}
	
	.second-part-titles h2 {
	<?php
	if(!empty($settings["s_txt_color"])) {
	?>
	color: <?php echo $settings["s_txt_color"]; ?> !important; 
	<?php
	}
	?>
	}
	
	.how_to_title {
	<?php
	if(!empty($settings["s_txt_color"])) {
	?>
	color: <?php echo $settings["s_txt_color"]; ?> !important; 
	<?php
	}
	?>
	}
	
	.how_to_desc {
	<?php
	if(!empty($settings["s_third_color"])) {
	?>
	color: <?php echo $settings["s_third_color"]; ?> !important; 
	<?php
	}
	?>
	}
	
	.second-part-titles h4 {
	<?php
	if(!empty($settings["s_third_color"])) {
	?>
	color: <?php echo $settings["s_third_color"]; ?> !important; 
	<?php
	}
	?>
	}
	
	.block_how_to i {
	<?php
	if(!empty($settings["s_third_color"])) {
	?>
	background-color: <?php echo $settings["s_third_color"]; ?> !important; 
	<?php
	}
	?>
	}
	</style>
    <style>
	footer
	{
		position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
	}
	</style>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
<body>