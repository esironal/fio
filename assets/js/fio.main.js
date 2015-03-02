$(document).ready(function(){
	
	$('a').on('click', function(e){
		e.preventDefault();
		var parentFlex = $(this).parents('.flex');
		var currentAppendedFlex = $('.appended');
		if(currentAppendedFlex) {
			currentAppendedFlex.remove();
		}
		
		$.ajax({
			async: true,
			url: $(this).attr('href'),
			success: function(result) {
				parentFlex.before(result);
			},
			complete: function(jqXHR, textStatus) {
				//
			}
		});
					
	});
	
});

Date.prototype.getWeek = function() { 
	var determinedate = new Date(); 
	determinedate.setFullYear(this.getFullYear(), this.getMonth(), this.getDate()); 
	var D = determinedate.getDay(); 
	if(D == 0) D = 7; 
	determinedate.setDate(determinedate.getDate() + (4 - D)); 
	var YN = determinedate.getFullYear(); 
	var ZBDoCY = Math.floor((determinedate.getTime() - new Date(YN, 0, 1, -6)) / 86400000); 
	var WN = 1 + Math.floor(ZBDoCY / 7); 
	return WN;
}

// Converts YYYY-MM-DD string to a date object
function parseDate(str) {
	var ymd = str.split('-');
	return new Date(ymd[0], ymd[1]-1, ymd[2]);
}