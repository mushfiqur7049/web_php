﻿<?php
  session_start();
 
?>
<?php include 'config/config.php' ?>
  <?php include 'lib/Database.php' ?>
  <?php
    $db = new Database();
  ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
    <?php include 'navi.php'?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong><?php echo "Welcome ".$_SESSION['username'];?></strong><br><p id="demo"></p> 
                             <script>
                                // Set the date we're counting down to
                                var countDownDate = new Date("Jun 26, 2019 00:00:00").getTime();

                                // Update the count down every 1 second
                                var x = setInterval(function() {

                                    // Get todays date and time
                                    var now = new Date().getTime();
                                    
                                    // Find the distance between now an the count down date
                                    var distance = countDownDate - now;
                                    
                                    // Time calculations for days, hours, minutes and seconds
                                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                    
                                    // Output the result in an element with id="demo"
                                    document.getElementById("demo").innerHTML = "Time left: "+ days + "d " + hours + "h "
                                    + minutes + "m " + seconds + "s ";
                                    
                                    // If the count down is over, write some text 
                                    if (distance < 0) {
                                        clearInterval(x);
                                        document.getElementById("demo").innerHTML = " "+"";
                                    }
                                }, 1000);
                              </script>
                        </div>
                       
                    </div>
                </div>
                  <!-- /. ROW  --> 
                <div class="row text-center pad-top">
                  
                 
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="seeUsers.php" >
                              <i class="fa fa-users fa-5x"></i>
                              <h5>See Users</h5>
                          </a>
                      </div>
                     
                     
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="seecarlist.php" >
                              <i class="fa fa-key fa-5x"></i>
                              <h5>See Car </h5>
                           </a>
                      </div>
                     
                     
                  </div>
                  
                  
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="seeNotice.php" >
                              <i class="fa fa-bell-o fa-5x"></i>
                              <h5>Notice Board </h5>
                          </a>
                      </div>
                     
                     
                  </div>

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="seeComment.php" >
                            <i class="fa fa-wechat fa-5x"></i>
                            <h5>Comment Box</h5>
                          </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="adminInfo.php" >
                              <i class="fa fa-user fa-5x"></i>
                              <h5>Admin Info</h5>
                          </a>
                      </div>
                     
                     
                  </div> 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="seeOnline.php" >
                              <i class="fa fa-bell-o fa-5x"></i>
                              <h5>Orders </h5>
                          </a>
                      </div>
                     
                     
                  </div>
                  
          </div>
                <!-- /. ROW  --> 
              
                  <!-- /. ROW  -->    
                 
                 <!-- /. ROW  -->   <!--
				  <div class="row">
                    <div class="col-lg-12 ">
					<br/>
                         <div class="alert alert-danger">
                             <strong>Want More Icons Free ? </strong> Checkout fontawesome website and use any icon <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/">Click Here</a>.
                        </div>
                       
                    </div>
                    </div>
                 
          
    
          /. PAGE WRAPPER  -->
    </div>

  </div>
    <!--<div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                       Design by: <a href="#" style="color:#fff;" target="_blank">MD.Mushfiqur Rahman Rifat</a>
                </div>
            </div>
        </div>-->
      <div class="footer">
      
    
             <div class="row"><?php include 'clock.php'?>
                <div class="col-lg-12" >
                   <p style="text-align: center">Design by: <a href="#" style="color:#fff;" target="_blank">MD.Mushfiqur Rahman Rifat</a></p>

                </div>
        </div>
        </div>
          
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
