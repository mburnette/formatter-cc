jQuery.fn.formattercc = function(options){

	var defaults = {

		cctypefield: '#cctype'

	};

	var config = jQuery.extend(defaults, options);


	var ccType,
		cctypeselect = jQuery(config.cctypefield),
				
		stdPtrn = '{{9999}} {{9999}} {{9999}} {{9999}}',
		amexPtrn = '{{9999}} {{999999}} {{99999}}';

	this.focus(function(){
		
		var elcc = jQuery(this);
		ccType = cctypeselect.find('option:selected').text();
		
		elcc.formatter({ 'pattern': stdPtrn });

		if(ccType.toLowerCase().indexOf('ex') > -1){
			elcc.resetPattern( amexPtrn );
		} else {
			elcc.resetPattern( stdPtrn );
		}
	});


}


// ccv
jQuery.fn.formatterccv = function(options){

	var defaults = {

		cctypefield: '#cctype'

	};

	var config = jQuery.extend(defaults, options);


	var ccType,
		cctypeselect = jQuery(config.cctypefield),
				
		stdCCV = '{{999}}',
		amexCCV = '{{9999}}';

	this.focus(function(){
		
		var elccv = jQuery(this);
		ccType = cctypeselect.find('option:selected').text();
		
		elccv.formatter({ 'pattern': stdCCV });

		if(ccType.toLowerCase().indexOf('ex') > -1){
			elccv.resetPattern( amexCCV );
		} else {
			elccv.resetPattern( stdCCV );
		}
	});


}