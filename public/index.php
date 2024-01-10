<?php  
include '../views/header.php'; 
require_once '../controller/HomeController.php';

$homeModel = new HomeModel();
$allWikis = $homeModel->getWikis();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
</head>
<body>
<section>
    <div class="container mt-5">
        <h2 class="text-center mb-4 ">Recent Wikis</h2>
        <div class="row">
        <?php foreach ($allWikis as $wiki): ?>
      <div class="col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center">
        <a href="" class="card stretched-link text-decoration-none">
          <div style="max-width: 23rem;" class="card">
            <img src="<?= APP_URL ?>Assets/images/article.jpg" alt="gara">
              <!-- style="height: 9rem;" class="my-2 position-relative"> -->
            <div class="card-body">
              <div class="card-head">
                <h5 class="card-title fw-semibold text-center">
                  <?= $wiki['titre'] ?>
                </h5>
                <p class="text-center">
                  <?= $wiki['date_creation'] ?>
                </p>
                <p class="card-text text-center text-truncate">
                  <?= $wiki['contenu'] ?>
                </p>
                <a href="#" class="btn btn-warning">read</a>
              </div>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
          
            <!-- <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="Assets/images/image.jpg" class="card-img-top img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">title</h5>
                        <p class="card-text">descr.</p>
                        <a href="#" class="btn btn-warning">Read Now Now</a>
                    </div>
                </div>
            </div>
            <body>

   
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="Assets/images/image.jpg" class="card-img-top img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">title</h5>
                        <p class="card-text">descr.</p>
                        <a href="#" class="btn btn-warning">Read Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="Assets/images/image.jpg" class="card-img-top img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">title</h5>
                        <p class="card-text">descr.</p>
                        <a href="#" class="btn btn-warning">Read Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="Assets/images/image.jpg" class="card-img-top img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">title</h5>
                        <p class="card-text">descr.</p>
                        <a href="#" class="btn btn-warning">Read Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="Assets/images/image.jpg" class="card-img-top img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">title</h5>
                        <p class="card-text">descr.</p>
                        <a href="#" class="btn btn-warning">Read Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="Assets/images/image.jpg" class="card-img-top img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">title</h5>
                        <p class="card-text">descr.</p>
                        <a href="#" class="btn btn-warning">Read Now</a>
                    </div>
                </div>
            </div>
             -->
        </div>
    </div>

</section>

<section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4 text-warning">What Our Guests Say</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner  conatiner-sm">
                    <div class="carousel-item active">
                        <p class="lead">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur purus
                            quis felis vestibulum, ac ultricies odio condimentum. Ut bibendum turpis vel libero
                            venenatis, et ultricies odio condimentum."</p>
                        <h5 class="font-weight-bold">John Doe</h5>
                    </div>
                    <div class="carousel-item">
                    <p class="lead">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur purus
                            quis felis vestibulum, ac ultricies odio condimentum. Ut bibendum turpis vel libero
                            venenatis, et ultricies odio condimentum."</p>
                        <h5 class="font-weight-bold">John Doe</h5>
                    </div>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <?php  
    include '../views/footer.php'; 
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
