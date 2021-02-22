$(document).ready(function()
{
	$('.carousel').carousel({
		interval: 200000
	});
	
	$("#input-dim-1").fileinput({
		uploadUrl: "/file-upload-batch/2",
		allowedFileExtensions: ["jpg", "png", "gif"],
		minImageWidth: 50,
		minImageHeight: 50
	});
	
	Dropzone.autoDiscover = false;
// or disable for specific dropzone:
// Dropzone.options.myDropzone = false;

$(function() {
  // Now that the DOM is fully loaded, create the dropzone, and setup the
  // event listeners
  var myDropzone = new Dropzone("#my-dropzone");
  myDropzone.on("addedfile", function(file) {
    /* Maybe display some more file information on your page */
  });
})
});
