function mbh__resizeVideo() {
	var oVideo = document.getElementById("vimeo"),
		oParent = oVideo.parentNode,
		resizeW = oParent.offsetWidth,
		resizeH = Math.ceil((resizeW/16) * 9);

	oVideo.setAttribute("width", resizeW);
	oVideo.setAttribute("height", resizeH);
}

window.onresize = mbh__resizeVideo;
window.onload = mbh__resizeVideo;