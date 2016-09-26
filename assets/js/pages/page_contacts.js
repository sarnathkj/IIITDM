var ContactPage = function () {

    return {
        
    	//Basic Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				scrollwheel: false,				
				lat: 12.8394963,
				lng: 80.1024709
			  });
			  
			  var marker = map.addMarker({
				lat: 12.8394963,
				lng: 80.1024709,
	            title: 'IIITDM, Kancheepuram'
		       });
			});
        },

        //Panorama Map
        initPanorama: function () {
		    var panorama;
		    $(document).ready(function(){
		      panorama = GMaps.createPanorama({
		        el: '#panorama',
		        lat: 12.8394963,
				lng: 80.1024709
		      });
		    });
		}        

    };
}();