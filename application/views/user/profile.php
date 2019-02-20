<?php
$this->load->view('templates/headers/main_header', $title);

if($user["gender"] == 0) {
	$gender_word = $this->lang->line('his');
	$gender_word2 = $this->lang->line('Him');
} else {
	$gender_word = $this->lang->line('her');
	$gender_word2 = $this->lang->line('Her');
}

$birthdate = new DateTime($user["birthday"]);
$today     = new DateTime();
$interval  = $today->diff($birthdate);
$age	   = $interval->format('%y');

if($user["gender"] == 0) {
	$gender_color = "male_color";
	$gender_type = $this->lang->line('Man');;
} else {
	$gender_color = "female_color";
	$gender_type = $this->lang->line('Woman');
}

if($user["interested_in"] == 0) {
	$interested_in = $this->lang->line('Straight');
} else if($user["interested_in"] == 1) {
	$interested_in = $this->lang->line('Gay');
} else {
	$interested_in = $this->lang->line('Bisexual');
}

function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }

    return false;
}
?>
<style>
.panel-default > .panel-heading {
    color: #fff;
    background-color: #000000db;
    border-color: #000;
}

.panel-default {
    border-color: #000;
}

.panel-body {
    padding: 15px;
}
</style>
<br>
<div class="container target">
    <div class="row friendship">
			<div class="col-sm-2"><img title="profile image" class="img-circle img-responsive" src="<?php echo $avatar; ?>">
				</div>
        <div class="col-sm-4">
             <h1 style="color:white" class=""><?php echo ucfirst($user["username"]); ?></h1>
				</div> <div class="col-sm-1">
		 			        <?php
				    if(!$has_requested)
				    {
					?>
						<?php
						if($has_pending) {
						?>
						<button data-user-id="<?php echo $user["uid"]; ?>" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo $this->lang->line('user_sent_request'); ?>" class="btn btn-success dim btn-accept-friend btn-poked" type="button">
							<i class="fa fa-user-plus"></i>

						</button>
						<?php
						} else {
						?>
						<?php
						if($are_friends) {
						?>
						<button disabled="" class="btn btn-primary btn-friends-ok" type="button">
							<i class="fa fa-user"></i>

						</button>
						<?php
						} else {
						?>
				        <button class="btn btn-primary dim btn-poke" type="button">
							<i class="fa fa-user-plus"></i>

						</button>
						<?php
						}
						}
					} else {
						if($has_pending) {
						?>
						<button data-user-id="<?php echo $user["uid"]; ?>" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo $this->lang->line('user_sent_request'); ?>" class="btn btn-success dim btn-accept-friend btn-poked" type="button">
							<i class="fa fa-user-plus"></i>

						</button>
						<?php
						} else {
						?>
						<button disabled="" data-placement="top" data-toggle="tooltip" data-original-title="You sent a request to this user" class="btn btn-default dim btn-poke btn-poked" type="button">
							<i class="fa fa-user-plus"></i>

						</button>
						<?php
						}
					}
					?>
				</div> <div class="col-sm-1">
                    <?php
					if($active_message)
					{
					?>
					<button class="btn btn-info dim btn-msg" type="button">
						<i class="fa fa-envelope"></i>
					</button>
										<?php
					} else {
					?>
					<button class="btn btn-info dim btn-msgdisabled" type="button">
						<i class="fa fa-envelope"></i>
					</button>
					<?php
					}
					?>
				</div> <div class="col-sm-1">
					<?php
					if($has_loved)
					{
					?>
			        <button class="btn btn-danger btn-love" data-profile-id="<?php echo $user["uid"]; ?>" type="button">
						<i class="fa fa-heart"></i>
					</button>
					<?php
					} else {
					?>
					<button class="btn btn-danger dim btn-love" data-profile-id="<?php echo $user["uid"]; ?>" type="button">
						<i class="fa fa-heart"></i>
					</button>
					<?php
					}
					?>
