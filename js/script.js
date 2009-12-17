jQuery(function() {
	jQuery('#submit-tehgd').click(function() {
		tehgd(jQuery('#long-tehgd').val(),'#short-tehgd');
	});
	jQuery('#long-tehgd').blur(function() {
		jquery(this).val('');
	});
	
	jQuery('#short-tehgd').click(function() {
		this.select();
	});
	function tehgd(link,place) {
		jQuery.getJSON("http://teh.gd/json.php?u=" + link + "&callback=?", function(data){
				jQuery(place).text(data.url);
		});
	}
});