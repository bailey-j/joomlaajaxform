jQuery(function() {
	document.formvalidator.setHandler('detail', 
		function (value) {
			regex=/^[^0-9]+$/;
			return regex.text(value);
		});
});