   <link href="<?php echo base_url(); ?>css/site/encounters.css" rel="stylesheet">


<?php
$this->load->view('templates/headers/main_header', $title);
?>

<?php
   // echo '<pre/>',print_r($users);
    if($users->is_fake == 1) {
		$avatar_url = "";
	} else {
		$avatar_url = base_url();
	}

	if($users->url == "" || $users->url == NULL) {
		$users->url= "images/avatar.png";
	}


?>
   <?php echo $users->is_fake ?>

<div class="container">
<div class="row">




  <div class=" col-sd-3" style="background-image: url(<?php echo $avatar_url . $users->url ?>);
  background-position: center;
  background-size: cover;
  border-radius: 20px;
  margin-left: 20% !important;
  margin-top: 80px !important;
  padding-top: 10px;
  width:60%; min-height:70%">

   <div class="encounters-card__overlay"></div>
    <div class="" style="text-align: center">
      <div class="align-text-bottom">
	    <a href="<?php echo base_url(); ?>user/profile/<?php echo $users->user_id; ?>">
        <span class="" style="font-size: 26px; margin-top: 20px !important; text-shadow: 0px 0px 10px rgba(0,0,0,0.2);"><?= $users->username; ?></span>
		</a>
		  <?php
  			$birthday= date('Y-m-d',strtotime($users->birthday));
			$datetime1 = new DateTime($birthday);
			$datetime2 = new DateTime();
			$interval = $datetime1->diff($datetime2);
?>


<!--
        <h4 class="encounters-card__info">Age: <?php echo $interval->y;?></h4>
					 <?php
			if($users->gender == 0) {
					$gender_color = $this->lang->line('Men');
				} else {
					$gender_color = $this->lang->line('Woman');
				}
			if($users->interested_in == 0) {
					$interested_in = $this->lang->line('Straight');
				} else if($users->interested_in == 1) {
					$interested_in = $this->lang->line('Gay');
				} else {
					$interested_in = $this->lang->line('Bisexual');
				}

			?>
<br>
			<p><?php echo $this->lang->line('personal_info'); ?>:</p>
			<p><?php echo $this->lang->line('sexuality'); ?>: I'm <?= $interested_in ?></p>
			<p><?php echo $this->lang->line('Gender'); ?>: <?= $gender_color; ?></p>
-->


      </div>
      <p class="encounters-card__desc"><?= $users->description; ?></p>
	   <button class="btn like_it response_like btn btn-outline encounters-card__button"
     style="margin-top: 50%;
    margin-bottom: 10px;
    padding: 15px !important ;
    border-color: white !important;
    box-shadow: 0px 1px 8px 0px rgba(0,0,0,0.2);"
     data-id="<?php echo $users->user_id; ?>"><i class="fa fa-heart" style="font-size: 30px; width: 30px; color: white; text-shadow: 0px 0px 10px rgba(0,0,0,0.2);"></i></button>
<button  class="btn response_unlike like_it btn btn-outline encounters-card__button"
style="margin-top: 50%;
margin-bottom: 10px;
    padding: 15px !important;
        border-color: white !important;
        box-shadow: 0px 1px 8px 0px rgba(0,0,0,0.2);"
data-id="<?php echo $users->user_id; ?>"><i class="fa fa-close" style="font-size: 30px; width: 30px;  color: white; text-shadow: 0px 0px 10px rgba(0,0,0,0.2);"></i></button>
    </div>

  </div>





<!--
  <div class="encounters-card">
		<img src="<?php echo $avatar_url . $users->url ?>" height="400" width="400">
   <div class="encounters-card__overlay"></div>
    <div class="encounters-card__content">
      <div class="encounters-card__header">
	    <a href="<?php echo base_url(); ?>user/profile/<?php echo $users->user_id; ?>">
        <h1 class="encounters-card__title"><?= $users->username; ?></h1>
		</a>
		  <?php
  			$birthday= date('Y-m-d',strtotime($users->birthday));
			$datetime1 = new DateTime($birthday);
			$datetime2 = new DateTime();
			$interval = $datetime1->diff($datetime2);
?>
        <h4 class="encounters-card__info">Age: <?php echo $interval->y;?></h4>
					 <?php
			if($users->gender == 0) {
					$gender_color = $this->lang->line('Men');
				} else {
					$gender_color = $this->lang->line('Woman');
				}
			if($users->interested_in == 0) {
					$interested_in = $this->lang->line('Straight');
				} else if($users->interested_in == 1) {
					$interested_in = $this->lang->line('Gay');
				} else {
					$interested_in = $this->lang->line('Bisexual');
				}

			?>
<br>
			<p><?php echo $this->lang->line('personal_info'); ?>:</p>
			<p><?php echo $this->lang->line('sexuality'); ?>: I'm <?= $interested_in ?></p>
			<p><?php echo $this->lang->line('Gender'); ?>: <?= $gender_color; ?></p>

      </div>
      <p class="encounters-card__desc"><?= $users->description; ?></p>
	   <button class="btn like_it response_like btn btn-outline encounters-card__button" data-id="<?php echo $users->user_id; ?>"><i class="fa fa-heart"></i></button>
<button  class="btn response_unlike like_it btn btn-outline encounters-card__button" data-id="<?php echo $users->user_id; ?>"><i class="fa fa-close"></i></button>
    </div>
</div>

-->






</div>
</div>
</div>
		<?php
		$this->load->view('templates/footers/main_footer');
		?>
	    <script src="<?php echo base_url(); ?>js/jquery.placeholder.min.js"></script>
	    <script src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
		<script src="<?php echo base_url(); ?>js/wow.min.js"></script>
	    <script src="<?php echo base_url(); ?>js/theme.js"></script>
	    <script src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
