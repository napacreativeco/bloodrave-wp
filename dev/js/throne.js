/*
*
* Mouse Movement
*
*/
function getMouse(e) {
    return [
        Math.round(e.clientX / window.innerWidth * 70),
        Math.round(e.clientY / window.innerHeight * 60)
    ]
}

/*
*
* Logo + Coordinates
*
*/
const modelViewer = document.querySelector('#myModel');
const modelMobileViewer = document.querySelector('#myMobileModel');

/* Mouse Movement */
document.onmousemove = function(e) {
    const mouse = getMouse(e);

    var mouseX = mouse[0];
    var mouseY = mouse[1];

    // Model
    modelViewer.cameraOrbit = `${-1290 + mouseX}deg` + `${120 - mouseY}deg ` + `"700m"`;

    // Mobile Model
    modelMobileViewer.cameraOrbit = `${-1290 + mouseX}deg` + `${120 - mouseY}deg ` + `"700m"`;

    // Text
    var coor = document.getElementById('coordinates');
    coor.innerHTML = 'x:/'+mouse[0]*32 + ', y:/'+mouse[1]*32;
}

var effectComposer = modelViewer.querySelector('effect-composer');
var mobileComposer = modelMobileViewer.querySelector('effect-composer');
var glitch = '<glitch-effect strength="0.1" mode="constant"></glitch-effect>';
var bloom = '<bloom-effect></bloom-effect>';

document.onmousedown = function() {
    effectComposer.innerHTML += glitch;

    setTimeout(function() {
        effectComposer.innerHTML = bloom;
    }, 300);

    mobileComposer.innerHTML += glitch;

    setTimeout(function() {
        mobileComposer.innerHTML = bloom;
    }, 300);
}

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



