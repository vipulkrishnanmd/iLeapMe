// finding the area containnig the url
var list= document.getElementsByClassName("iUh30");

// adding the link for each results
for (var i = 0; i < list.length; i++) {
    var ele = list[i];
	if (!ele.innerHTML.includes("http")){
		ele.innerHTML = "https://" + ele.innerHTML; 
	}
	ele.innerHTML = ele.innerHTML +
		' ' +
		'<a href="https://ileap.me/extendedcheck?url=' +
		ele.innerHTML + '" target="_blank"><img src="'+
		chrome.runtime.getURL('logo.png') +
		'" width="15" height="15"/> </a>';
}

