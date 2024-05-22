/*
*
* Mouse Movement
*
*/
function getMouse(e) {
    return [
        Math.round(e.clientX / window.innerWidth * 100),
        Math.round(e.clientY / window.innerHeight * 190)
    ]
}

/*
*
* Logo + Coordinates
*
*/
document.onmousemove = function(e) {
    const mouse = getMouse(e);
    const modelViewer = document.querySelector('#myModel');
    modelViewer.cameraOrbit = `${mouse[0]}deg` + `${mouse[1]}deg ` + `"110%"`;

    var coor = document.getElementById('coordinates');
    coor.innerHTML = 'x'+mouse[0]*100 + 'y'+mouse[1]*100;
}


window.addEventListener('devicemotion', function(event) {
    var x = event.acceleration.x;
    var y = event.acceleration.y;
    var z = event.acceleration.z;
                    
    var ralpha = event.rotationRate.alpha;
    var rbeta = event.rotationRate.beta;
    var rgamma = event.rotationRate.gamma;
                    
    var interval = event.interval;

    const modelViewer = document.querySelector('#myModel');
    modelViewer.cameraOrbit = `${ralpha}deg` + `${rbeta}deg ` + `"110%"`;
});


/*
*
* Announcements
*
*/
window.onload = function() {
    var announcementModal = document.getElementById('announcement-overlay');

    setTimeout(function() {
        announcementModal.style.right = '30px';
    }, 3000);
}

var closer = document.getElementById('announcement-closer');
var modal = document.getElementById('announcement-overlay');
closer.addEventListener('click', function() {
    modal.style.right = "-100%";
});



