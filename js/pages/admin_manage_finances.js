$(document).ready(function() {
	
	$(".enable_payment").change(function() {
		if(this.checked) {
			$(".payment_checked").addClass("show");	
		} else {
			$(".payment_checked").removeClass("show");	
		}
	});

	$(".btn-save").click(function(e) {
		e.preventDefault();
		
		$(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>');	
			
		var enable_payment = 0;
			
		if($(".enable_payment").is(":checked")) {
			enable_payment = 1;
		} else {
			enable_payment = 0;
		}
		
		var paypal_api_username = $(".paypal_api_username").val();
		var paypal_api_pw = $(".paypal_api_pw").val();
		var paypal_api_sign = $(".paypal_api_sign").val();
		var stripe_secret_key = $(".stripe_secret_key").val();
		var stripe_pub_key = $(".stripe_pub_key").val();
		var price_100_coins = $(".100_coins_price").val();
		var price_500_coins = $(".500_coins_price").val();
		var price_1000_coins = $(".1000_coins_price").val();
		var see_who_loves_you_price = $(".see_who_loves_you_price").val();
		var basic_package_price = $(".basic_package_price").val();
		var basic_package_days = $(".basic_package_days").val();
		var standard_package_price = $(".standard_package_price").val();
		var standard_package_days = $(".standard_package_days").val();
		var premium_package_price = $(".premium_package_price").val();
		var premium_package_days = $(".premium_package_days").val();
		var browse_invisibly_price = $(".browse_invisibly_price").val();
		var spot_light_price = $(".spot_light_price").val();
		var active_message_price = $(".active_message_price").val();
		var featured_one_week_price = $(".featured_one_week_price").val();
		var featured_one_month_price = $(".featured_one_month_price").val();
		var currency = $(".currency").val();
		
		var that = $(this);
		
		$.ajax({
			url: base_url + "admin/save_payment_settings",
			type: 'POST',
			data: {currency: currency, featured_one_week_price: featured_one_week_price, featured_one_month_price: featured_one_month_price, price_100_coins : price_100_coins, price_500_coins : price_500_coins, price_1000_coins : price_1000_coins, see_who_loves_you_price : see_who_loves_you_price, basic_package_price: basic_package_price, basic_package_days: basic_package_days, standard_package_price: standard_package_price, standard_package_days: standard_package_days, premium_package_price: premium_package_price, premium_package_days: premium_package_days, browse_invisibly_price: browse_invisibly_price, spot_light_price: spot_light_price, active_message_price: active_message_price, enable_payment: enable_payment, paypal_api_username: paypal_api_username, paypal_api_pw: paypal_api_pw, paypal_api_sign: paypal_api_sign, stripe_pub_key: stripe_pub_key, stripe_secret_key: stripe_secret_key},
			success: function(data) {
				
				$(".alert-error-settings").empty();
				
				if(data.error > 0)
				{
					$(".alert-error-settings").html(data.error_msg).fadeIn();
					$("html, body").animate({scrollTop: 0}, 1000);
					
					that.html('<i class="fa fa-check"></i> Save Changes');
				} else {
					window.location = base_url + "admin/manage_finances?status=ok";
				}
			}
		});
	});
});