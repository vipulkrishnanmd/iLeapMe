



function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}


chrome.storage.sync.get(["secret"], function(result) 
	{
		
		var hostname = "";
		var url = window.location.href;
		if (url.indexOf("//") > -1) {
			hostname = url.split('/')[2];
		}
		else {
			hostname = url.split('/')[0];
		}
		
		console.log(hostname);
		
		if ((hostname != 'ileap.me') && (hostname != 'localhost:8000')){

			var wrapper= document.createElement('div');
      wrapper.innerHTML= '<div id="ileaphotext"><div id="ileaphotextheader">Click here to move</div><br><p><button class="ileapbutton" onclick="window.location.href = \'https://ileap.me/chat?code=' +
        result.secret +
        '&url=' +
        window.location.href +
        '\'">Hotline</button></p><p><button class="ileapbutton" onclick="window.location.href = \'https://ileap.me/extendedcheck?url=' +
        window.location.href +
        '\'">Check Now</button></p></div>';
			
			document.body.appendChild(wrapper);   
			
			dragElement(document.getElementById("ileaphotext"));
		}
	});
