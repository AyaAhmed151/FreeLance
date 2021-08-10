<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
    $user_name = $user_data['user_name'];

    $my_jobs_query = "select * from jobs where client_name = '$user_name'";
    $my_jobs = mysqli_query($con, $my_jobs_query);

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
<body id="my-jobs-page">
  <!-- ======= Header ======= -->
  <!--<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index-guest.php">Talent Scouters<span>.</span></a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index-guest.php">Home</a></li>
          <li class="active"><a href="my-jobs.php">My Jobs</a></li>
          <li><a href="new-job.php">Add New Job</a></li>
          <li><a href="top-freelancers.php">Top Freelancers</a></li>
          <li><a href="balance.php">Balance</a></li>
          <li><a href="logout.php" style="color: red;">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

   
  </header><!-- End Header -->

  <header id="header" class="fixed-top">
      <nav>
      <h1 class="logo"><a href="index-guest.php">FreeLance</a></h1>
      <p>C: <?php echo $user_data['user_name']; ?></p>
        <ul>
          <li class="active"><a href="index-guest.php">Home</a></li>
          <li><a href="my-jobs.php">My Jobs</a></li>
          <li><a href="client_orders.php">My Orders</a></li>
          <li><a href="top-freelancers.php">Top Freelancers</a></li>
          <li><a href="balance.php">Balance</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->
  </header><!-- End Header -->

  <section style="margin-top: 80px;" id="myjob">
  <div class="container mt-5">
      <div class="mt-3 bg-light">
          <h2 class="text-center"> Jobs I have Now</h2>
          <?php
              print "
              <table class='table table-striped'>
              <tr>
              <td>Title</td> 
              <td>Work Type</td> 
              <td>Experience Level</td> 
              <td>Budget</td> 
              </tr>";
              while($row = mysqli_fetch_array($my_jobs))
              {
                  print "<tr>"; 
                  print "<td><a href='job.php?job_id=". $row['id'] ."'>" . $row['title'] . "</a></td>"; 
                  print "<td>" . $row['work_type'] . "</td>"; 
                  print "<td>" . $row['experience'] . "</td>"; 
                  print "<td>" . $row['budget'] . "</td>"; 
                  print "</tr>";
              } 
              print "</table>";
          ?>
      </div>
      <a href="new-job.php" type="button" class="btn btn-primary">Add Now!</a>
    </div>
  </section>
  </main>
  

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
    $('.add-btn').click(function(){
        $('ul').append("
<li><span><i class='fa fa-trash'></i></span>"+ $('input').val() +"</li>
");
         $('input').val("");
      });
      $('ul').on("click", 'span', function(){
        $(this).parent().fadeOut(500,function(){
          $(this).remove();
        });
      });
      $('.icon').click(function(){
        $('.field').toggleClass("hide");
      })
</script>
</body>
</html>