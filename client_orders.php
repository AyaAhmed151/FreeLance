<?php
session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
    $user_name = $user_data['user_name'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FreeLance</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/f.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?v=<?php echo time();?>" rel="stylesheet">
</head>
<body id="topfreebody">



<!-- ======= Header ======= -->
  
<header id="header" class="fixed-top">
      <nav>
      <h1 class="logo"><a href="index-guest.php">FreeLance</a></h1>
      <p>C: <?php echo $user_data['user_name']; ?></p>
        <ul>
          <li class="active"><a href="index-guest.php">Home</a></li>
          <li><a href="my-jobs.php">My Jobs</a></li>
          <li><a href="new-job.php">Add New Job</a></li>
          <li class="active"><a href="top-freelancers.php">Top Freelancers</a></li>
          <li><a href="balance.php">Balance</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->
  </header><!-- End Header -->
  <br>
  
  <section style="margin-top: 80px;" id="top-freel">

  <div class="mt-3 heading-info">
        <h2 class="text-center">Orders</h2>

        <div class="row">

        <?php
            $con= mysqli_connect("localhost", "root", "", "freelance_db");

            $query = "SELECT * FROM client_orders WHERE client_name = '$user_name' ";
            $result = mysqli_query($con, $query);

           $check =mysqli_num_rows($result)>0;
          
          if($check){
            while($row = mysqli_fetch_array($result))
            {
             

                print "<div class='card col-lg-4 mx-auto my-3' style='width:400px'>";
                print "<div class='card-body'>";
                print "<h4 class='card-title mt-3'> Name: ". $row['FRname'] ."</h4>";
                print "<h4 class='card-title mt-3'>Phone: ". $row['phone'] ."</h4>";
                print "<h4 class='card-title mt-3'> Work Type: ". $row['work_type'] ."</h4>";
                print "<h4 class='card-title mt-3'> Email: ". $row['email'] ."</h4>";
                print "<h4 class='card-title mt-3'> Description: ". $row['F_Description'] ."</h4>";

               
                print "</div>";
                print "</div>";
            }
        }
                ?>
                
          
        </div>

    </div>
  </div>
  </section>
        
      

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>

const img = document.querySelector("img");
      const icons = document.querySelector(".icons");
      img.onclick = function(){
        this.classList.toggle("active");
        icons.classList.toggle("active");
      }
  </script>


</body>
</html>



