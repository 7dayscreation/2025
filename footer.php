<canvas id="js-webgl"></canvas>
    <!-- Cursor Follower -->
    <div class="arts-cursor" id="js-arts-cursor">
      <div class="arts-cursor__wrapper">
        <!-- circles-->
        <div class="arts-cursor__follower js-arts-cursor__follower">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <circle class="arts-cursor__stroke-inner js-arts-cursor__stroke-inner" cx="25" cy="25" r="24" style="opacity: 0.6;"></circle>
            <circle class="arts-cursor__stroke-outer js-arts-cursor__stroke-outer" cx="25" cy="25" r="24" style="stroke-dashoffset: 252.327; stroke-dasharray: 0px, 999999px;"></circle>
          </svg>
        </div>
        <!-- arrows-->
        <div class="arts-cursor__arrows">
          <div class="arts-cursor__arrow arts-cursor__arrow_up material-icons keyboard_arrow_up js-arts-cursor__arrow-up"></div>
          <div class="arts-cursor__arrow arts-cursor__arrow_right material-icons keyboard_arrow_right js-arts-cursor__arrow-right"></div>
          <div class="arts-cursor__arrow arts-cursor__arrow_down material-icons keyboard_arrow_down js-arts-cursor__arrow-down"></div>
          <div class="arts-cursor__arrow arts-cursor__arrow_left material-icons keyboard_arrow_left js-arts-cursor__arrow-left"></div>
        </div>
        <!-- label holder-->
        <div class="arts-cursor__wrapper-label">
          <div class="arts-cursor__label js-arts-cursor__label"></div>
        </div>
        <!-- icon holder-->
        <div class="arts-cursor__wrapper-icon">
          <div class="arts-cursor__icon js-arts-cursor__icon"></div>
        </div>
      </div>
    </div>
    <!-- - Cursor Follower -->
    <!-- Mobile Loading Spinner -->
    <svg class="spinner d-lg-none" id="js-spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
      <circle class="spinner__path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    </svg>
    <!-- - Mobile Loading Spinner -->
    <!-- Curtain AJAX Transition -->
    <div class="transition-curtain" id="js-page-transition-curtain"></div>
    <!-- - Curtain AJAX Transition -->
    <!-- PhotoSwipe Lightbox Container -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true" data-arts-theme-text="light">
      <!-- background -->
      <div class="pswp__bg"></div>
      <!-- - background -->
      <!-- slider wrapper -->
      <div class="pswp__scroll-wrap">
        <!-- slides holder (don't modify)-->
        <div class="pswp__container">
          <div class="pswp__item">
            <div class="pswp__img pswp__img--placeholder"></div>
          </div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <!-- - slides holder (don't modify)-->
        <!-- UI -->
        <div class="pswp__ui pswp__ui--hidden">
          <!-- top bar -->
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.4" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.4" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- - top bar -->
          <!-- left arrow -->
          <div class="pswp__button pswp__button--arrow--left material-icons" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.7" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true">keyboard_arrow_left</div>
          <!-- - left arrow -->
          <!-- right arrow -->
          <div class="pswp__button pswp__button--arrow--right material-icons" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.7" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true">keyboard_arrow_right</div>
          <!-- - right arrow -->
          <!-- slide caption holder (don't modify) -->
          <div class="pswp__caption">
            <div class="pswp__caption__center text-center"></div>
          </div>
          <!-- - slide caption holder (don't modify) -->
        </div>
        <!-- - UI -->
      </div>
      <!-- slider wrapper -->
    </div>
    <!-- - PhotoSwipe Lightbox Container -->
    <!-- VENDOR SCRIPTS -->
    <script src="js/vendor.js"></script>
    <!-- - VENDOR SCRIPTS -->
    <!-- COMPONENTS -->
    <script src="js/components.js"></script>
    <!-- - COMPONENTS -->
	

<script type="text/javascript">
function disableSelection(e)
{
    if(typeof e.onselectstart!="undefined")
        e.onselectstart=function(){return false};
    else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";
    else e.onmousedown=function(){return false};
    e.style.cursor="default"
}
window.onload=function(){disableSelection(document.body)}
</script>
<script type="text/javascript">
document.oncontextmenu=function(e){
    var t=e||window.event;
    var n=t.target||t.srcElement;
    if(n.nodeName!="A")return false
};
document.ondragstart=function(){return false};
</script>
<style type="text/css">
* : (input, textarea) {
  -webkit-touch-callout:none;
  -webkit-user-select:none;
}
</style>
<style type="text/css">
img {
  -webkit-touch-callout:none;
  -webkit-user-select:none;
}
</style>
<script type="text/javascript">
window.addEventListener("keydown",function(e){
    if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==70||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86))      {e.preventDefault()}
});
document.keypress=function(e){
    if(e.ctrlKey&&(e.which==65||e.which==66||e.which==70||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}
    return false;
}
</script>
<script type="text/javascript">
document.onkeydown=function(e){
    e=e||window.event;
    if(e.keyCode==123||e.keyCode==18){return false}
}
</script>

	<script>
        var schedule = [
            { datetime: "2024-06-22T13:10:00", url: "img/yoga-7days.jpg" },
			{ datetime: "2024-07-07T10:10:00", url: "img/rathyatra.jpg" },
			{ datetime: "2024-07-21T10:10:00", url: "img/guru.jpg" },
            // Add more scheduled media items as needed
        ];

        var randomMedia = [
            { url: "img/ganpati.jpg" },
            { url: "img/2.jpg" },
			{ url: "img/3.jpg" },
            // Add more random media items as needed
        ];

        function getRandomItem(array) {
            var randomIndex = Math.floor(Math.random() * array.length);
            return array[randomIndex];
        }

        function displayMedia(mediaItem) {
            document.getElementById("randomMedia").src = mediaItem.url;
            document.getElementById("randomMedia").style.display = "block";

            setTimeout(function() {
                document.getElementById("randomMedia").style.display = "none";
                displayScheduledMedia(); // Display the next scheduled item
            }, 24 * 60 * 60 * 1000); // 24 hours
        }

        function displayScheduledMedia() {
            var currentDateTime = new Date().getTime();
            var scheduledItems = schedule.filter(item => new Date(item.datetime).getTime() <= currentDateTime && currentDateTime <= new Date(item.datetime).getTime() + (2 * 60 * 1000));

            if (scheduledItems.length > 0) {
                var randomItem = scheduledItems[0]; // Select the first scheduled item
                displayMedia(randomItem);
            } else {
                var randomItem = getRandomItem(randomMedia); // Select a random item
                displayMedia(randomItem);
            }
        }

        window.onload = function() {
            displayScheduledMedia();
        };
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var videoElements = document.querySelectorAll('.swiper-slide[data-video-path]');
    videoElements.forEach(function(videoElement) {
        var videoPath = videoElement.getAttribute('data-video-path');
        var video = videoElement.querySelector('video');
        video.src = videoPath;
        video.autoplay = true; // Add autoplay
        video.load();
    });
});
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
<script>
    // Fetch the initial like count from the server
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('likeCount').innerText = this.responseText;
        }
    };
    xhr.open("GET", "getLikes.php", true);
    xhr.send();
</script>