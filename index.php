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


        <div class="orbit" role="region" aria-label="Featured Movies" data-orbit>
          <ul class="orbit-container">
            <button class="orbit-previous"><span class="show-for-sr">Previous</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next</span>&#9654;&#xFE0E;</button>
            <li class="is-active orbit-slide">
              <img class="orbit-image" src="images/ArmyOfDarkness.jpg" alt="Army of Darkness">
              <figcaption class="orbit-caption">Army of Darkness</figcaption>
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="images/Beetlejuice.jpg" alt="Beetlejuice">
              <figcaption class="orbit-caption">Beetlejuice</figcaption>
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="images/BlackHawkDown.jpg" alt="Black Hawk Down">
              <figcaption class="orbit-caption">Black Hawk Down</figcaption>
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="images/CloudyWithAChanceOfMeatballs.jpg" alt="Cloudy With A Chance Of Meatballs">
              <figcaption class="orbit-caption">Cloudy With A Chance Of Meatballs</figcaption>
            </li>
          </ul>
          <nav class="orbit-bullets">
            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide.</span><span class="show-for-sr">Current Slide</span></button>
            <button data-slide="1"><span class="show-for-sr">Second slide.</span></button>
            <button data-slide="2"><span class="show-for-sr">Third slide.</span></button>
            <button data-slide="3"><span class="show-for-sr">Fourth slide.</span></button>
          </nav>
        </div>


        <!--<div class="orbit-container show-for-small-up">
          <ul data-orbit="" data-options="animation:slide;navigation_arrows:true;">
            <li class="active">
              <img src="images/ArmyOfDarkness.jpg" alt="Army of Darkness">
            </li>
            <li>
              <img src="images/Beetlejuice.jpg" alt="Beetlejuice">
            </li>
            <li>
              <img src="images/BlackHawkDown.jpg" alt="Black Hawk Down">
            </li>
          </ul>
        </div>-->



        
        <!--<ul class="movie-orbit" data-orbit>
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
            <img src="images/BlackHawkDown.jpg" alt="Black Hawk Down" />
            <div class="orbit-caption">
              Black Hawk Down
            </div>
          </li>
        </ul>-->
      
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns" id="footer">
        <h1>&copy; The Blu-Ray Database 2016 • Jennifer Feldman / Leona Refugia / Mia Salaveria</h1>
      </div>
    </div>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation.orbit.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
