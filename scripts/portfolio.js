// JavaScript Document

$(document).ready(function(){
	
	var sites = $('#sites').children('div');
	sites.hide();
	var sitesarray = [];
	sites.each(function(){
		sitesarray.push($(this));
	});
	
	for(i=0;i<sitesarray.length;i++) {
		if(i==0||i%3==0) {sitesarray[i].addClass('port_col_1');}
		else if (i==1||i%3==1) {sitesarray[i].addClass('port_col_2');}
		else {sitesarray[i].addClass('port_col_3');}
		var delay = i * 250;
		sitesarray[i].delay(delay).fadeIn();
	};
		
});