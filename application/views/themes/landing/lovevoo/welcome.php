    <body>
		<div class="main-content-wrapper">
			<div class="login-area">
				<div class="login-header">
					<a href="index.php/login" class="logo">
						<img src="assets/img/logosvg02.svg" height="120" alt="">
					</a>
				</div>
				<div class="login-content">
							<form role="form" id="login">
								<div class="form-group">
									<input type="text" class="form-control" id="logusername" autocomplete="off" maxlength="38" placeholder="<?php echo $this->lang->line('your_username_login'); ?>">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="logpassword" autocomplete="off" maxlength="38" placeholder="<?php echo $this->lang->line('your_password_login'); ?>">
								</div>
        <div class="form-group">
								<div  style="text-align:center;">
									<div class="error-login alert alert-danger">
									</div>
        </div>
        <div class="form-group">
									<button type="submit" class="btn btn-primary btn-login-ok btn-block"><?php echo $this->lang->line('sign_in'); ?></button>
        </div>
      </form>

					<div class="login-bottom-links">
                        <a href="<?php echo base_url()?>site/register" class="link">
							Create New Account						</a>
                        <br>

						<a href="<?php echo base_url()?>site/forgot">Forgot Your Password ?</a>
						</div>
					<br><br>
								<div class="slider autoplay">
				<div>
					  <?php
	  foreach($users as $user):
		if($user["thumb_url"] == "" || $user["thumb_url"] == NULL) {
			$user["thumb_url"] = "images/avatar.png";
		}
	  ?>
	  <?php
	  if($user["is_fake"] == 1):
	  ?>
	  <h3><img src="<?php echo $user["thumb_url"]; ?>"></h3>
	  				</div>
				<div>
	  <?php
	  else:
	  ?>
	  	  <h3><img src="<?php echo base_url() . $user["thumb_url"]; ?>"></h3>
				</div>
				<div>
	  <?php
	  endif;
	  endforeach;
	  ?>

				</div>
			</div>
							</div>
			</div>
			</div>

		</div>
