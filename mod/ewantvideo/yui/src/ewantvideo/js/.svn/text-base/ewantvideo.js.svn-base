M.mod_ewantvideo = M.mod_ewantvideo || {};

M.mod_ewantvideo.videofile = {

  initm3u8: function (videoId, prefWidth, prefHeight, $mediaurl) {

    videojs('videofile-' + videoId, {width: prefWidth, height: prefHeight, techOrder: ['hlsJs', 'hls', 'flash', 'html5']}, function() {
        
        player = this;
        // initilizing volume persistance
        player.persistvolume({namespace: 'videojs-volume'});
        // initializing Google IMA SDK
        player.controls(true);
        player.src({
            type: 'application/x-mpegURL',
            //src: 'http://playertest.longtailvideo.com/adaptive/bbbfull/bbbfull.m3u8'
            src: $mediaurl
        });
        //player.on('loadedmetadata', function() {
        //    //player.ima.requestAds(); // Play ads when loaded
        //    Y.log('loadedmetadata');
        //    player.play();
        //})
    });
  },
  initResize: function (videoId, prefWidth, prefHeight, limitDimensions) {
    var myPlayer = videojs('videofile-' + videoId);
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
  },
  enableTrackView: function (videoId) {

    var myPlayer = videojs('videofile-' + videoId);
    myPlayer.ready(function(){
        myPlayer.disableProgress({
            autoDisable: true
        });
        
    });
    
    //window.addEventListener('blur', function() {
    //  //document.title = 'not focused';
    //  myPlayer.pause();
    //});
    
    myPlayer.videoId = videoId;
    
    myPlayer.on('loadedmetadata', function(){
        var viewdutime = myPlayer.duration();
        if (M.cfg.developerdebug) {
            console.log('id : '+ videoId + ', duration-time : ' + viewdutime);
        }
        
        Y.use("io-base", function(Y) {
            Y.io('init.php', {
                'method' : 'GET',
                'data' : {
                    'sesskey' : M.cfg.sesskey,
                    'id' : videoId,
                    'duration' : viewdutime
                }
            });
        });
    });
    
    myPlayer.on('timeupdate', function(){
        var videoId = this.videoId;
        /*if(!M.mod_moocvideo.moocvideo.isVisible(this.videoId)){
            this.pause();
        }/**/
        
        var viewtime = this.currentTime();
        if (M.cfg.developerdebug) {
            console.log('id : '+ this.videoId + ', time : ' + viewtime);
        }
        if(viewtime > 1){
        
            Y.use("io-base", function(Y) {
                Y.io('tview.php', {
                    'method' : 'GET',
                    'data' : {
                        'sesskey' : M.cfg.sesskey,
                        'id' : videoId,
                        'viewtime' : viewtime
                    }
                });
            });
        }
    });
  },
  addTracks: function (videoId, tracks) {

    var myPlayer = videojs('videofile-' + videoId);
    var textTracks = Array();
    for (idx in tracks) {
        var track = tracks[idx];
        var tObj = {
            kind: track['kind'], //kind: 'subtitles', 
            src: track['src'],
            srclang : track['srclang'],
            label: track['label']
        };
        textTracks.push(tObj);
    }
    myPlayer.ready(function(){
        for (idx in textTracks) {
            var textTrack = textTracks[idx];
            myPlayer.addRemoteTextTrack(textTrack);
        }
    });
  }
};
