    <?php
    if(isset($_GET["error"])) {
      if($_GET["error"] == "cookie") {
    ?>
    <div class="topbar error">
      <?php echo $this->lang->line("select_gender_orientation"); ?>
    </div>
    <?php
      } else if($_GET["error"] == "demo_mode") {
    ?>
    <div class="topbar error">
      Whoops! You can't login / sign up with Facebook in demo mode.
    </div>
    <?php
      }
    }
    ?>

<body>
<div class="main-content-wrapper">
<div class="login-area">
<div class="login-header">
<a href="index.php/login" class="logo">
<img src="<?php echo base_url()?>assets/img/logosvg02.svg" height="80" alt="">
</a>
</div>
<div class="login-content">
<div class="main-login main-center">
                    <form id="reg-form" class="niceform">
					                  <form action="#" method="post">
										                        <div class="form_item">
                            <label class="item_label" id="gender_text">I am a:</label>
							<br>
							<div style="margin-left:20px;" class="col-md-5">
	                                    <select class="form_looking_for form-control select select-primary">
	                                        <option value="0">
	                                            <?php echo $this->lang->line('straight'); ?>
	                                        </option>
	                                        <option value="1">
	                                            <?php echo $this->lang->line('gay'); ?>
	                                        </option>
	                                        <option value="2">
	                                            <?php echo $this->lang->line('bisexual'); ?>
	                                        </option>
	                                    </select>
                           </div>
                        </div>
						                <div class="regform-form">
										                        <div class="form_item">
                    <form id="reg-form" class="niceform">
                       <label class="item_label"></label>
							<div style="margin-left:20px;" class="col-md-5">
	                                    <select class="form_gender form-control select select-primary">
	                                        <option value="0">
	                                            <?php echo $this->lang->line('man'); ?>
	                                        </option>
	                                        <option value="1">
	                                            <?php echo $this->lang->line('woman'); ?>
	                                        </option>
	                                    </select>

                           </div>

                        </div>
</div>
<br>
                        <div class="form_item" id="username_field">
			                                    <label class="item_label" for="site_username">
			                                        <?php echo $this->lang->line('username'); ?>
			                                    </label>
                            <div class="input_text">
			                                    <input type="text" class="form-control username" id="site_username" placeholder="<?php echo $this->lang->line('username_placeholder'); ?>">
                        </div>
</div>

                        <div class="form_item" id="email_field">
			                                    <label class="item_label" for="site_email">
			                                        <?php echo $this->lang->line('email'); ?>
			                                    </label>
                            <div class="input_text">
			                                    <input type="email" class="form-control email" id="site_email" placeholder="<?php echo $this->lang->line('email_placeholder'); ?>">
                            </div>
                        </div>

						                        <div class="form_item" id="password_field">
			                                    <label class="item_label" for="site_password">
			                                        <?php echo $this->lang->line('password'); ?>
			                                    </label>
                            <div class="input_text">
			                                    <input type="password" class="form-control password" id="site_password" placeholder="<?php echo $this->lang->line('password_placeholder'); ?>">
                            </div>
                        </div>

			                                <?php
											if($settings["web_captcha"] == 1):
											?>
						                        <div class="form_item" id="captcha_field">
		                                        <label class="item_label" for="snapals_password">
		                                            <?php echo $captcha->question; ?>
		                                        </label>
												                            <div class="input_text">
		                                        <input type="text" class="form-control captcha_answer" id="snapals_password" placeholder="<?php echo $this->lang->line('captcha_placeholder'); ?>">
		                                        <input type="hidden" class="captcha_id" value="<?php echo $captcha->id ?>" />
		                                    </div>
		                                    <?php
											else:
											?>
		                                        <input type="hidden" class="captcha_answer" value="" />
		                                        <input type="hidden" class="captcha_id" value="" />
		                                        <?php
											endif;
											?>
                        </div>
<div class="error-register">
			                                </div>
<br>
						                        <div class="submit_button">
    <a href="index.html#" class="btn btn-register btn-primary active">
       <?php echo $this->lang->line('register_btn'); ?>
    </a>																									</a>
                        </div>
						<br>

                        <div class="form_item" id="terms_check">
                            <label for="terms"> <?php echo $this->lang->line('signup_terms'); ?> </label>
                        </div>
                    </form>

<span id="result" class="loading"></span>
<br><br>
					<div class="login-bottom-links">
                        <a href="<?php echo base_url()?>site/register" class="link">
							Create New Account						</a>
                        <br>

						<a href="<?php echo base_url()?>" class="link">Already have a Account?</a>
						</div>

				</div>
			</div>
							</div>
			</div>
