function getMouse(e){return[Math.round(e.clientX/window.innerWidth*100),Math.round(e.clientY/window.innerHeight*190)]}const modelViewer=document.querySelector("#myModel"),modelViewerMobile=document.querySelector("#myModelMobile");function handleOrientation(e){const n=10*e.accelerationIncludingGravity.x,t=e.accelerationIncludingGravity.y,o=10*e.accelerationIncludingGravity.z;document.getElementById("permission-button").style.display="none",document.getElementById("reader").innerHTML=Math.trunc(n)+", "+Math.trunc(t)+", "+Math.trunc(o),modelViewerMobile.cameraOrbit=`${n}deg`+`${o+135}deg`+`"${50*t}%"`}function deviceMotionPermission(){"function"==typeof DeviceMotionEvent.requestPermission?DeviceMotionEvent.requestPermission().then(e=>{"granted"===e?window.addEventListener("devicemotion",handleOrientation):console.error("Request to access the orientation was rejected")}).catch(console.error):window.addEventListener("devicemotion",handleOrientation)}document.onmousemove=function(e){const n=getMouse(e);modelViewer.cameraOrbit=`${n[0]}deg`+`${n[1]}deg `+'"110%"',document.getElementById("coordinates").innerHTML="x"+100*n[0]+"y"+100*n[1]},window.onload=function(){var e=document.getElementById("announcement-overlay");setTimeout(function(){e.style.right="30px"},3e3)};var closer=document.getElementById("announcement-closer"),modal=document.getElementById("announcement-overlay");closer.addEventListener("click",function(){modal.style.right="-100%"});