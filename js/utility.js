// JavaScript Document
(function() {
	"use strict";
	var request, url, movieLinks, path, sBuild, liveLinks, filterLinks = document.querySelectorAll("#filterNav a"), srchInput = document.querySelector("#srch"), live = document.querySelector("#livesrch");
	

	function init() {
		url="admin/includes/getMovies.php";
		sBuild='';
		path = "init";
		reqInfo(path);
	}
	

	function reqInfo(path) {
		// Purpose of this function is passed data from the client to the server(https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest).
		if(window.XMLHttpRequest) {
			request = new XMLHttpRequest();

		}else{
			request = new ActiveXObject("Microsoft.XMLHTTP");

		}

		request.open("GET", url, true);
		request.send(); 

		if(path==="liveSearch"){
			request.onreadystatechange = searchItems; 
		}else{
			request.onreadystatechange = addItems;
		}
		
	}

	function addItems() {
		//populate the full ist on the page
		var con = document.querySelector(".movies"), details = document.querySelector(".details");

		if((request.readyState===4) || (request.status===200)) {
			var items = JSON.parse(request.responseText);
			//console.log(items);
	

		if(items.length!==0) {
			if(items.length > 1) {
				con.innerHTML = "";
				sBuild = "";
				
				//sBuild += add row
			for (var i=0;i<items.length; i++) {
				//add classes here for styling
				//add foundation class here
				sBuild += '<div class="row">';
				sBuild += '<div class="small-block-grid-2 medium-block-grid-3 large-block-grid-3 columns">';
				sBuild = '<img src="images/'+items[i].movies_thumb+'" alt="'+items[i].movies_title +'">';
				sBuild += '<h2>'+'<b>'+items[i].movies_title+'</b>'+'</h2>';
				sBuild += '<h2>'+items[i].movies_year+'</h2>';
				sBuild += '<a href="index.php?id='+items[i].movies_id+'">more...</a> <br><br>';
				sBuild += '</div>';
				
				con.innerHTML += sBuild;
			}
			//close row here
			sBuild += '</div>';
			
			movieLinks=document.querySelectorAll(".movies a");
			for (var j=0; j<movieLinks.length; j++) {
				movieLinks[j].addEventListener("click", itemDetails, false);
			
			}
		}else{
			details.innerHTML = "";
			sBuild = '<img src="images/'+items[0].movies_fimg+'" alt="'+items[0].movies_title +'" id="detailimg">';
			sBuild += '<h2>'+items[0].movies_title+'</h2>';
			sBuild += '<p>'+items[0].movies_storyline+'</p>';
			details.innerHTML = sBuild;
		}
			
		}else{
			//error no content
			con.innerHTML = "sorry, there was a server error, please try again later.";
		}
	}
}
	
	
	function searchItems() { // was it successful? 
		// Purpose of this function is write the content passed from PHP into the div located below the input field.
		if((request.readyState===4) || (request.status===200)) {
			sBuild="";
			var srchItems = JSON.parse(request.responseText);

			//wrap this in link to make it clickable
			for(var i=0;i<srchItems.length; i++) {
				sBuild += '<a href="index.php?id='+srchItems[i].movies_id+'">';
				sBuild += '<img src="images/'+srchItems[i].movies_thumb+'">';
				sBuild += '<b>'+srchItems[i].movies_title+'</b>'+' ';
				sBuild += srchItems[i].movies_year+'<br>';
				sBuild += '</a>';
			}
			live.innerHTML = sBuild;    
			
			
 			var liveLinks = live.querySelectorAll("a");
            //console.log(liveLinks);
            for(var j=0; j<liveLinks.length; j++) {
                liveLinks[j].addEventListener("click", itemDetails, false);
			}

		}
	}
	
	function liveSearch() {
		//Purpose of this function is to rewrite the URL to be passed the search query on the PHP side.
		var capture = srchInput.value;
		
		if (capture.length>0){
		url="admin/includes/getMovies.php?srch="+capture;
		path = "liveSearch";
		reqInfo(path);
		}else{
			live.innerHTML = "";	
		}
	}

	function filterItems(evt) {
		evt.preventDefault();
		//console.log("Works");
		var str = evt.target.href;
		var arr = str.split("=");
		str = arr[1];
		if(str) {
			url = "admin/includes/getMovies.php?filter="+str;
		}else{
			url = "admin/includes/getMovies.php";
		}
		path = "filterItems";
		reqInfo(path); 
	}
	
	function itemDetails(evt) {
		//console.log("Item Details");	
		evt.preventDefault();
		console.log(evt.target);
		var str = evt.target.href;
		//console.log(str);
		var arr = str.split("=");
		//console.log(arr[1]);
		url = "admin/includes/getMovies.php?id="+arr[1];
		//console.log(url);
		path = "itemDetails";
		reqInfo(path);
	}
	
	
	// Listeners
	for(var i=0; i<filterLinks.length; i++){
		filterLinks[i].addEventListener("click", filterItems, false);

	}
	window.addEventListener("load", init, false);
	srchInput.addEventListener("keyup", liveSearch, false); 
	
})();