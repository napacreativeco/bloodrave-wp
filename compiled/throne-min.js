function getMouse(e){return[Math.round(e.clientX/window.innerWidth*100),Math.round(e.clientY/window.innerHeight*190)]}const modelViewer=document.querySelector("#myModel"),modelViewerMobile=document.querySelector("#myModelMobile");document.onmousemove=function(e){const n=getMouse(e);modelViewer.cameraOrbit=`${n[0]}deg`+`${n[1]}deg `+'"110%"',document.getElementById("coordinates").innerHTML="x"+100*n[0]+", y"+100*n[1]},window.onload=function(){var e=document.getElementById("announcement-overlay");setTimeout(function(){e.style.right="30px"},3e3)};var closer=document.getElementById("announcement-closer"),modal=document.getElementById("announcement-overlay");closer.addEventListener("click",function(){modal.style.right="-100%"});