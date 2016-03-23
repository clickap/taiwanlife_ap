M.mod_videofile = M.mod_videofile || {};


M.mod_videofile.videofile = {
    
  init: function (videoId, swfPath) {

    //videojs('videofile-' + videoId).addThis({
    //    reddit: false,
    //    delecious: false,
    //    website_url: "http://www.google.com"
    //});
      
  },
  enableResize: function (videoId, swfPath, prefWidth, prefHeight, limitDimensions) {

    //var myPlayer = videojs('videofile-' + videoId);
    var myPlayer = videojs('videofile-' + videoId, {"nativeControlsForTouch": false, "customControlsOnMobile": true});
    
    var playerElement = document.getElementById(myPlayer.id());
    var playerParent = playerElement.parentElement;
    var aspectRatio = prefHeight / prefWidth;

    if (limitDimensions) {
      // The max and min limit is overriden using styles.css in full
      // screen mode.
      playerElement.style.maxWidth = prefWidth + 'px';
      playerElement.style.maxHeight = prefHeight + 'px';
    }

    function resizeVideoJS() {
      // Get the parent element's actual width.
      var parentWidth = playerParent.offsetWidth;

      // Set width to fill parent element, set height proportionally.
      myPlayer.width(parentWidth).height(parentWidth * aspectRatio);
    }

    resizeVideoJS();
    window.onresize = resizeVideoJS;
  }
  
};
