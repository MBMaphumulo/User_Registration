(function(){
	var video = document.getElementById('video'),
	    canvas = document.getElementById('canvas'),
	    context  = canvas.getContext('2d'),
		vendorUrl = window.URL || window.webkitURL;

	navigator.getMedia = navigator.getUserMedia || 
						 navigator.webkitGetUserMedia ||
						 navigator.mozGetUserMedia || 
						 navigator.msGetUSerMedia;

	navigator.getMedia({
			video : true,
			audio : false
	}, function(stream){
		video.src = vendorUrl.createObjectURL(stream);
		video.play();
	}, function(error){
		//
	});


	document.getElementById('capture').addEventListener('click',function(){
		context.drawImage(video,0,0,400,300);
		document.getElementById('img').src = canvas.toDataURL('image/jpeg');	
	},false);





})();

