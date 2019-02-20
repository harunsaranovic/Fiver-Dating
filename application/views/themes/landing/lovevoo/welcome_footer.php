
	<script type="text/javascript">
		var base_url = "<?php echo base_url() ?>";
		var almost_there_str = "<?php echo $this->lang->line('almost_there'); ?>";
		var demo_reg_closed_str = "<?php echo $this->lang->line('demo_reg_closed'); ?>";
		var yeah_str = "<?php echo $this->lang->line('yeah'); ?>";
		var success_str = "<?php echo $this->lang->line('success'); ?>";
		var send_str = "<?php echo $this->lang->line('send_btn'); ?>";
		var sign_in_str = "<?php echo $this->lang->line('sign_in'); ?>";
		var register_str = "<?php echo $this->lang->line('register_btn'); ?>";
		var email_invalid_str = "<?php echo $this->lang->line('email_invalid'); ?>";
		var email_not_linked_str = "<?php echo $this->lang->line('email_not_linked'); ?>";
		var recover_password_success_str = "<?php echo $this->lang->line('recover_password_success'); ?>";
	</script>
	
	<?php echo $settings["site_analytics"]; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
	$('.autoplay').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
</script>
    <script src="<?php echo base_url(); ?>js/jquery.cookie.min.js"></script>
    <script src="<?php echo base_url(); ?>js/pages/welcome_lovevoo.js?ver=1"></script>

    
    </body>
</html>
