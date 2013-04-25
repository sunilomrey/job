(function () {
	var input = document.getElementById("images"), 
		formdata = false;

	function showUploadedItem (source) {
  		var list1 = document.getElementById("image-list1"),
	  		
	  		img1 = document.createElement("img");
  		img1.src = source;
  		
		list1.appendChild(img1);
		var list2 = document.getElementById("image-list2"),
	  		img2 = document.createElement("img");
  		img2.src = source;
  		
		list2.appendChild(img2);
	}   
    
	if (window.FormData) {
  		formdata = new FormData();
  		document.getElementById("btn").style.display = "none";
	}
	
 	input.addEventListener("change", function (evt) {
 		document.getElementById("response").innerHTML = "Uploading . . ."
 		var i = 0, len = this.files.length, img, reader, file;
	
		for ( ; i < len; i++ ) {
			file = this.files[i];
	
			if (!!file.type.match(/image.*/)) {
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) { 
						showUploadedItem(e.target.result, file.fileName);
					};
					reader.readAsDataURL(file);
				}
				if (formdata) {
					formdata.append("images[]", file);
				}
			}	
		}
	
		if (formdata) {
			$.ajax({
				url: "upload.php",
				type: "POST",
				data: formdata,
				processData: false,
				contentType: false,
				success: function (res) {
					document.getElementById("response").innerHTML = res; 
					$("#main").fadeOut("fast");
					monogram_Data1 = document.getElementById("response").innerHTML; 
				}
			});
		}
	}, false);
	
}());
