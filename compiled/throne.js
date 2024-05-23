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
const modelViewer = document.querySelector('#myModel');
const modelViewerMobile = document.querySelector('#myModelMobile');

/* Mouse Movement */
document.onmousemove = function(e) {
    const mouse = getMouse(e);

    modelViewer.cameraOrbit = `${mouse[0]}deg` + `${mouse[1]}deg ` + `"110%"`;

    var coor = document.getElementById('coordinates');
    coor.innerHTML = 'x'+mouse[0]*100 + ', y'+mouse[1]*100;
}

/* Handle Motion */
// function handleOrientation(event) {
//     const x = event.accelerationIncludingGravity.x * 10;
//     const y = event.accelerationIncludingGravity.y;
//     const z = event.accelerationIncludingGravity.z * 10;

//     var button = document.getElementById("permission-button");
//     var modal = document.getElementById("motion-modal");
//     modal.style.display = "none";
    
//     var reader = document.getElementById("reader");

//     reader.innerHTML = Math.trunc(x) + ", " + Math.trunc(y) + ", " + Math.trunc(z);

//     modelViewerMobile.cameraOrbit = `${x}deg` + `${z + 135}deg` + `"${y * 50}%"`;
// }

/* Get Permission */
// function deviceMotionPermission() {
//     if (typeof DeviceMotionEvent.requestPermission === 'function') {
//       // Handle iOS 13+ devices.
//       DeviceMotionEvent.requestPermission()
//         .then((state) => {
//           if (state === 'granted') {
//             window.addEventListener('devicemotion', handleOrientation);
//           } else {
//             console.error('Request to access the orientation was rejected');
//           }
//         })
//         .catch(console.error);
//     } else {
//       // Handle regular non iOS 13+ devices.
//       window.addEventListener('devicemotion', handleOrientation);
//     }
// }

/* Close Motion Modal */
// var motionModal = document.getElementById("motion-modal");
// var closeMotionModal = document.getElementById("close-motion-modal");

// closeMotionModal.addEventListener("click", function() {
//     motionModal.style.display = "none";
// });

  


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



