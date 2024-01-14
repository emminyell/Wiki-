<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <title>Elegant Profile</title>
  <link rel="stylesheet" href="<?= APP_URL ?>public/Assets/css/profile.css">
</head>

<?php
include('../Views/includes/navbar.php');
?>
<body>
<section>
<div class="container mt-4">
  <!-- Cover Photo -->
  <div class="cover-photo"></div>

  <!-- Profile Picture and User Information -->
  <div class="text-center">
    <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-picture">
    <div class="user-info mt-3">
      <h2 class="text-light"><?= $_SESSION['user_name'] ?></h2>
      <p><?= $_SESSION['user_email'] ?></p>
    </div>
  </div>

  <!-- User Navigation -->
  <ul class="nav nav-pills nav-pills-custom mt-4">
    <li class="nav-item">
      <a class="nav-link href="#">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Recent Activity <span class="badge badge-warning">9</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Edit Profile</a>
    </li>
  </ul>

  <!-- Write and Post a New Post Form -->
  <div class="post-form mt-4">
    <h4 class="text-light">Write a new post</h4>
    <form>
      <div class="form-group">
        <textarea class="form-control" rows="3" placeholder="What's on your mind?"></textarea>
      </div>
      <button type="submit" class="btn btn-warning">Post</button>
    </form>
  </div>
    <!-- Statistics Section -->
    <div class="statistics mt-4">
    <h4 class="text-light">Statistics</h4>
    <p class="text-light">Total Posts: <strong class="text-light"></strong></p>
  </div>

  <!-- All Posts Section -->
  <div class="post-form mt-4">

  <div class="schedules-area pd-top-110 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="text-light">All My Wikis</h2>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt consectetur ut et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="ex1-content">
                <div class="tab-pane fade active show" id="ex1-tabs-1" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-schedules-inner">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    
                                </div>
                                <h5>Improving the quality of the management.</h5>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>Dr. Ariful Islam Abid</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
  </section>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
