

<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <title>Sign | AAGECA </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <link rel="stylesheet" href="../css/main.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>
        
      

      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCyw2_wy58Vs_Hy7nlcFdPAlDmOTzaS-Q&libraries=places"></script>


          
          

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
                <img alt="logo" class="outer-logo" src="../img/logo-light.png">
              </a>
            </div>
          </div>
        </div>  
      <div class="logout">
        <img height="40" src="../img/logout.png" alt="" class="logoutBtn">
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
                  <img height="100" class="logo" alt="Logo" src="../img/logo-light.png">
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
      <header style="padding-bottom: 50px;" class="page-header">
        <div class="background-image-holder parallax-background">
          <img class="background-image" alt="Background Image" src="../img/hero23.jpg">
        </div>
        
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <!-- <span class="text-white alt-font">Update your profile &nbsp;</span> -->
              <h1 class="text-white">
                <img id="profilePhoto" class="img-circle" height="200" width="200" src="" alt="user profile picture">
                <div class="displayName"></div>
                <h3 class="displayEmail"></h3>
              </h1>
              
            </div>
          </div><!--end of row-->
        </div><!--end of container-->
      </header>

      
        <section>
  
          <div class="container">
          <a href="../loggedIn.php" style="padding-bottom: 15px;" >HOME</a>
            
          </div>
          <?php 
            include 'dbconnect.php';

            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);  


            function printInfo($name,$email_ID,$profilePhoto,$branch,$toYear,$currCity){

               echo "
               <div class=\"container browseCard\">
                  <div class=\"row\">
 
                        <div class=\"panel panel-default browsePanel\">
                            <div class=\"panel-body\">
                                <div class=\"col-md-2 col-sm-12 center panel-body\">
                                    <img height=\"120\" class=\"browseImg img-circle\" src=\"$profilePhoto\">
                                </div>
                                <div class=\"col-md-8 col-sm-12 left browseDetails\">
                                    <h3 class=\"browseName uppercase\">$name</h3>
                                    <p class=\"browseAcademics \"><b>$branch, BATCH OF $toYear</b></p>
                                    <p class=\"browseCity \">$currCity</p>
                                </div>
                            </div>
                        </div>

                  </div>
               </div> 

               <br>";   
            };

            if(mysqli_num_rows($result) > 0) {  
                    // printHead();
                    while($row = $result->fetch_assoc()) {
                      printInfo($row['name'],$row['email_ID'],$row["profilePhoto"],$row["branch"],$row["toYear"],$row["currCity"]);
                     }    
                     // echo "</table>";
                }                   
           ?>
        </section>

          <div class="footer-container">
            <footer class="newFooter short-2">
              <hr>
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <span class=""><img style="margin-bottom: 15px;" height="35"  src="../img/logo-dark.png" alt=""><br><p>Alumni Association of Government College of Engineering,<br> Aurangabad</p></span>
                    <span class=""><a href="#">info@aageca.org</a></span>
                    <span class="">+614 3827 492</span>
                    <span class="">Station Road, Ousmanpura, Aurangabad.</span>
                  </div>
                </div>
              </div>
              

            </footer>
          </div>
                


              <script src="../js/jquery.min.js"></script>
              <script>
                firebase.auth().onAuthStateChanged( function(user){
                if(user) {
              
                  $("#profilePhoto").attr('src',user.photoURL);
                  $('.displayName').text(user.displayName);
                  var nameofUser = $('.displayName').text();
                  console.log("Name is " + nameofUser);
                  $('.displayEmail').text(user.email);
                  $('.displayEmail').css({'color' : 'white',
                                           'font-size' : '20px',
                                           'font-weight' : '600'});

                } else {
                  console.log("No user logged in");
                }
                });
              </script>
              <script>
                $('.updateProfile').click( function() {
                    var designation = $('.designation').val();
                    var city = $('.city').text();
                    alert(designation);
                });

              </script>

              <script type="text/javascript">
                  $(document).ready(function(e) {
                      $('.yearselect').yearselect();

                      $('.yrselectdesc').yearselect({step: 5, order: 'desc'});
                      $('.yrselectasc').yearselect({order: 'asc'});

                  });
              </script>
              <script>
              	$('.logoutBtn').click( function() {
              	  firebase.auth().signOut();
              	  console.log("logged out...")
              	  window.location.replace("../login.php");
              	  firebase.auth().onAuthStateChanged( function(user){
              	  });
              	});
              </script>
              <script src="../js/jquery.plugin.min.js"></script>
              <script src="../js/bootstrap.min.js"></script>
              <script src="../js/isotope.min.js"></script>
              <script src="../js/smooth-scroll.min.js"></script>
              <script src="../js/scrollReveal.min.js"></script>
              <script src="../js/year-select.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
              <script src="../js/scripts.js"></script>
              <script src="../js/picker.js"></script>
              <script src="../js/stroll.min.js"></script>
<!--               <script>
                stroll.bind( '#main ul' );
              </script> -->
              <script>

                $('.selectpicker').selectpicker({
                  style: 'btn-info',
                  size: 4
                });
              </script>

          </body>
      </html>