// JavaScript Document

$(document).ready(function(){
	
		var slides = $('#slides').children('img');
		slides.hide();
		
		var array = [];
		slides.each(function() {
			array.push($(this));
		});
		
		
		for(i=0;i<array.length;i++) {
			$('#next').before('<img src="../assets/images/circles/inactive.png" id="circ_' + i + '" />');
		};
				
		var i=0
		array[i].show()
		$('#circ_0').attr('src','../assets/images/circles/active.png');
				
		$('#next, #slides img').click(function(e) {
			array[i].hide();
			$('#circ_' + i).attr('src','../assets/images/circles/inactive.png');
			if (i+1<array.length) {
				i++;
			}
			else if(i+1==array.length) {
				i=0;
			};
			array[i].show();
			$('#circ_' + i).attr('src','../assets/images/circles/active.png');
			e.preventDefault()
		});
		
		$('#prev').click(function(e) {
			array[i].hide();
			$('#circ_' + i).attr('src','../assets/images/circles/inactive.png');
			if(i==0) {
				i=array.length-1;
			}
			else {
				i--;
			};
			array[i].show();
			$('#circ_' + i).attr('src','../assets/images/circles/active.png');
			e.preventDefault()
		});
		
});