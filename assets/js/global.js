$( document ).ready(function() {
	// grab an element
	var myElement = document.querySelector("#headroomHeader");
	// construct an instance of Headroom, passing the element
	var headroom  = new Headroom(myElement, {
	  "tolerance": 5,
	  "offset": 210,
	  "classes": {
		"initial": "animated",
		"pinned": "slideDown",
		"unpinned": "slideUp"
	  }
	});
	// initialise
	headroom.init();
	
	//scroll to top bits
	$("a[href='#top']").click(function() {
	  $("html, body").animate({ scrollTop: 0 }, "slow");
	  return false;
	});
	
	
	//Katelyn's hide/show code
	$( ".codeToggle" ).click(function() {
		var anchorId = $(this).attr('id');
		$("#"+anchorId).toggleClass("hideAnchor");
		//alert(anchorId);
		var elementId = anchorId.split("-")[0];
		//alert(elementId);
		$("#"+elementId+"-container").toggleClass("codeHidden");
	});
	
});