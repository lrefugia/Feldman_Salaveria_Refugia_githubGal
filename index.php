<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Releases</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <div class="row">
      <div class="large-12 columns" id="header">
        <h1>Welcome to the Blu-Ray Database!</h1>
        <h2>Come explore our new releases</h2>
      </div>
    </div>
    
    <div class="row">
      <div class="large-10 large-offset-1 columns" id="gallerycontainer">
        <div class="orbit-container">
          <ul data-orbit class="movie-orbit orbit-slides-container">
            <li class="active">
              <img src="images/ArmyOfDarkness.jpg" alt="Army of Darkness" />
              <div class="orbit-caption">
                Army of Darkness
              </div>
            </li>
            <li>
              <img src="images/Beetlejuice.jpg" alt="Beetlejuice" />
              <div class="orbit-caption">
                Beetlejuice
              </div>
            </li>
            <li>
              <img src="BlackHawkDown.jpg" alt="Black Hawk Down" />
              <div class="orbit-caption">
                Black Hawk Down
              </div>
            </li>
          </ul>

          <!-- n a v i g a t i o n -->
          <a href="#" class="orbit-prev">Prev <span></span></a>
          <a href="#" class="orbit-next">Next <span></span></a>

          <!-- n u m b e r s -->
          <div class="orbit-slide-number">
            <span>1</span> of <span>3</span>
          </div>

          <!-- p l a y  &  p a u s e -->
          <div class="orbit-timer">
            <span></span>
            <div class="orbit-progress"></div>
          </div>
        </div>

        <!-- b u l l e t s -->
        <ol class="orbit-bullets">
          <li data-orbit-slide-number="1" class="active"></li>
          <li data-orbit-slide-number="2"></li>
          <li data-orbit-slide-number="3"></li>
        </ol>
      
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns" id="footer">
        <h1>&copy; The Blu-Ray Database 2016 • Jennifer Feldman / Leona Refugia / Mia Salaveria / Amy Krasin</h1>
      </div>
    </div>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/orbit.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
