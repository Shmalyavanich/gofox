	function requestcall(empty_phone, incorrect_phone, error_sending, successful_sending, disable_btn, module_id) {
		event.preventDefault();
		var form = jQuery(this); 
		var error = false; 
		var phone = jQuery("#phone-"+module_id).val();
		var errortext = '';
		if ( /[a-zа-яё]+/i.test(phone) ) {
			error = true; 
			UIkit.modal.alert('<div class="uk-text-danger">'+incorrect_phone+'</div>');
			/*jQuery("#messages-"+module_id).text('');
			jQuery("#messages-"+module_id).append(incorrect_phone);*/
		}
		if (phone == '') { 
			error = true; 
			UIkit.modal.alert('<div class="uk-text-danger">'+empty_phone+'</div>');
			/*jQuery("#messages-"+module_id).text('');
			jQuery("#messages-"+module_id).append(empty_phone);*/
		}
		if (!error) { 
			var data = jQuery("#requestform-"+module_id).serialize();
			jQuery.ajax({ 
				type: 'POST', 
			    url: '/modules/mod_requestcall/send.php', 
			    data: data, 
		        beforeSend: function() { 
		            jQuery('#sendform-'+module_id).attr('disabled', 'disabled'); 
		        },
				success: function(data){ 
		       		if (data != 'success') { 
						jQuery('form')[0].reset();
						UIkit.modal.alert('<div class="uk-text-danger">'+error_sending+'</div>');
					/*	jQuery("#messages-"+module_id).text('');
		       			jQuery("#messages-"+module_id).append('<div class="uk-alert" data-uk-alert><a href="" class="uk-alert-close uk-close"></a><p>'+error_sending+'</div>');*/
		       		} else { 
						jQuery('form')[0].reset();
						UIkit.modal.alert('<div class="uk-text-success">'+successful_sending+'</div>');
					/*	jQuery("#messages-"+module_id).text('');
						jQuery("#messages-"+module_id).append('<div class="uk-alert" data-uk-alert><a href="" class="uk-alert-close uk-close"></a><p>'+successful_sending+'</p></div>');*/
		       		}
		        },
		        error:function(a,b){
					jQuery('form')[0].reset(); 
					UIkit.modal.alert('<div class="uk-text-danger">'+error_sending+'</div>');
					/*jQuery("#messages-"+module_id).text('');
					jQuery("#messages-"+module_id).append('<div class="uk-alert" data-uk-alert><a href="" class="uk-alert-close uk-close"></a><p>'+error_sending+'</p></div>');*/
				},
				complete:function(){
					if (disable_btn == '0'){
						jQuery('#sendform-'+module_id).prop('disabled', false); 
					}
				}
				
			});
		}
		return false; 
	};	
