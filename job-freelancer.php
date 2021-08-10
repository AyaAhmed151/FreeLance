<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
    $user_name = $user_data['user_name'];

    $job_id = $_GET['job_id'];

    $single_job_query = "select * from jobs where id = '$job_id'";
    $result = mysqli_query($con, $single_job_query);
    $single_job = mysqli_fetch_assoc($result);
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
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" >
      <nav class="index-freel">
      <h1 class="logo"><a href="index-guest.php">FreeLance</a></h1>
      <p><?php echo $user_data['user_role']; ?>: <?php echo $user_data['user_name']; ?></p>
        <ul>
          <li class="active"><a href="index-guest.php">Home</a></li>
          <li><a href="recommended-jobs.php">Recommended Jobs</a></li>
          <li><a href="top-clients.php">Top Clients</a></li>
          <li><a href="balance.php">Balance</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->
  </header><!-- End Header -->

  <section style="margin-top: 100px;" id="job-client">
  <div class="container" style="max-width: 800px;">
        <h1 class="text-center"><?php echo $single_job['title']?></h1> 
        <table class="table">
    <thead>
      <tr>
        <th style="width:150px;">Information</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Client name</td>
        <td><?php echo $single_job['client_name']?></td>
      </tr>
      <tr>
        <td>Budget</td>
        <td><?php echo $single_job['budget']?></td>
      </tr>
      <tr>
        <td>Type of work</td>
        <td><?php echo $single_job['work_type']?></td>
      </tr>
      <tr>
        <td>Experience required</td>
        <td><?php echo $single_job['experience']?></td>
      </tr>
      <tr>
        <td>Job duration</td>
        <td><?php echo $single_job['length']?></td>
      </tr>
      <tr>
        <td>Job description</td>
        <td><?php echo $single_job['description']?></td>
      </tr>
      <tr>
        <td>Date posted</td>
        <td><?php echo $single_job['date']?></td>
      </tr>
    </tbody>
  </table>
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

</body>
</html>