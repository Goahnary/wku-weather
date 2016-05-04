function equalizeHeight(masterID, slaveIDs){
	// console.log("equalizeHeight");
	//detect resize and set height of slave images based on height of master.
	master = document.getElementById(masterID);

	//change height on resize
	window.onresize = function(){
		console.log("Image Resize to: " + master.height);
		_equalizeHeight(master.height, slaveIDs);
	};

}

function _equalizeHeight(newHeight, slaveIDs){
	for(id in slaveIDs){
		// console.log("resizing " + slaveIDs[id]);
		document.getElementById(slaveIDs[id]).style.height = newHeight + "px";
	}
}