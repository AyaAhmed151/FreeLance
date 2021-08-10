<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
    $job_id = $_GET['job_id'];

    if($user_data['user_role'] == 'freelancer') {
        header("Location: job-freelancer.php?job_id=".$job_id);

    } else if ($user_data['user_role'] == 'client') {
        header("Location: job-client.php?job_id=".$job_id);
    }

?>