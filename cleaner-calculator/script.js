jQuery(function(){
	jQuery("#kvartiri").on('click', function(){
		jQuery("#kvartiri").addClass('active');
		jQuery("#kotedji").removeClass('active');
		jQuery("#kvartiri_remont").removeClass('active');
		jQuery("#kotedji_remont").removeClass('active');	
		jQuery("#remont").removeClass('active');
		jQuery("#remont_types").hide();
		jQuery("#kotedji_square_block").hide();
		jQuery("#kvartiri_square_block").show();
		jQuery(".tarif").hide();
		jQuery("#tarif_kvartiri_49").show();
		jQuery("#mkad_kvartiri").show();
		jQuery("#mkad_kotedji").hide();
	});
	jQuery("#kotedji").on('click', function(){
		jQuery("#kotedji").addClass('active');
		jQuery("#kvartiri").removeClass('active');
		jQuery("#kvartiri_remont").removeClass('active');
		jQuery("#kotedji_remont").removeClass('active');	
		jQuery("#remont").removeClass('active');
		jQuery("#remont_types").hide();
		jQuery("#kvartiri_square_block").hide();
		jQuery("#kotedji_square_block").show();
		jQuery(".tarif").hide();
		jQuery("#tarif_kotedji_199").show();
		jQuery("#mkad_kvartiri").hide();
		jQuery("#mkad_kotedji").show();
	});
	jQuery("#remont").on('click', function(){
		jQuery("#remont").addClass('active');
		jQuery("#kotedji").removeClass('active');
		jQuery("#kvartiri").removeClass('active');
		jQuery("#kotedji_remont").removeClass('active');	
		jQuery("#remont_types").show();	
		jQuery("#kvartiri_square_block").show();
		jQuery("#kotedji_square_block").hide();
		jQuery("#kvartiri_remont").addClass('active');
		jQuery(".tarif").hide();
		jQuery("#tarif_remont_kvartiri_49").show();
		jQuery("#mkad_kvartiri").show();
		jQuery("#mkad_kotedji").hide();
	});
	jQuery("#kvartiri_remont").on('click', function(){
		jQuery("#kvartiri_remont").addClass('active');
		jQuery("#kotedji_remont").removeClass('active');	
		jQuery("#kotedji").removeClass('active');
		jQuery("#kvartiri").removeClass('active');		
		jQuery("#kvartiri_square_block").show();
		jQuery("#kotedji_square_block").hide();
		jQuery(".tarif").hide();
		jQuery("#tarif_remont_kvartiri_49").show();
		jQuery("#mkad_kvartiri").show();
		jQuery("#mkad_kotedji").hide();
	});
	jQuery("#kotedji_remont").on('click', function(){
		jQuery("#kotedji_remont").addClass('active');
		jQuery("#kvartiri_remont").removeClass('active');
		jQuery("#kotedji").removeClass('active');
		jQuery("#kvartiri").removeClass('active');		
		jQuery("#kotedji_square_block").show();
		jQuery("#kvartiri_square_block").hide();
		jQuery(".tarif").hide();
		jQuery("#tarif_remont_kotedji_199").show();
		jQuery("#mkad_kvartiri").hide();
		jQuery("#mkad_kotedji").show();
	});
	
	jQuery("#kvartiri_square_49").on('click', function(){
		jQuery(".tarif").hide();
		if (jQuery("#kvartiri").hasClass('active')) jQuery("#tarif_kvartiri_49").show();
		if (jQuery("#remont").hasClass('active') && jQuery("#kvartiri_remont").hasClass('active')) jQuery("#tarif_remont_kvartiri_49").show();
	});
	
	jQuery("#kvartiri_square_99").on('click', function(){
		jQuery(".tarif").hide();
		if (jQuery("#kvartiri").hasClass('active')) jQuery("#tarif_kvartiri_99").show();
		if (jQuery("#remont").hasClass('active') && jQuery("#kvartiri_remont").hasClass('active')) jQuery("#tarif_remont_kvartiri_99").show();
	});
	
	jQuery("#kvartiri_square_149").on('click', function(){
		jQuery(".tarif").hide();
		if (jQuery("#kvartiri").hasClass('active')) jQuery("#tarif_kvartiri_149").show();
		if (jQuery("#remont").hasClass('active') && jQuery("#kvartiri_remont").hasClass('active')) jQuery("#tarif_remont_kvartiri_149").show();
	});
	
	jQuery("#kvartiri_square_200").on('click', function(){
		jQuery(".tarif").hide();
		if (jQuery("#kvartiri").hasClass('active')) jQuery("#tarif_kvartiri_200").show();
		if (jQuery("#remont").hasClass('active') && jQuery("#kvartiri_remont").hasClass('active')) jQuery("#tarif_remont_kvartiri_200").show();
	});
	
	jQuery("#kotedji_square_199").on('click', function(){
		jQuery(".tarif").hide();
		if (jQuery("#kotedji").hasClass('active')) jQuery("#tarif_kotedji_199").show();
		if (jQuery("#remont").hasClass('active') && jQuery("#kotedji_remont").hasClass('active')) jQuery("#tarif_remont_kotedji_199").show();
	});
	
	jQuery("#kotedji_square_249").on('click', function(){
		jQuery(".tarif").hide();
		if (jQuery("#kotedji").hasClass('active')) jQuery("#tarif_kotedji_249").show();
		if (jQuery("#remont").hasClass('active') && jQuery("#kotedji_remont").hasClass('active')) jQuery("#tarif_remont_kotedji_249").show();
	});
	
	jQuery("#kotedji_square_299").on('click', function(){
		jQuery(".tarif").hide();
		if (jQuery("#kotedji").hasClass('active')) jQuery("#tarif_kotedji_299").show();
		if (jQuery("#remont").hasClass('active') && jQuery("#kotedji_remont").hasClass('active')) jQuery("#tarif_remont_kotedji_299").show();
	});
	
	jQuery("#kotedji_square_349").on('click', function(){
		jQuery(".tarif").hide();
		if (jQuery("#kotedji").hasClass('active')) jQuery("#tarif_kotedji_349").show();
		if (jQuery("#remont").hasClass('active') && jQuery("#kotedji_remont").hasClass('active')) jQuery("#tarif_remont_kotedji_349").show();
	});
	
	jQuery("#date").on('change', function(){
		jQuery("#total-price>.right").show();
	});
	
	jQuery("#discount").on('change', function(){
		if (jQuery("#discount").prop('checked') == true) 
		{
			jQuery("#totaldisc").html(jQuery("#total").html() * (100 - Number(jQuery("#discount").val()))/100);
			jQuery("#discount_id").html(jQuery("#total").html() * (Number(jQuery("#discount").val()))/100);
		}
		else 
		{
			jQuery("#discount_id").html('0');
			jQuery("#totaldisc").html(jQuery("#total").html());
		}
	});
	
	for (i = 1; i <= 48; i++) tarifclick(i);
	
	function tarifclick(i)
	{
		jQuery("#tarif_" + i).click(function(){
			for (j = 1; j <= 48; j++) 
			{
				if (jQuery("#tarif_" + j).hasClass('active'))
				{
					jQuery("#total").html(Number(jQuery("#total").html()) - Number(jQuery("#tarif_" + j).attr('data-price')));
					rehour();
					jQuery("#total_hours").html(Number(jQuery("#total_hours").html()) - Number(jQuery("#tarif_" + j).attr('data-hour')));
					jQuery("#total_minutes").html(Number(jQuery("#total_minutes").html()) - Number(jQuery("#tarif_" + j).attr('data-minute')));
					bhour();
					if (jQuery("#discount").prop('checked') == true) 
					{
						jQuery("#totaldisc").html(jQuery("#total").html() * (100 - Number(jQuery("#discount").val()))/100);
						jQuery("#discount_id").html(jQuery("#total").html() * (Number(jQuery("#discount").val()))/100);
					}
					else 
					{
						jQuery("#discount_id").html('0');
						jQuery("#totaldisc").html(jQuery("#total").html());
					}
				}
				jQuery("#tarif_" + j).removeClass('active');
			}
			jQuery("#tarif_" + i).addClass('active');
			jQuery("#total").html(Number(jQuery("#total").html()) + Number(jQuery("#tarif_" + i).attr('data-price')));
			jQuery("#total_hours").html(Number(jQuery("#total_hours").html()) + Number(jQuery("#tarif_" + i).attr('data-hour')));
			jQuery("#total_minutes").html(Number(jQuery("#total_minutes").html()) + Number(jQuery("#tarif_" + i).attr('data-minute')));
			if (jQuery("#discount").prop('checked') == true) 
			{
				jQuery("#totaldisc").html(jQuery("#total").html() * (100 - Number(jQuery("#discount").val()))/100);
				jQuery("#discount_id").html(jQuery("#total").html() * (Number(jQuery("#discount").val()))/100);
			}
			else 
			{
				jQuery("#discount_id").html('0');
				jQuery("#totaldisc").html(jQuery("#total").html());
			}
		});
	}
	
	function rehour()
	{
		if (jQuery("#total_hours").html() > 1)
		{
			jQuery("#total_hours").html(Number(jQuery("#total_hours").html()) - 1);
			jQuery("#total_minutes").html(Number(jQuery("#total_minutes").html()) + 60);
		}
	}
	
	function bhour()
	{
		jQuery("#total_hours").html(Number(jQuery("#total_hours").html()) + Math.floor(Number(jQuery("#total_minutes").html()) / 60));
		jQuery("#total_minutes").html(Number(jQuery("#total_minutes").html()) % 60);
	}
	
	jQuery('.service_click').click(function(){
		if (jQuery(this).hasClass('active'))
		{
			count = jQuery('#service_' + jQuery(this).attr('data-id') + '_cnt').val();
			jQuery("#total").html(Number(jQuery("#total").html()) - Number(count * jQuery(this).attr('data-price')));
			rehour();
			if (jQuery("#discount").prop('checked') == true) 
			{
				jQuery("#totaldisc").html(jQuery("#total").html() * (100 - Number(jQuery("#discount").val()))/100);
				jQuery("#discount_id").html(jQuery("#total").html() * (Number(jQuery("#discount").val()))/100);
			}
			else 
			{
				jQuery("#discount_id").html('0');
				jQuery("#totaldisc").html(jQuery("#total").html());
			}
			jQuery("#total_hours").html(Number(jQuery("#total_hours").html()) - Number(count * jQuery(this).attr('data-hour')));
			jQuery("#total_minutes").html(Number(jQuery("#total_minutes").html()) - Number(count * jQuery(this).attr('data-minute')));
			bhour();
			jQuery(this).removeClass('active')
		}
		else
		{
			count = jQuery('#service_' + jQuery(this).attr('data-id') + '_cnt').val();
			jQuery("#total_hours").html(Number(jQuery("#total_hours").html()) + Number(count * jQuery(this).attr('data-hour')));
			jQuery("#total_minutes").html(Number(jQuery("#total_minutes").html()) + Number(count * jQuery(this).attr('data-minute')));
			bhour();
			jQuery("#total").html(Number(jQuery("#total").html()) + Number(count * jQuery(this).attr('data-price')));
			if (jQuery("#discount").prop('checked') == true) 
			{
				jQuery("#totaldisc").html(jQuery("#total").html() * (100 - Number(jQuery("#discount").val()))/100);
				jQuery("#discount_id").html(jQuery("#total").html() * (Number(jQuery("#discount").val()))/100);
			}
			else 
			{
				jQuery("#discount_id").html('0');
				jQuery("#totaldisc").html(jQuery("#total").html());
			}
			jQuery(this).addClass('active');
		}
	});
	
	jQuery("#additional").click(function(){
		if (jQuery("#additional").hasClass('active'))
		{
			jQuery("#additional").removeClass('active');
			jQuery("#additional span").html('Показать');
			jQuery("#additional-block").hide();
		}
		else
		{
			jQuery("#additional").addClass('active');
			jQuery("#additional span").html('Скрыть');
			jQuery("#additional-block").show();
		}
	});
	
	jQuery(".service-plus").click(function(){
		jQuery("#service_" + jQuery(this).attr('data-id') + "_cnt").val(Number(jQuery("#service_" + jQuery(this).attr('data-id') + "_cnt").val()) + 1);
		if (jQuery("#service_click_" + jQuery(this).attr('data-id')).hasClass('active'))
		{
			jQuery("#total_hours").html(Number(jQuery("#total_hours").html()) + Number(jQuery(this).attr('data-hour')));
			jQuery("#total_minutes").html(Number(jQuery("#total_minutes").html()) + Number(jQuery(this).attr('data-minute')));
			bhour();
			jQuery("#total").html(Number(jQuery("#total").html()) + Number(jQuery(this).attr('data-price')));
			if (jQuery("#discount").prop('checked') == true) 
			{
				jQuery("#totaldisc").html(jQuery("#total").html() * (100 - Number(jQuery("#discount").val()))/100);
				jQuery("#discount_id").html(jQuery("#total").html() * (Number(jQuery("#discount").val()))/100);
			}
			else 
			{
				jQuery("#discount_id").html('0');
				jQuery("#totaldisc").html(jQuery("#total").html());
			}
		}
	});
	jQuery(".service-minus").click(function(){
		if (jQuery("#service_" + jQuery(this).attr('data-id') + "_cnt").val() > 1) 
		{
			jQuery("#service_" + jQuery(this).attr('data-id') + "_cnt").val(Number(jQuery("#service_" + jQuery(this).attr('data-id') + "_cnt").val()) - 1);
			if (jQuery("#service_click_" + jQuery(this).attr('data-id')).hasClass('active'))
			{
				jQuery("#total").html(Number(jQuery("#total").html()) - Number(jQuery(this).attr('data-price')));
				if (jQuery("#discount").prop('checked') == true) 
				{
					jQuery("#totaldisc").html(jQuery("#total").html() * (100 - Number(jQuery("#discount").val()))/100);
					jQuery("#discount_id").html(jQuery("#total").html() * (Number(jQuery("#discount").val()))/100);
				}
				else 
				{
					jQuery("#discount_id").html('0');
					jQuery("#totaldisc").html(jQuery("#total").html());
				}
				rehour();
				jQuery("#total_hours").html(Number(jQuery("#total_hours").html()) - Number(jQuery(this).attr('data-hour')));
				jQuery("#total_minutes").html(Number(jQuery("#total_minutes").html()) - Number(jQuery(this).attr('data-minute')));
				bhour();
			}
		}
	});
	
	jQuery("#order").click(function(){
		jQuery("#zakaz").show();
		jQuery("#modal-back").show();
		jQuery(".service_click").each(function(elem){
			if (jQuery(this).hasClass('active')) jQuery("#add_servs").append('<input type="hidden" name="service[]" value="' + jQuery(this).attr('data-id') + '">');
		});
		jQuery(".tarif a").each(function(elem){
			if (jQuery(this).hasClass('active')) 
			{
				jQuery("#package_id").val(jQuery(this).attr('id').split('tarif_')[1]);
			}
		});
		jQuery("#ord_date").val(jQuery("#date").val());
		jQuery("#ord_time").val(jQuery("#time").val());
	});
	
	jQuery("#zakaz_close").click(function(){
		jQuery("#zakaz").hide();
		jQuery("#modal-back").hide();
	});
	
	jQuery("#tarif_more").click(function(){
		if (jQuery(this).hasClass('active'))
		{
			jQuery("#tarifmoreinfo").hide();
			jQuery(this).removeClass('active');
			jQuery(this).html('Показать подробное описание тарифов');
		}
		else
		{
			jQuery("#tarifmoreinfo").show();
			jQuery(this).addClass('active');
			jQuery(this).html('Скрыть подробное описание тарифов');
		}
	});
})