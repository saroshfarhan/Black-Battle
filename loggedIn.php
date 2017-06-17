<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <title>Sign | AAGECA </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
      </div>
         -->
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
      
      <div class="logout">
        <img height="40" src="img/logout.png" alt="" class="logoutBtn">
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
                  <img height="100" class="logo" alt="Logo" src="img/logo-light.png">
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
          <img class="background-image" alt="Background Image" src="img/hero23.jpg">
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

      <section class="blog-masnonry bg-muted"> 
        <div class="container">
          <div style="text-align: center;" class="row center">
            <div class="col-md-6">
            <button  class="btn btn-filled btn-primary showform">Update profile</button>
              
            </div>
            <div class="col-md-6">
            <form action="core/browse.php" method="POST">
              <input hidden type="text" class="secondUnique" name="secondUnique">
              <button class="btn btn-filled btn-primary browseProfile" type="submit" >BROWSE</button>
            </form>
              
            </div>
<!--             <button class="btn btn-filled btn-primary browseProfile">
              <a href="core/new.php" style="color: white";> BROWSE </a></button>
 -->          </div>
        </div>

      <section hidden class="form">

         <div class="container">
           <div class="row">
             <div class="col-sm-12 text-center detailsHeader">
               <h3 class="detailsHeader blueText" >Just few more Details...</h3>
             </div>
           </div>
         </div>  

     <div style="padding-bottom: 130px;" class="container">

         <form onkeypress="return event.keyCode != 13;" action="core/new.php" method="POST">
           <div class="form-group" >
             <label for="designation">Current Designation</label>
             <input required type="text" class="form-control Designation" id="designation" name="designation" placeholder="Ex. Singer / Designer">
           </div>

           <div class="form-group" >
             <label for="mobNum">Mobile Number</label>
             <input required type="tel" class="form-control Mobile" maxlength="10" id="mobNum" name="mobNum">
           </div>
           <div class="form-group">
             <label for="autocomplete">Current City</label>
             <input required type="text" class="form-control City" id="autocomplete" name="city" placeholder="Select from suggestions">
           </div>
           
               <input hidden type="text" name="uniqueID" class="uniqueID">

           <div class="form-inline">
             <label class="col-sm-12 col-md-3" for="fromYear">Student of GECA From</label>
             <input required type="text" class="form-control yearselect input-lg"  id="fromYear" name="fromYear" value="1998">
             <label class="center" for="toYear">To</label>
             <input required class="form-control yearselect input-lg" type="text" id="toYear" name="toYear" value="2002">
           </div>
           <div class="form-group">
             <label for="autocomplete">Branch</label>
             <select required class="selectpicker form-control" name="branch">
               <option value="" disabled selected="selected" >Select Branch</option>
               <option value="Civil Engineering" >Civil Engineering</option>
               <option value="Electrical Engineering" >Electrical Engineering</option>
               <option value="Mechanical Engineering" >Mechanical Engineering</option>
               <option value="Electronics And Telecommunications" >Electronics & Telecommunication Engineering</option>
               <option value="Computer Science And Engineering" >Computer Science And Engineering</option>
               <option value="Information Technology" >Information Technology</option>
               <option value="MCA" >Master of Computer Application</option>
             </select>              
           </div>

            <div class="form-group">
              <label for="dob">Date of Birth</label>
              <input required type="text" class="form-control date-input" id="dob" name="dob" placeholder="DD / MM / YYYY">
            </div>
            <div id="date-picker"> </div>



           
           <div class="form-group gender">

                   <label>Gender : </label>
                   <span style="padding-left: 10px;" class="maleRadio">
                     <input  type="radio" name="gender" value="Male" class="with-gap" id="male" data-error=".errorTxt6"/>
                     <span style="padding-right: 10px;" for="male">Male</span>
                   </span>
            

                   <input type="radio" name="gender" value="Female" class="with-gap" data-error=".errorTxt6" id="female" />
                   <span for="female">Female</span>
               </span>


           </div>

           <script>
             var input = document.getElementById('autocomplete');
             var autocomplete = new google.maps.places.Autocomplete(input);
           </script>
           <button type="" class="btn btn-default updateProfile" name="updateProfile">Submit</button>
           <!-- <div class="updateProfile">hkjhkj</div> -->
         </form>         
       </div><!--end of row-->
     </div><!--end of container-->

      </section>
      </section> 
    </div>

        <div id="textconsole"></div>

    <div class="footer-container">
      <footer class="newFooter short-2">
        <hr>
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
                $.ajax({  
                         url  : 'core/new.php',
                         method:"post",  
                         data : {userName : user.displayName, userEmail : user.email, userPhoto : user.photoURL, userVerified : user.emailVerified,nameofUser : nameofUser},
                         dataType:"text",  
                         success: function( data ) 
                         {  
                              
                              $('.uniqueID').val(user.email);
                              $('.secondUnique').val(user.email);

                         }  
                    }); 

          } else {
            console.log("No user logged in");
          }
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
            window.location.replace("signIn.html");
            firebase.auth().onAuthStateChanged( function(user){
            });
          });
        </script>
        <script src="js/jquery.plugin.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/scrollReveal.min.js"></script>
        <script src="js/year-select.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/picker.js"></script>
        <script>

          $('.selectpicker').selectpicker({
            style: 'btn-info',
            size: 4
          });
        </script>

    </body>
</html>















<!-- <!DOCTYPE html>
<html>
<head>
  <title>AAGEGA</title>

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



</head>
<body>

  <script>
    firebase.auth().onAuthStateChanged( function(user){

      // ********* Code for email verification ********** //
    // var user = firebase.auth().currentUser;
    // user.sendEmailVerification().then(function() {
    //   // Email sent.
    //   console.log("Mail sent");
    // }, function(error) {
    //   // An error happened.
    //   console.log("Error in mail");
    // });

    if(user) {
      var textID = document.getElementById('text');
      textID.innerHTML = '<h2> Hi' + user.displayName + '.'; 
      $.ajax({  
                   url  : 'core/new.php',
                   method:"post",  
                   data : {userName : user.displayName, userEmail : user.email, userPhoto : user.photoURL, userVerified : user.emailVerified},
                   dataType:"text",  
                   success:function(data)  
                   {  
                        $('#result').html(data);  
                   }  
              });  
    } else {
      console.log("No user logged in");
    }
    });

    
  </script>

  <a href="login.php"> <- </a>
  <h2>Yeah</h2>
  <div id="text"></div>
  <button id="logoutBtn" name="logoutBtn">Logout</button>
  <div id="result"></div>





</body>


<script src="js/jquery-1.11.3-jquery.min.js"></script>
<script>
  $('#logoutBtn').click( function() {
    firebase.auth().signOut();
    firebase.auth().onAuthStateChanged( function(user){
        $('#text').html('');
        $('#result').html('');
    });
  });
</script>

</html>
 -->
        