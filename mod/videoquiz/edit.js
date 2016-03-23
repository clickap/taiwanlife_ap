    function showhide(){
      //var  video = document.querySelector('video'),  player = videojs(video);
          //var plugin=mplayer.rangeslider.options;
          //if(plugin.hidden)
          //    mplayer.showSlider();
          //else
          //    mplayer.hideSlider();
      player.play();
      player.pause();
      
      }
    function lockunlock(){
      if(player.quiz.editmode=='off'){
        player.quiz.editOn();
      }
      else{
        player.quiz.editOff();
      }
    }
    function tipswitch(){
      if(player.quiz.tipmode=='off'){
        player.quiz.tipOn();
      }
      else{
        player.quiz.tipOff();
      }
    }

    function clear_question(){
      player.quiz.clearCuepoint();
    }
  
    function savequiz(){
      Y.use('io-base', 'io-form', 'json', 'querystring-stringify-simple', function (Y) {
        var jsonCreateUser = {
                  "user_id": "01234",
                  "user_name": "TestUser",
                  "id_type": "facebook",
                  "access_token": "abcdefg",
                  "questions": Y.JSON.stringify(player.quiz.slides)
            },
            handleSuccess = function () {
                alert("success");
            },
            handleFailure = function () {
                alert("failure");
            },
            url = 'ajax/save.php';
    
        Y.on('io:success', handleSuccess);
        Y.on('io:failure', handleFailure);
        
        Y.io(url, {
            method: 'POST',
            //data: jsonCreateUser
            data: {"questions": Y.JSON.stringify(player.quiz.markers)}
        });
        

      });
    }

    function addquestion(){
      player.quiz.showEditDialog(-1);
    }