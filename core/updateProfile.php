<?php 
session_start();
	include 'dbconnect.php';

	    $uName = $_POST['userName'];
	    $uEmail = $_POST['userEmail'];
	    $uPhoto = $_POST['userPhoto'];
	    $uVerified = $_POST['userVerified'];
	    $nameuser = $_POST['nameofUser'];

	    global $uEmail;




	$designation = $_POST['designation'];
	$mobNum = $_POST['mobNum'];
	$city = $_POST['city'];
	$from = $_POST['fromYear'];
	$to = $_POST['toYear'];
	$branch = $_POST['branch'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$id = $_POST['uniqueID'];

	// $_SESSION["favcolor"] = "green";
	// $_SESSION['desg'] = $designation;
	$_SESSION['desg'] = $_POST['designation'];

	
	$res=mysqli_query($conn,"SELECT * FROM users WHERE email_ID='$uEmail'");
	$row=mysqli_fetch_array($res);
	$count = mysqli_num_rows($res);
	// echo "the count is" .$count;

	if( !isset($_POST['updateProfile']) ){
		if ($count==0){
			$sql = "INSERT INTO users(name,email_ID,email_verified,profilePhoto) VALUES('$uName','$uEmail','$uVerified','$uPhoto')";
			$sql_run = mysqli_query($conn,$sql); 
		}
	}


	

	if( isset($_POST['updateProfile']) ){
		$sqlDetails = "UPDATE users SET designation = '$designation',currCity = '$city',mobile='$mobNum',fromYear = '$from',toYear = '$to',branch='$branch',DOB = '$dob', gender = '$gender' WHERE email_ID='$id'";
		$detailsRun = mysqli_query($conn,$sqlDetails);
		
	}


 ?>

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
<!--        <div class="loader">
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
       
       <section class="blog-masonry bg-muted">

             <div class="container">
               <div class="row">
                 <div class="col-sm-12 text-center detailsHeader">
                   <h3 style="color: #F44336" class="detailsHeader" >Please Update profile first...</h3>
                 </div>
               </div><!--end of row-->
             </div>  
     
         
       </section>
     </div>


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
         	  window.location.replace("../signIn.html");
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
         