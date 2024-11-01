jQuery(document).ready(function(){
    
    jQuery(document).snowfall({
	    flakeCount 	: parseInt( lis_options.flakeCount ),
	    minSize 	: parseInt( lis_options.minSize ),
	    maxSize 	: parseInt( lis_options.maxSize ), 
	    minSpeed 	: parseInt( lis_options.minSpeed ),
	    maxSpeed 	: parseInt( lis_options.maxSpeed ),
	    shadow 		: lis_options.shadow, 
	    round 		: true
	});
    
});
