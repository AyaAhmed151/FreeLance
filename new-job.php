<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
    $user_name = $user_data['user_name'];

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
  <link rel="stylesheet" href="styles.css">
</head>
<body>


  <!-- ======= Header ======= -->
  
  <header id="header" class="fixed-top">
      <nav>
      <h1 class="logo"><a href="index-guest.php">FreeLance</a></h1>
      <p>C: <?php echo $user_data['user_name']; ?></p>
        <ul>
          <li class="active"><a href="index-guest.php">Home</a></li>
          <li><a href="my-jobs.php">My Jobs</a></li>
          <li><a href="top-freelancers.php">Top Freelancers</a></li>
          <li><a href="client_orders.php">My Orders</a></li>

          <li><a href="balance.php">Balance</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->
  </header><!-- End Header -->

  <section style="margin-top: 100px;" id="new-job">
  <div class="container mt-3">
    <h3>Please Fill The Data To Add New Job</h3>
    <img src="assets/img/f.png" alt="">
    <form method="post" class="needs-validation p-2" novalidate>
      
        <div class="row mb-3">
            <div class="col">
                <label for="title">Project Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
            </div>
            <div class="col">
                <label for="title">Project Budget ( L.E Pounds )</label>
                <input type="number" class="form-control" id="budget" placeholder="Project Budget" name="budget" required>
            </div>
           
        </div>
       

        <div class="form-group">
            <label for="worktype"> Type of work</label>
            <select class="form-control" id="worktype" name="worktype">
            <option> Translation</option>
                <option>Development & IT</option>
                <option>Design & Creative</option>
                <option>Sales</option>
                <option> Marketing</option>
                <option>Writing</option>
                <option>Admin & Customer Support</option>
                <option>Finance </option>
                <option> Accounting</option>
            </select> 
        </div>
        <div class="row mb-3">
            <div class="col form-group">
                <label for="experience"> Freelancer Experience</label>
                <select class="form-control" id="experience" name="experience">
                    <option value="entry">low</option>
                    <option  value="intermediate">Intermediate</option>
                    <option  value="expert">Advanced</option>
                </select> 
            </div>
            <div class="col form-group">
                <label for="length"> Project length </label>
                <select class="form-control" id="length" name="length">
                    <option value="week">1 Week</option>
                    <option value="2weeks">1 - 2 weeks</option>
                    <option value="month">a month</option>
                    <option value="3months">1 - 3 months</option>
                    <option value="6month">3 - 6 months</option>
                    <option value="verylong">more than 6 months</option>
                </select> 
            </div>
        </div>
        <div class="form-group">
            <label for="description">Project Description: (letters[l/e/r/q], numbers[3,1,5], and [.] is only allowed)</label>
            <textarea class="form-control" rows="5" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Done</button>
    </form>
    <?php
      if($_SERVER['REQUEST_METHOD'] == "POST") {
        $title = $_POST['title'];
        $budget = $_POST['budget'];
        $work_type = $_POST['worktype'];
        $experience = $_POST['experience'];
        $length = $_POST['length'];
        $description = $_POST['description'];

        if(!empty($title) && !empty($budget) && !empty($work_type) && !empty($experience) && !empty($length) && !empty($description)) {
            //save to database
            $query = "insert into jobs (client_name,title,budget,work_type,experience,length,description) values ('$user_name','$title','$budget','$work_type','$experience','$length','$description')";
            $result = mysqli_query($con, $query);
            if($result) {
                // $id = $result['id'];
                // $job_id_query = "update single_job set job_id = '$id' where id = 1";
                // $job_id = mysqli_query($con, $id);
                // header('Location: my-jobs.php');
                echo "Successfully submitted your job";
            } else {
                echo "Please enter some valid information";
            }
        }
      }
    ?>
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