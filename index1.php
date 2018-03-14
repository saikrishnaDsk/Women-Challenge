<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Women Safety</title>
        <link rel = "stylesheet" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Karma" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arvo|Slabo+27px" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>
            
            
            function getUserMedia(options, successCallback, failureCallback) {
              var api = navigator.getUserMedia || navigator.webkitGetUserMedia ||
                navigator.mozGetUserMedia || navigator.msGetUserMedia;
              if (api) {
                return api.bind(navigator)(options, successCallback, failureCallback);
              }
            }

            function getStream (type) {
                let video = document.querySelector("#videos");
                video.style.display = "block";
              if (!navigator.getUserMedia && !navigator.webkitGetUserMedia &&
                !navigator.mozGetUserMedia && !navigator.msGetUserMedia) {
                alert('User Media API not supported.');
                return;
              }
                
              var constraints = {};
              constraints[type] = true;
              getUserMedia(constraints, function (stream) {
                var mediaControl = document.querySelector(type);

                if ('srcObject' in mediaControl) {
                  mediaControl.srcObject = stream;
                  mediaControl.src = (window.URL || window.webkitURL).createObjectURL(stream);
                } else if (navigator.mozGetUserMedia) {
                  mediaControl.mozSrcObject = stream;
                }
              }, function (err) {
                alert('Error: ' + err);
              });
            }
        </script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color: #e3f2fd !important;">
          <a class="navbar-brand" href="index.html">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item active" id="Logo" style="padding-left: 275px;">
                <a class="navbar-brand" href="#">SafeHer <br><button class = "btn btn-danger btn-sm" onclick="getStream('video')">In Danger?</button><span class="sr-only">(SafeHer)</span></a>
              </li>
              <li class="nav-item">
              </li>
            </ul>
            <span class="navbar-text">
              <ul class = "navbar-nav">
                <li class="nav-item rightside"><a href="register.php"><button class = "btn btn-sm">Login</button></a></li>
                <li class="nav-item rightside">Cases Dealt</li>
                <li class="nav-item rightside">My Rights</li>  
                <li class="nav-item rightside">About Us</li>                  
              </ul>
            </span>
          </div>
        </nav>
              <video controls autoplay style="height:180px; width: 100%; display:none" id="videos"></video>
        <div id = "first">
            <div id="target"></div>
            <div class = "content">
                <h2>Beware of people masquerading as you</h2>
                <h3>Check if someone is pretending to be you</h3>
                
                <a href="help.html"><button>Need Help?</button></a>
            </div>
        </div>

        <div id = "second">
                <div class = "content">
                    <h2>A helping hand is always ready</h2>
                    <h3>Don't let them get away with it</h3>
                    <button>Go to Complaint Forums</button>
                </div>
        </div>

        <div id = "third">
                <div class = "content">
                    <h2>Don't give up</h2>
                    <h3>Make your voice heard</h3>
                    <button>Check Support Resources</button>
                </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </body>
</html>