jQuery(function() {
	jQuery('#submit-tehgd').click(function() {
		tehgd(jQuery('#short-tehgd').val(),'#shorten-tehgd');
	});
	
	function tehgd(link,place) {
		jQuery.getJSON("http://teh.gd/json.php?u=" + link + "&callback=?", function(data){
				jQuery(place).val(data.url);
		});
	}
});