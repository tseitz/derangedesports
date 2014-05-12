var caseNum = typeof caseNum !== 'undefined' ? caseNum : 0;
var upHeight = typeof upHeight !== 'undefined' ? upHeight : 773;

function accordion(playerName) {
	var p = document.getElementById("biotext" + playerName);
	var downHeight = 0;
	if (caseNum == playerName) {
		return;
	}
	else {
		heightValues(caseNum, upHeight, playerName);
	}

	function startSlide() {
		var downInterval = window.setInterval(slideDown,10);
		p.style.display="block";
			
		function slideDown() {
			p.style.height=downHeight + 'px';
			downHeight += 20;

			switch(playerName) {
				case '0': 
					if(downHeight >= 773) {
						p.style.height="auto";
						p.style.display="block";
						stopDownAnimate(downInterval);
						upHeight = 773;
						caseNum = 0;
						break;
					}
					else {
						break;
					}
				case '1':
					if(downHeight >= 378) {
						p.style.height="auto";
						p.style.display="block";
						stopDownAnimate(downInterval);
						upHeight = 378;
						caseNum = 1;
						break;
					}
					else {
						break;
					}
				case '2':
					if(downHeight >= 273) {
						p.style.height="auto";
						p.style.display="block";
						stopDownAnimate(downInterval);
						upHeight = 273;
						caseNum = 2;
						break;
					}
					else {
						break;
					}
				case '3':
					if(downHeight >= 126) {
						p.style.height="auto";
						p.style.display="block";
						stopDownAnimate(downInterval);
						upHeight = 126;
						caseNum = 3;
						break;
					}
					else {
						break;
					}
				case '4':
					if(downHeight >= 126) {
						p.style.height="auto";
						p.style.display="block";
						stopDownAnimate(downInterval);
						upHeight = 126;
						caseNum = 4;
						break;
					}
					else {
						break;
					}
			}
		}
	}

	function heightValues(caseNum, upHeight, playerName) {
		previousP = document.getElementById("biotext" + caseNum);
		startSlide();
		var upInterval = window.setInterval(slideUp,10);

		function slideUp() {
			previousP.style.height=upHeight + 'px';
			upHeight -= 20;

			if (upHeight <= 0) {
				previousP.style.height="0px";
				previousP.style.display="none";
				stopUpAnimate(upInterval);
			}
		}
	}

	function stopDownAnimate(interval) {
		clearInterval(interval);
	}

	function stopUpAnimate(interval) {
		clearInterval(interval);
	}
}