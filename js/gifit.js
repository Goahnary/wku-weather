/*

Play a slideshow with a set of images

@parameters:
	set of image URLs
	element ID
	change speed (in milliseconds)

*/

function gifit(images, id, speed){

	//This function is anonymized 
	(function() {

		var imgNum = images.length -1;

		window.setInterval(function(){
			
			imgNum > 0 ? imgNum-- : imgNum = images.length - 1;

			_gifit(images, id, imgNum);

		 }, speed);
	})();
}

function _gifit(images, id, num) {
	
	img = document.getElementById(id);

	console.log(images[num]);
	img.src = images[num];
}