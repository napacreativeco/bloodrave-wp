function getMouse(e){return[Math.round(e.clientX/window.innerWidth*100),Math.round(e.clientY/window.innerHeight*190)]}const modelViewer=document.querySelector("#myModel");function deviceMotionPermission(){"function"==typeof DeviceMotionEvent.requestPermission?DeviceMotionEvent.requestPermission().then(e=>{"granted"===e?window.addEventListener("devicemotion",handleOrientation):console.error("Request to access the orientation was rejected")}).catch(console.error):window.addEventListener("devicemotion",handleOrientation)}function handleOrientation(e){const n=e.accelerationIncludingGravity.x,t=e.accelerationIncludingGravity.y,o=e.accelerationIncludingGravity.z;document.getElementById("reader").innerHTML=n+", "+t+", "+o}document.onmousemove=function(e){const n=getMouse(e);modelViewer.cameraOrbit=`${n[0]}deg`+`${n[1]}deg `+'"110%"',document.getElementById("coordinates").innerHTML="x"+100*n[0]+"y"+100*n[1]},window.addEventListener("load",deviceMotionPermission()),window.addEventListener("devicemotion",handleMotionEvent,!0),window.onload=function(){var e=document.getElementById("announcement-overlay");setTimeout(function(){e.style.right="30px"},3e3)};var closer=document.getElementById("announcement-closer"),modal=document.getElementById("announcement-overlay");closer.addEventListener("click",function(){modal.style.right="-100%"});