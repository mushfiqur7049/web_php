<?php
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
    <title>See Cars</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
  <style type="text/css">
    .sh{
      
      color:black;
      box-sizing: content-box;
      width: 30%;
      border: solid #5B6DCD 3px;
      padding: 5px;

    }
    
  </style>
<body>
    
     


           
   <?php include 'navi.php'?>
   
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>All Cars </h2>   
                    </div>
            </div>              
            <hr />
                 <!-- /. ROW  -->
            <div>
              <p>Suggestions: <span id="txtHint"></span></p> 
              <form method="post">Search: <input type="text" id="txt1" placeholder="Car Model" name="name2" onkeyup="showHint(this.value)">
                  <input type="submit"  value="Delete Car">
              </form>

                <script>
                function showHint(str) {
                  var xhttp;
                  if (str.length == 0) { 
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                  }
                  xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                  };
                  xhttp.open("GET", "gethint.php?q="+str, true);
                  xhttp.send();   
                }
                </script>
                <?php
                  if($_SERVER['REQUEST_METHOD'] == "POST")
                  {
                    $user   = $_POST['name2'];
                    $query2 = "SELECT * from tbl_image";
                    $result1 = $db->select($query2);
                    $xw = "<b>Not Found</b>";
                    while($result2 = $result1->fetch_assoc()){

                      if($result2['car_model']===$user){
                        $id = $result2['car_id'];
                        $sql = "DELETE from tbl_image where car_id = '$id'";
                        $sql1 = $db->delete($sql);
                        if($sql1)                        
                          $xw= "<b>Succesfully Deleted</b>";

                        break;
                      }             
                    } 
                    
                     echo $xw;

                  }
                    
             ?>
            </div>
            <br>
            <div>
            <?php
              //$myfile = fopen("member.txt", "w") or die("Unable to open file!");
              
              $query = "select * from tbl_image";
              $mem = $db->select($query);
              $x=1;
              while($result = $mem->fetch_assoc()){
              ?>
              <div class="sh">
              <img src="uploads/<?php echo $result['image']; ?>" alt="<?php echo $_SESSION['car_name']; ?>" style="height: 100%;width:100%"> <br><?php $txt=$x.". ".$result['car_name']."<br>Model Name: ".$result['car_name']." ".$result['car_model']; ?> 
                  <?php echo $txt;//fwrite($myfile, $txt); ?> </div> <br/>
              

             <?php $x++; } //fclose($myfile);?>

             <br>
         </div>


                  
              
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
