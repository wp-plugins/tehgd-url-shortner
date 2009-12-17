//Teh.gd jQuery Plugin v1
//Author Sam Bennett
(function(jQuery) {
    jQuery.fn.extend({
        tehgd: function(o) {
        	var s = {
        		l: null
        	}
        	var o = jQuery.extend(s, o);
	        url = jQuery(this).val();
	        alert("woo");
			jQuery.getJSON("http://teh.gd/json.php?u=" + url + "&callback=?", function(data){
					jQuery(o.l).val(data.url);
			});
        }
    });
})(jQuery);