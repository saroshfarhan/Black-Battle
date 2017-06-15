<!DOCTYPE html>

<html> 
    <head>
        <meta charset="utf-8">
        <title>Sign In | AAGECA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
        <!-- <link rel="stylesheet" href="css/main.css"> -->

        <link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>
       <script>
         // Initialize Firebase
         var config = {
           apiKey: "AIzaSyBNnY5KtJ0Q5g9fgPXx_Jn-ivm1HhiRDlY",
           authDomain: "aageca-e5ff8.firebaseapp.com",
           databaseURL: "https://aageca-e5ff8.firebaseio.com",
           projectId: "aageca-e5ff8",
           storageBucket: "aageca-e5ff8.appspot.com",
           messagingSenderId: "486797841472"
         };
         firebase.initializeApp(config);
       </script>


    <script src="https://cdn.firebase.com/libs/firebaseui/2.0.0/firebaseui.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.0.0/firebaseui.css" />

    <script type="text/javascript">
      // FirebaseUI config.
      var uiConfig = {
        signInSuccessUrl: 'loggedIn.php',
        signInOptions: [
          // Leave the lines as is for the providers you want to offer your users.
          firebase.auth.GoogleAuthProvider.PROVIDER_ID,
          firebase.auth.FacebookAuthProvider.PROVIDER_ID,
          firebase.auth.EmailAuthProvider.PROVIDER_ID,
        ],
        // Terms of service url.
        tosUrl: '<your-tos-url>'
      };

      // Initialize the FirebaseUI Widget using Firebase.
      var ui = new firebaseui.auth.AuthUI(firebase.auth());
      // The start method will wait until the DOM is loaded.
      ui.start('#firebaseui-auth-container', uiConfig);
    </script>
    </head>
    <body>
<!--       <div class="loader">
        <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
      </div> -->
        
   <div class="nav-container">
    <nav class="fullscreen-nav overlay-bar">
    
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <a href="index.html">
              <img alt="logo" class="outer-logo" src="img/logo-light.png">
            </a>
          </div>
        </div>
      </div>  
    
      <div class="fullscreen-nav-toggle">
        <i class="icon icon_menu"></i>
        <i class="icon icon_close"></i>
      </div>
      
      <div class="fullscreen-nav-container">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <a href="index.html">
                <img class="logo" alt="Logo" src="img/logo-light.png">
              </a>
              <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Work</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>  
    </nav>
   </div>
    <div class="main-container">
          <section class="no-pad login-page fullscreen-element">
          
            <div class="background-image-holder">
              <img class="background-image" alt="Poster Image For Mobiles" src="img/hero10.jpg">
            </div>
          
            <div class="container align-vertical">
              <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                  <h1 class="text-white">SIGN IN</h1>
                  <div id="firebaseui-auth-container"></div>
                  
 
                </div>
              </div><!--end of row-->
            </div><!--end of container-->
          </section>
        </div>
    
    <div class="footer-container">
      <footer class="newFooter short-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <span class=""><img style="margin-bottom: 15px;" height="35"  src="img/logo-dark.png" alt=""><br><p>Alumni Association of Government College of Engineering,<br> Aurangabad</p></span>
              <span class=""><a href="#">info@aageca.org</a></span>
              <span class="">+614 3827 492</span>
              <span class="">Station Road, Ousmanpura, Aurangabad.</span>
            </div>
          </div>
        </div>
        

      </footer>
    </div>
        
    <script src="js/jquery.min.js"></script>
        <script src="js/jquery.plugin.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/skrollr.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/scrollReveal.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/twitterFetcher_v10_min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
        