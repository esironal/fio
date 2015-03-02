//Define the main app
var app;

/* Setup the main Application and declare the variables*/
var Application = function(){
	var app_data,
	debug;
}

/* Init the Application, hiding the first frame and get the apartment data */
Application.prototype.init = function(){
	var me = this;
	app = this;
	
	$.get( 'index.php?get_data=1' , function(data){
		me.app_data = data;
		
		me.onReady();
	}, 'json' );
}

/* Function to populate the infobox with data */
Application.prototype.get_data = function( apt_id ){
	var f;
	
	var object_data = app.get_object_data_from_id( apt_id );
}

/* Function to be called when app is ready, this will draw overlays and fade in frame */
Application.prototype.onReady = function(){
	
	app.populate();
	
}

Application.prototype.populate = function(){

	// Global table
	$.each(app.app_data, function(index, cat){
		
		if(index != 'home' && index != '') {
			$.each(cat, function(category, item){
				var html = '<tr>';
				html += '<td><a href="' + item.url + '">';
				html += '<span class="title"><span class="favicon"><img src="' + item.favicon + '" /></span> ' + item.name + '<span class="description">'+item.description+'</span></span>';
				html += '<span class="category">' + item.category + '</span>';
				html += '<span class="url">' + item.url + '</span>';
				html += '</a></td></tr>';

				$('#contenttable').append(html);
			});
		}
		
	});

	$('#contenttable').filterTable({
		label: "",
		inputType: "text",
		placeholder: "filter dat database"
	});

	$('#fio-scene .filter-table input')[0].focus();
}