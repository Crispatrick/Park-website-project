var videoPlayer = document.getElementById('videoPlayer');
var videoSources = [
    'Resources\\Videos\\RAVE.webm',
    'Resources\\Videos\\RAVE_2.webm',
    'Resources\\Videos\\RAVE_3.webm',
    'Resources\\Videos\\RAVE_4.webm'  
];
// console.log("testing");

function shuffleArray(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

shuffleArray(videoSources);
var currentIndex = 0;

videoPlayer.addEventListener('ended', function() {
    if (currentIndex === videoSources.length - 1) {
        shuffleArray(videoSources);
        currentIndex = 0;
    } else {
        currentIndex++;
    }
    
    videoPlayer.src = videoSources[currentIndex];
    videoPlayer.play();
});