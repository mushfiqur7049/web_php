<?php
  session_start();
?>
<?php include 'config/config.php' ?>
  <?php include 'lib/Database.php' ?>
  <?php
    $db = new Database();
  ?>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $tit   = $_POST['title'];
      $pos   = $_POST['post'];
      
      $query = "INSERT INTO tbl_notice(title,post) VALUES('$tit','$pos');";
      $result = $db->insert($query);

    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notice_CONTROL</title>
	<!-- BOOTSTRAP STYLES-->

    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
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
                    <div class="col-md-12">
                     <h2>Add Notice </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->


                <hr />

                <form action="" method="POST">
                    <div class="container 75%">
                      <div class="row uniform 50%">
                        
                        <div class="12u$">
                          <input name="title" placeholder="Title" type="text" />
                          <textarea name="post" placeholder="Post" rows="4"></textarea>
                          <ul class="actions">
                            <li><input type="submit" class="special" value="Submit" /></li>
                            <li><input type="reset" class="alt" value="Reset" /></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    
          </form>


                



              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
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
