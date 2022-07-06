// JavaScript Document

jQuery(document).ready(function(e) {
    $("#receipt").click(function(){
		if($(this).is(':checked')){
			$("#receipt_attachement").removeClass("hide");
		}
		else {
			$("#receipt_attachement").addClass("hide");
		}
	});
});