function getMouse(e){return[Math.round(e.clientX/window.innerWidth*100),Math.round(e.clientY/window.innerHeight*190)]}document.onmousemove=function(e){const n=getMouse(e);document.querySelector("#myModel").cameraOrbit=`${n[0]}deg`+`${n[1]}deg `+'"110%"',document.getElementById("coordinates").innerHTML="x"+100*n[0]+"y"+100*n[1]},window.addEventListener("devicemotion",function(e){e.acceleration.x,e.acceleration.y,e.acceleration.z;var n=e.rotationRate.alpha,t=e.rotationRate.beta;e.rotationRate.gamma,e.interval;document.querySelector("#myModel").cameraOrbit=`${n}deg`+`${t}deg `+'"110%"'}),window.onload=function(){var e=document.getElementById("announcement-overlay");setTimeout(function(){e.style.right="30px"},3e3)};var closer=document.getElementById("announcement-closer"),modal=document.getElementById("announcement-overlay");closer.addEventListener("click",function(){modal.style.right="-100%"});