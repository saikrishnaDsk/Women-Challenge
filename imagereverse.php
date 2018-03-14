<html>
    <head>
        <title>Image Traceback</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel = "stylesheet" href="reverse.css">
        <link href="https://fonts.googleapis.com/css?family=Karma" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arvo|Slabo+27px" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>   
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
          <a class="navbar-brand" href="index.html">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item active" id="Logo" style="padding-left: 200px;">
                <a class="navbar-brand" href="#">SafeHer <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
              </li>
            </ul>
            <span class="navbar-text">
              <ul class = "navbar-nav">
                <li class="nav-item rightside">Cases Dealt</li>
                <li class="nav-item rightside">My Rights</li>  
                <li class="nav-item rightside">About Us</li>                  
              </ul>
            </span>
          </div>
        </nav>
        
        <div class = "container-fluid" id = "back">
                <div class="card text-center trans" id ="cardfirst" style="background-color: transparent; !important" id = "cord">
                  <div class="card-body trans">
                    <h2 class="card-title text-white ">Uncover a box of secrets</h2>
                    <p class="card-text text-light">Know where your photo has been uploaded</p>
                    <form action="test.php" method="post">
                      <input type="file" name="pic" accept="image/*" class = "btn btn-dark btn-sm">
                        <br><br>
                        <input value="url" name = "Website">
                      <input type="submit" value = "Submit" class = "btn btn-danger btn-lg">
                    </form>

                  </div>
                </div>

        </div>

    </body>
</html>