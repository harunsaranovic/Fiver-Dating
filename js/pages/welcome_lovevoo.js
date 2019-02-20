$(document).ready(function() {
	$(".btn-login-ok").click(function(e) {
		e.preventDefault();
		
		var username = $("form#login #logusername").val();
		var password = $("form#login #logpassword").val();
		
		var that = $(this);
		that.html('<i class="fa fa-circle-o-notch fa-spin"></i>');
		
		$.ajax({
			url: base_url + "user/login",
			type: 'POST',
			data: {username : username, password : password},
			success: function(data) {
				$("#logusername").closest(".form-group").removeClass("has-error");
				$("#logpassword").closest(".form-group").removeClass("has-error");
				$(".error-login").hide();
			
				if(data.error == 999) {
					$("#logusername").closest(".form-group").addClass("has-error");
					$("#logpassword").closest(".form-group").addClass("has-error");
					$(".error-login").html("<div class='refreshLogin'><i class='fa fa-times-circle'></i></div>" + data.status).fadeIn();
					
					that.html(sign_in_str);
				} else if(data.error == 998) {
					$("#passwordreg").closest(".form-group").addClass("has-error");
					$(".error-login").html("<div class='refreshLogin'><i class='fa fa-times-circle'></i></div>" + data.status).fadeIn();
					
					that.html(sign_in_str);
				} else {	
					$(".error-login").removeClass("alert-danger").addClass("alert-success").html("<div class='refreshLogin'><i class='fa fa-check-square'></i></div><strong>" + success_str + "</strong>").fadeIn();
					
					setTimeout(function() {
						window.location = data.url_redirect;
					}, 1000);
				}
			}
		});
	});
	
	$(".btn-register").click(function(e) {
		e.preventDefault();
		
		var username = $("form .username").val();
		var password = $("form .password").val();
		var email = $("form .email").val();
		var captcha_rep = $("form .captcha_answer").val();
		var captcha_id = $("form .captcha_id").val();
		
		var bepoke_interested_in = $.cookie("bepoke_interested_in");
		var bepoke_gender = $.cookie("bepoke_gender");
		
		var that = $(this);
		
		that.addClass("disabled");
		that.html('<i class="fa fa-circle-o-notch fa-spin"></i>');
		console.log({username : username, password : password, email : email, captcha_rep : captcha_rep, captcha_id : captcha_id, bepoke_gender : bepoke_gender, bepoke_interested_in: bepoke_interested_in});
		$.ajax({
			url: base_url + "user/create",
			type: 'POST',
			data: {username : username, password : password, email : email, captcha_rep : captcha_rep, captcha_id : captcha_id, bepoke_gender : bepoke_gender, bepoke_interested_in: bepoke_interested_in},
			success: function(data) {
				$("form .username").closest(".form-group").removeClass("has-error");
				$("form .password").closest(".form-group").removeClass("has-error");
				$("form .email").closest(".form-group").removeClass("has-error");
				$("form .captcha_answer").closest(".form-group").removeClass("has-error");
				
				that.removeClass("disabled");
			
				if(data.error == 999) {
					$("form .username").closest(".form-group").addClass("has-error");
					$(".error-register").html(data.error_msg).fadeIn();
					
					that.html(register_str);
				} else if(data.error == 998) {
					$("form .password").closest(".form-group").addClass("has-error");
					$(".error-register").html(data.error_msg).fadeIn();
					
					that.html(register_str);
				} else if(data.error == 997) {
					$("form .email").closest(".form-group").addClass("has-error");
					$(".error-register").html(data.error_msg).fadeIn();
					
					that.html(register_str);
				} else if(data.error == 996) {
					$("form .captcha_answer").closest(".form-group").addClass("has-error");
					$(".error-register").html(data.error_msg).fadeIn();
					
					that.html(register_str);
				} else if(data.error == 995) {
					$("form .username").closest(".form-group").addClass("has-error");
					$(".error-register").html(data.error_msg).fadeIn();
					
					that.html(register_str);
				} else if(data.error == 994) {
					$("form .email").closest(".form-group").addClass("has-error");
					$(".error-register").html(data.error_msg).fadeIn();
					
					that.html(register_str);
				} else if(data.error == 993) {
					$("form .snapchat").closest(".form-group").addClass("has-error");
					$(".error-register").html(data.error_msg).fadeIn();
					
					that.html(register_str);
				} else if(data.error == 500) {
					$(".error-register").html(demo_reg_closed_str).fadeIn();
					
					that.html(register_str);
				} else if(data.error == 0) {					
					setTimeout(function() {
						window.location = base_url + "user/firstlogin";
					}, 1200);
					
					that.prop("disabled", true);
					that.html('<i class="fa fa-check"></i> ' + yeah_str);
				}
			}
		});
	});
	
		$(".btn-recover-password-ok").click(function(e) {
		e.preventDefault();
		
		var email = $(".okdate_email").val();
				
		var that = $(this);
		that.html('<i class="fa fa-circle-o-notch fa-spin"></i>');
		that.prop("disabled", true);
		
		$.ajax({
			url: base_url + "user/recover_password",
			type: 'POST',
			data: {email: email},
			success: function(data) {
				$("#okdate_email").closest(".form-group").removeClass("has-error");
				$(".error-forgot-password").hide();
			
				if(data.error == 999) {
					$(".okdate_email").closest(".form-group").addClass("has-error");
					$(".error-forgot-password").html(email_invalid_str).fadeIn();
					that.prop("disabled", false);
					that.html(send_str);
				} else if(data.error == 998) {
					$(".okdate_email").closest(".form-group").addClass("has-error");
					$(".error-forgot-password").html(email_not_linked_str).fadeIn();
					that.prop("disabled", false);
					that.html(send_str);
				} else {
that.html("<div class='alert alert-success' style='text-align:center;  font-size:8px;'><i class='fa fa-check-circle' style='font-size:40px;'></i><br />" + recover_password_success_str + "</div>");
					}
			}
		});
	});

});
