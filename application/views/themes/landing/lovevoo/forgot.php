    <body>
		<div class="main-content-wrapper">

			<div class="login-area">
				<div class="login-header">
					<a href="index.php/login" class="logo">
						<img src="assets/img/logo.png" height="60" alt="">
					</a>
				</div>
				<div class="login-content">
					<form role="form" id="login">
						<div class="form-group">
							<label for="okdate_email"><?php echo $this->lang->line('your_email'); ?></label>
							<input type="text" autocomplete="off" maxlength="38" class="form-control okdate_email" id="okdate_email" placeholder="you@email.com">
						</div>
						<hr />
						<div style="text-align:center;">
							<div class="error-forgot-password">
							</div>
							<button type="submit" class="btn btn-primary btn-recover-password-ok btn-lg btn-embossed"><?php echo $this->lang->line('send_btn'); ?></button>
						</div>
					</form>

					<div class="login-bottom-links">
                        <a href="<?php echo base_url()?>site/register" class="link">
							Create New Account						</a>
                        <br>

						<a href="<?php echo base_url()?>" class="link">Already have a Account?</a>
						</div>
					<br><br>
</div>
</div>
</div>
