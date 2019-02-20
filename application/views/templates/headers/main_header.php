<!DOCTYPE html>
<html>
<?php $ci =& get_instance(); ?>
<head>

    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $settings["site_description"]; ?>">
    <meta name="keywords" content="<?php echo $settings["site_tags"]; ?>">

  	<link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  	<link href="<?php echo base_url(); ?>css/site/style.css" rel="stylesheet">
  	<link href="<?php echo base_url(); ?>css/site/inspinia.css" rel="stylesheet">
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.0/css/bootstrap.css" rel="stylesheet">
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootflat/2.0.4/css/bootflat.css" rel="stylesheet">

    <!-- bootstrap 4 -->
    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    -->

  	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>


    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/site/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/owl.carousel.css" rel="stylesheet">
  	<link href="<?php echo base_url(); ?>css/owl.theme.css" rel="stylesheet">
  	<link href="<?php echo base_url(); ?>css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/site/nailthumb.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/blueimp-gallery.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/vendor/jquery.sidr.dark.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/jquery.nouislider.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/jquery.cssemoticons.css" media="screen" rel="stylesheet" type="text/css" />
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" rel="stylesheet" />
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.2.5/jquery.bootstrap-touchspin.css" rel="stylesheet" />



	  <!-- Begin emoji-picker Stylesheets -->
    <link href="<?php echo base_url(); ?>js/emoji-picker-master/lib/css/emoji.css" rel="stylesheet">
    <!-- End emoji-picker Stylesheets -->


    <style>
	    body {
		<?php
		if(!empty($settings["bgcolor_main"])) {
		?>
		background-color: <?php echo $settings["bgcolor_main"]; ?> !important;
		<?php
		}
		?>
	    }

	     .navbar-nav > li > .dropdown-menu {
		<?php
		if(!empty($settings["bgcolor_main"])) {
		?>
		background-color: <?php echo $settings["bgcolor_main"]; ?> !important;
		<?php
		}
		?>
	    }

	    .navbar-default .navbar-brand {
		<?php
		if(!empty($settings["logo_color"])) {
		?>
		color: <?php echo $settings["logo_color"]; ?> !important;
		<?php
		}
		?>
	    }

	    .navbar-default a:hover {
		<?php
		if(!empty($settings["logo_color"])) {
		?>
		color: none !important;
		<?php
		}
		?>
	    }

	    .copyright {
		<?php
		if(!empty($settings["textcolor_navbar"])) {
		?>
		color: <?php echo $settings["textcolor_navbar"]; ?> !important;
		<?php
		}
		?>
	    }

	    .bottom_menu li a {
		<?php
		if(!empty($settings["textcolor_navbar"])) {
		?>
		color: <?php echo $settings["textcolor_navbar"]; ?> !important;
		<?php
		}
		?>
	    }

	    body {
		<?php
		if(!empty($settings["main_block_color"])) {
		?>
		color: <?php echo $settings["main_txt_color"]; ?> !important;
		<?php
		}
		?>
	    }

	    .main_container {
		<?php
		if(!empty($settings["main_block_color"])) {
		?>
		background-color: <?php echo $settings["main_block_color"]; ?> !important;
		<?php
		}
		?>
	    }

	    .dropdown-menu > li > a {
		<?php
		if(!empty($settings["textcolor_navbar"])) {
		?>
		color: <?php echo $settings["textcolor_navbar"]; ?> !important;
		<?php
		}
		?>
	    }

	    <?php
		if(!empty($settings["textcolor_navbar"])) {
		?>
	    .dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {
		    background-color: inherit !important;
	    }
	    <?php
		}
		?>

		<?php
		if(!empty($settings["textcolor_navbar"])) {
		?>
		.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover {
			background-color: inherit !important;
		}
		<?php
		}
		?>

	    .navbar-default .navbar-nav > li > a {
		<?php
		if(!empty($settings["textcolor_navbar"])) {
		?>
		color: <?php echo $settings["textcolor_navbar"]; ?> !important;
		<?php
		}
		?>
	    }
	</style>

