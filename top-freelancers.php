<?php
session_start();

    include("connection.php");
    include("functions.php");

    $con= mysqli_connect("localhost", "root", "", "freelance_db");

    $user_data = check_login($con);
    $user_name = $user_data['user_name'];
    $user_phone=$user_data['phone'];
    $user_id = $user_data['user_id'];
    $work_type=$user_data['work_type'];
    $email=$user_data['email'];
    $profile_pic = $user_data['profile_pic'];

    $all_freelancers_query = "select * from users where user_role = 'freelancer'";
    $all_freelancers = mysqli_query($con, $all_freelancers_query);

    if($user_data['user_role'] == 'freelancer') {
      header('Location: index-freelancer.php');
    }

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
          <li><a href="client_orders.php">My Orders</a></li>
          <li class="active"><a href="top-freelancers.php">Top Freelancers</a></li>
          <li><a href="balance.php">Balance</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->
  </header><!-- End Header -->


   <section style="margin-top: 80px;" id="top-freel">
   <div class="container mt-5">
    <div class="mt-3 bg-light">
      <?php
            if($_SERVER['REQUEST_METHOD'] == "POST") {
            $freelancer_name = rtrim($_POST['user_name'], "/");
            $freelancer_phone = rtrim($_POST['phone'], "/");
            $freelancer_email = rtrim($_POST['email'], "/");
            $description= $_POST['description'];
            $money_after = $user_data['balance'] - 1;
           
            
            if($user_data['balance'] >= 1) {

              $client_money_query = "update users set balance = '$money_after' where user_name = '$user_name'";
              $client_result = mysqli_query($con, $client_money_query);

              $query = "insert into `freelance_orders`(uname, phone , freelancer_name , work_type, email, C_description ) values ('$user_name','$user_phone','$freelancer_name' , '$work_type' , '$email' ,'$description')";
              $result = mysqli_query($con, $query);
  
              if($result) {
                echo "Successfully ordered ";
              } else {
                echo "Failed to ordered ";
                
              }

             /* if($client_result) {
                echo "<h2 class='text-center'>Information of Freelancer: </h2>";
                echo "<h4>F. Name: " . $freelancer_name . "</h4>";
                echo "<h4>F. Number: 0" . $freelancer_phone . "</h4>";
                echo "<h4>F. Email: ", $freelancer_email, "</h4>";
              } else {
                  echo "error submitting question";
              }

            }else {
                echo "<h3 style='color:red;'> You Don't have enough money to see information! </h3> ";
            }*/
          }
          }
        ?>
    </div>
    <div class="mt-3 heading-info">
        <h2 class="text-center">Top Freelancers</h2>
        <p class="text-center">When You Show one Contact Freelancer Information you will loss from your Balance <span>1L.E</span> <i class="fas fa-money-bill-wave-alt"></i></p>

        <div class="row">
          <?php
              while($row = mysqli_fetch_array($all_freelancers)) {
              print "<div class='card col-lg-4 mx-auto my-3' style='width:400px'>";
              print "<div class='card-body'>";
              print "<img class='card-img-top' src='uploads/". $row['profile_pic'] ."' alt='Profile Picture' style='width:100%'>";
              print "<h4 class='card-title mt-3'>". $row['user_name'] ."</h4>";
              print "<p class='card-text'>Type of Work: ". $row['work_type'] ."</p>";
              print "<td>
                      <form method='post'>
                          <input type='hidden' name='user_name' value=" . $row['user_name'] . "/>
                          <input type='hidden' name='phone' value=" . $row['phone'] . "/>
                          <input type='hidden' name='email' value=" . $row['email'] . "/>
                          <input type='hidden' name='userid' value=" . $row['user_id'] . "/>
                          <textarea type='text' cols='30' rows='3' name='description' placeholder='Text here!...?' style='background-color:#fff; font-size: 0.8rem; margin: 20px 0;'></textarea>
                          <input id='button' type='submit' class='btn btn-primary' value='Book Now'><br><br><br><br>
                      </form>
                  </td>";
              print "</div>";
              print "</div>";
            }
          ?> 
        </div>

    </div>
  </div>
  </section>
  

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

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