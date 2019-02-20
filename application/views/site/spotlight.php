<link href="<?php echo base_url()?>css/elastislide.css" rel="stylesheet">
<script src="<?php echo base_url()?>js/modernizr.custom.17475.js"></script>
			    		
			    <div class="container" style="margin-top:5px;">

					
<div class="row" style="margin-bottom: 20px;">
			    		
			    				<div class="col-xs-1" style="z-index:999;">
								
								<img src="http://localhost/dateme/assets/images/spotlightframe.gif"  />
																
								<p onclick="location.href='premium'" style="position:absolute;top:8px;left:25px;z-index:1000;width:50px;text-align:center;color: #FFF;
			text-decoration: none;
			cursor: pointer;text-shadow: rgba(0,0,0,0.5) 0 -1px 0;"><?php echo $this->lang->line("add_yourself"); ?></p>
								
								</div>
			
			
			
			      			<div class="col-md-11" style="height:78px;overflow:hidden;padding:0px;">
			      			 <ul id="carousel" class="elastislide-list elastislide-horizontal" style="padding-top:0px;">
			      			 						<?php foreach ($spotlight_users as $key => $user): ?>
			<?php  
		    $birthdate = new DateTime($user["birthday"]);
			$today     = new DateTime();
			$interval  = $today->diff($birthdate);
			$age	   = $interval->format('%y');
            if($user["thumb_url"] == "" || $user["thumb_url"] == NULL) {
			  $user["thumb_url"] = "images/avatar.png";
			}
			if($user["is_fake"] == 1) {	
				$avatar = $user["thumb_url"];
			} else {
				$avatar = base_url() . $user["thumb_url"];
			}
				
			?>	
<li>
<a href="<?php echo base_url(); ?>user/profile/<?php echo $user["uid"]; ?>">
<img style="height:70px;width:70px;" src="<?php echo $avatar ?>" />
</a>
</li>
		
		<?php endforeach ?>
					
															</ul>
						</div>
			    		
			    		
			    		
			    	</div>
		
		<script src="<?php echo base_url()?>js/sliderassets/js/jquery-1.11.3.min.js"></script>
		<script src="<?php echo base_url()?>js/sliderassets/js/jquery-ui.min.js"></script>
		<script src="<?php echo base_url()?>js/jquery.elastislide.js"></script>
				<script type="text/javascript">
			
			$( '#carousel' ).elastislide();
			
		</script>