</head>
<body class="body">
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<a href="#" class="sidr_btnn">
				<i class="fa fa-bars fa-lg"></i>
			</a>
			<a class="navbar-brand" href="<?php echo base_url(); ?>"> <img src="../../assets/img/logosvg02.svg" alt="logo" class="logo"> </a>
		</div>
		<div id="sidr">
			<ul>
				<li><a href="<?php echo base_url(); ?>"> <?php echo $this->lang->line("m_browse_profiles"); ?></a></li>
				<li><a href="<?php echo base_url('AddEncounters'); ?>"><?php echo $this->lang->line("m_encounters"); ?></a></li>
				<li><a href="<?php echo base_url('matches'); ?>"><?php echo $this->lang->line("match"); ?></a></li>
				<li><a href="<?php echo base_url() ?>user/friends/"><?php echo $this->lang->line("m_friends"); ?><?php if(($nb_new_friends+$nb_new_requests) >0): ?><span class="label label-danger pull-right"><?php echo $nb_new_friends+$nb_new_requests; ?></span><?php endif; ?></a></li>
				<li><a href="<?php echo base_url() ?>pm/"><?php echo $this->lang->line("m_messages"); ?><?php if($nb_pm >0): ?><span class="badge bg-warning bg-pm"><?php echo $nb_pm; ?></span><?php endif; ?></a></li>
				<li>
                    <a href="<?php echo base_url() ?>user/profilevisits"><?php echo $this->lang->line("m_profile_visits"); ?><?php if($nb_new_visits >0): ?><span class="label label-danger pull-right"><?php echo $nb_new_visits; ?></span><?php endif; ?></a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>user/loves"><?php echo $this->lang->line("m_loves"); ?><?php if($nb_new_loves >0): ?><span class="label label-danger pull-right"><?php echo $nb_new_loves; ?></span><?php endif; ?></a>
                </li>
				<?php
				if($settings["enable_payments"] == 1):
				?>
				<li>
	                <a href="<?php echo base_url() ?>premium/"><?php echo $this->lang->line("m_premium"); ?></a>
	            </li>
				<?php
				endif;
				?>
				<?php
	            if($settings["enable_forum"] == 1) {
		        ?>
		        <li>
	                <a href="<?php echo base_url() ?>forum/"><?php echo $this->lang->line("m_forum"); ?></a>
	            </li>
		        <?php
	            }
	            ?>

	            <li>
                    <a href="<?php echo base_url() ?>user/settings"><?php echo $this->lang->line("m_settings"); ?></a>
                </li>
			</ul>
		</div>
		<div id="bs-collapse-1">
			<ul class="nav navbar-nav navbar-left">
				      <li>
	                <a href="<?php echo base_url() ?>"><span class="nav-label"><?php echo $this->lang->line("m_browse_profiles"); ?> </span></a>
	            </li>
	            <li>
	                <a href="<?php echo base_url() ?>user/friends"><span class="nav-label"><?php echo $this->lang->line("m_friends"); ?></span><?php if(($nb_new_friends+$nb_new_requests) >0): ?><span class="label label-danger pull-right"><?php echo $nb_new_friends+$nb_new_requests; ?></span><?php endif; ?></a>
	            </li>
	            <li>
	                <a href="<?php echo base_url('AddEncounters'); ?>"><span class="nav-label">Encounters</span></a>
	            </li>
	            <li>
	                <a href="<?php echo base_url('matches'); ?>"><span class="nav-label"><?php echo $this->lang->line("match"); ?></span></a>
	            </li>
	            <?php
				if($settings["enable_payments"] == 1 ):
				?>
				<li>
	                <a href="<?php echo base_url() ?>premium"><span class="nav-label"><?php echo $this->lang->line("m_premium"); ?></span></a>
	            </li>
				<?php
				endif;
				?>
				<?php
	            if($settings["enable_forum"] == 1) {
		        ?>
		        <li>
	                <a href="<?php echo base_url() ?>forum"><span class="nav-label"><?php echo $this->lang->line("m_forum"); ?></span></a>
	            </li>
		        <?php
	            }
	            ?>
              <li><a href="<?php echo base_url() ?>user/settings/"><span class="nav-label"><?php echo $this->lang->line("m_settings"); ?></span></a></li>
              <li><a href="<?php echo base_url() ?>user/logout/"><span class="nav-label"><?php echo $this->lang->line("m_logout"); ?></span></a></li>
              <?php
              if($this->session->userdata("user_rank") > 0):
                ?>
                <li><a href="<?php echo base_url() ?>admin/"><span class="nav-label"><?php echo $this->lang->line("m_admin"); ?></span></a></li>
                <?php
              endif;
              ?>
          </ul>

          <ul class="nav navbar-nav navbar-right  dropdown-other">
            <li><a class="lovesli" href="<?php echo base_url(); ?>user/loves/"><i class="fa fa-heart"></i><?php if($nb_new_loves >0): ?><span class="label label-danger pull-right"><?php echo $nb_new_loves; ?></span><?php endif; ?></a></li>
            <li><a href="<?php echo base_url() ?>user/profilevisits/"><i class="fa fa-eye"></i><?php if($nb_new_visits >0): ?><span class="label label-danger pull-right"><?php echo $nb_new_visits; ?></span><?php endif; ?></a></li>
            <li><a href="<?php echo base_url() ?>pm/"><i class="fa fa-comments"></i><?php if($nb_pm >0): ?><span class="label label-danger pull-right"><?php echo $nb_pm; ?></span><?php endif; ?></a></li>
         </ul>
		</div>
	</nav>

  <div class="user-div">
    <img alt="image" class="avatar_right" src="<?php echo base_url(). $this->session->userdata("user_avatar"); ?>" onerror="this.onerror=null;this.src='<?php echo base_url()?>/images/avatar.png';" />
    <a href="<?php echo base_url(); ?>user/profile/<?php echo $this->session->userdata("user_id") ?>"><?php echo $this->session->userdata("user_username") ?></a>
  </div>