<br>
        </div>

    </div>
  <br>
    <div class="row">







				<div class="prof col-sm-3">
            <!--left col-->
            <ul class="list-group shadow">
             <div class="panel panel-default" style="box-shadow: 0 1px 2px rgba(0, 0, 0, 0);">
                <div class="panel-heading"><?php echo $this->lang->line('public_infos'); ?></div>
                <li class="list-group-item text-right"><span class="pull-left"><strong class=""><?php echo $this->lang->line('age'); ?></strong></span><?php echo $age; ?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class=""><?php echo $this->lang->line('gender'); ?></strong></span> <?php echo $gender_type; ?></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class=""><?php echo $this->lang->line('sexuality'); ?></strong></span> <?php echo $interested_in; ?></li>
              <li class="list-group-item text-right"><span class="pull-left"><strong class=""><?php echo $this->lang->line('status'); ?>: </strong></span> 				        <?php
					    if($user["city"] == "") {
			                $user["city"] = $this->lang->line("unknown_city");
		                }
					    if($user["is_online"] == 1):
					    ?>
					    <div class="profile_online_now"><i class="fa fa-circle"></i> <?php echo $this->lang->line('p_online_now'); ?></div>
					    <?php else: ?>
					    <div><i class="fa fa-circle"></i><?php echo $this->lang->line('p_offline_now'); ?></div>
				        <?php
					    endif;
					    ?>

 <?php if($settings["hide_country"] == 0): ?>
				  <li class="list-group-item text-right"><span class="pull-left"><strong class=""><?php echo $this->lang->line('Country'); ?>:  </strong></span>&nbsp<?php echo get_country_name_by_code($user["country"]); ?>
                      </li>
					  <?php endif; ?>
					                <li class="list-group-item text-right"><span class="pull-left"><strong class=""><?php echo $this->lang->line('city'); ?>: </strong></span> 					  <?php echo $user["city"]; ?>

            </ul>
			</div>
        <div class="prof col-sm-9" contenteditable="false" style="">



					<!-- PHOTOS -->
					           <div class="panel panel-default shadow">
					                <div class="panel-heading"><?php echo $this->lang->line('p_photos'); ?></div>
							                            <div class="panel-body">
								                            <?php
															if(sizeof($photos) == 0) {
															?>
															<div class="alert alert-danger alert-center">
																<?php echo sprintf($this->lang->line("p_no_photos_yet"), $user["username"]); ?>
															</div>
															<?php
															} else {

															if($this->session->userdata("user_id") == $user["uid"]) {
															?>
															<div class="photo_actions">
																<a class="btn btn-primary" href="<?php echo base_url(); ?>photo/add"><i class="fa fa-plus"></i> <?php echo $this->lang->line("p_add_photos"); ?></a>
																<a class="btn btn-primary" href="<?php echo base_url(); ?>photo/manage"><i class="fa fa-cogs"></i> <?php echo $this->lang->line("p_manage_photos"); ?></a>
															</div>
															<?php
															}

															?>
															<div class="lightBoxGallery" id="galleryItems">
																<?php
																foreach($photos as $photo) {
																?>
																<div class="galleryItem" data-id="<?php echo $photo["id"]; ?>">
																	<?php
																	if($user["is_fake"] == 0)
																	{
																	?>
														    		<a href="<?php echo base_url() . $photo["url"] ?>"><img src="<?php echo base_url() . $photo["thumb_url"] ?>" alt="" /></a>
														    		<?php
															    	} else {
															    	?>
														    		<a href="<?php echo $photo["url"] ?>"><img src="<?php echo $photo["thumb_url"] ?>" alt="" /></a>
															    	<?php
																    }
																    ?>
														    		<div class="p_info_block">
															    		<i class="fa fa-thumbs-up"></i> <?php echo $photo["votes"]; ?>
															    		<span class="p_bullet">&bullet;</span>
															    		<i class="fa fa-comments"></i> <?php echo $photo["comments"]; ?>
														    		</div>
														    	</div>
																<?php
																}
																?>
															</div>
															<?php
															}
															?>
							                            </div>
							                        </div>
																			<!-- END OF photos -->






					<!-- ABOUT -->
            <div class="panel panel-default shadow">
                <div class="panel-heading"><?php echo $this->lang->line('p_about'); ?></div>
                <div class="panel-body"> 			                            <p>
				                           <?php
								            if($user["about"] != "" || $user["about"] != NULL) {
									        ?>
									        	<?php echo $user["about"]; ?>
									        <?php
								            } else {
									        ?>
									        	<?php echo sprintf($this->lang->line('no_about'), $user["username"]); ?>
									        <?php
								            }
			            					?>
			                            </p>
			                            <?php
				                        $extra_fields = $settings["user_extra_fields"];

				                        $user_fields = explode(",", $extra_fields);

				                       	if(sizeof($user_fields) > 1)
				                       	{
					                        foreach($user_fields as $u_field) {
						                    ?>
						                    <h3><?php echo ucfirst($u_field); ?></h3>
						                    <?php
							                $is_found = false;
							                foreach($extra_user as $e_user) {
								                if($e_user["attr_name"] == $u_field && $e_user["attr_val"] != "") {
									            ?>
									            <p>
										            <?php echo $e_user["attr_val"]; ?>
									            </p>
									            <?php
										        $is_found = true;
										        break;
								                }
							                }
							                if(!$is_found) {
								            ?>
								            <p>
									            <i><?php echo sprintf($this->lang->line('no_custom_user_val'), ucfirst($user["username"])); ?></i>
								            </p>
								            <?php
							                }
							                ?>
						                    <?php
					                        }
				                        }
				                        ?>

                </div>
            </div>
						<!-- END OF ABOUT -->



						<!-- TIMELINE -->
						                    <?php
				                if($settings["hide_timeline"] == 0):
				                ?>
            <div class="panel panel-default target shadow">
                <div class="panel-heading" contenteditable="false"><?php echo $this->lang->line('p_timeline'); ?></div>
		                            <div class="panel-body">
			                            <div class="ibox float-e-margins timeline-user">
							                <div class="ibox-content profile-about profile-timeline">
												<div id="vertical-timeline" class="vertical-container dark-timeline">
													<?php
													foreach($timeline_msgs as $msg)
													{
													?>
							                       	<div class="vertical-timeline-block">
							                            <div class="vertical-timeline-icon navy-bg">
							                                <i class="fa <?php echo $msg["icon"]; ?>"></i>
							                            </div>

							                            <div class="vertical-timeline-content">
							                                <h2><?php echo ucfirst($msg["text"]); ?></h2>
							                                <span class="vertical-date">
							                                    <small><?php echo sprintf($this->lang->line('user_timeline_published_date'), $msg["date"] . "Z"); ?></small>
							                                </span>
							                            </div>
							                        </div>
							                        <?php
								                    }
								                    ?>
							                    </div>
							                </div>
							            </div>
		                            </div>



    </div>
	<?php endif;?>
		<!-- END OF timeline -->







                </div>
							</div>
