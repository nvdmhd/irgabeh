jQuery,jQuery(function(){jQuery(".notice.fusion-is-dismissible button.notice-dismiss").on("click",function(a){var e=jQuery(this),t=e.parent().data(),n="undefined"!==e.parent().attr("id")&&"avada-data-notice"===e.parent().attr("id")?"fusion_dismiss_data_notice":"fusion_dismiss_admin_notice";a.preventDefault(),jQuery.post(ajaxurl,{data:t,action:n,nonce:fusionAdminNoticesNonce.nonce})}),jQuery("#avada-data-notice.notice.fusion-is-dismissible .avada-send-data").on("click",function(a){var e=jQuery(this),t=e.parent().data();a.preventDefault(),e.attr("disabled","disabled"),jQuery.post(ajaxurl,{data:t,action:"fusion_send_site_data",nonce:fusionAdminNoticesNonce.nonce}).done(function(a){jQuery("#avada-data-notice .avada-data-response").fadeIn(),"undefined"!==a.status&&"success"===a.status?(jQuery("#avada-data-notice .data-success-response").fadeIn(),jQuery("#avada-data-notice .data-error-response").hide(),setTimeout(function(){jQuery("#avada-data-notice").hide()},2e3)):(jQuery("#avada-data-notice .data-error-response").fadeIn(),jQuery("#avada-data-notice .data-succuess-response").hide(),e.removeAttr("disabled"))})})});