<!-- END OF COL -->






</div>


			<div class="report-placeholder">
				<a class="btn btn-report" data-user-id="<?php echo $user["uid"]; ?>"><i class="fa fa-bullhorn"></i> <?php echo $this->lang->line('report_user'); ?></a> 
				<?php
				if($user["st_blocked"] == 0):
				?>
				<a class="btn btn-block-user btn-block-u" data-user-id="<?php echo $user["uid"]; ?>"><i class="fa fa-frown-o"></i> <?php echo $this->lang->line('block_user'); ?></a>
				<?php
				else:
				?>
				<a class="btn btn-block-user btn-unblock-u" data-user-id="<?php echo $user["uid"]; ?>"><i class="fa fa-smile-o"></i> <?php echo $this->lang->line('unblock_user'); ?></a>
				<?php
				endif;
				?>
			</div>
		</div>
	</div>
</div>
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<div class="modal inmodal" id="photo_modal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $this->lang->line('Close'); ?></span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer modal-photo-actions">
            	<a href="#" class="btn btn-report-photo"><?php echo $this->lang->line('report_photo'); ?></a>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal" id="poke_modal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $this->lang->line('Close'); ?></span></button>
                <i class="fa fa-clock-o modal-icon"></i>
                <h4 class="modal-title"><?php echo $this->lang->line("friend_request_modal_title"); ?></h4>
                <p><?php echo sprintf($this->lang->line('want_send_request'), $user["username"]); ?></p>
            </div>
            <div class="modal-body">
            	<p style="text-align: center;">
                	<button class="btn btn-yeah-poke btn-lg mb" type="button" data-user-id="<?php echo $user["uid"]; ?>"><?php echo $this->lang->line('yeah_btn'); ?></button>
					<button class="btn btn-default btn-nope-poke btn-lg mb" data-dismiss="modal" type="button"><?php echo $this->lang->line('nope_btn'); ?></button>
            	</p>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal" id="msg_modal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $this->lang->line('Close'); ?></span></button>
                <i class="fa fa-message-o modal-icon"></i>
                <h4 class="modal-title"><?php echo $this->lang->line("pm_modal_title"); ?></h4>
            </div>
            <div class="modal-body">
            	<p>

	                <form action="" method="POST" enctype="multipart/form-data" class="form_avatar">
						<div class="form-group" style="text-align:left;">
							<label class="control-label"><?php echo $this->lang->line("your_message_pm_modal"); ?></label>
							<textarea class="form-control form-pm-text" id="pm_main_txt" placeholder="<?php echo $this->lang->line("your_message_pm_modal_placeholder"); ?>"></textarea>
						</div>
						<div class="send_pm_errors alert alert-danger alert-center" style="display: none;">

						</div>
						<div style="text-align:center">
							<a href="#" class="btn btn-primary btn-submit-send-pm" data-user-id="<?php echo $user["uid"]; ?>"><i class="fa fa-envelope"></i> <?php echo $this->lang->line("send_my_pm_btn"); ?></a>
						</div>
					</form>

	                <div class="alert alert-info alert-center">
		                <?php echo $this->lang->line("send_first_message"); ?>
	                </div>
            	</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
$this->load->view('templates/footers/main_footer');
?>
