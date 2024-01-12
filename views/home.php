<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <title>Document</title>
</head>
<?php
include('../Views/includes/navbar.php');

?>

  <section>
    <div class="container mt-5">
        <h2 class="text-center mb-4 ">Recent Wikis</h2>
        <div class="row">
        <?php foreach ($allWikis as $wiki): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?= APP_URL ?>public/assets/images/image.jpg" class="card-img-top img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title"><?= $wiki['titre'] ?></h5>
                        <p class="card-text"><?= $wiki['nom'] ?></p>
                        <p class="card-text text-center text-truncate">
                          <?= $wiki['contenu'] ?>
                        </p>
                        <a href="#" class="btn btn-warning">Read Wiki Now </a>
                    </div>

                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <section class=" py-5">
        <div class="container">
            <h2 class="text-center mb-4">Recent Categories</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner  conatiner-sm">
                <?php foreach ($allcategories as $categorie): ?>
                      <div class="card">
                      <div class="card-body">
                      <div class="carousel-item active">
                        <h5 class="font-weight-bold"><?= $categorie['nom'] ?></h5>
                    </div>
                    </div>
               
                    <?php endforeach; ?>
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
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
   


    <?php
include('../Views/includes/footer.php');

?>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="../../public/assets/lib/easing/easing.min.js"></script>
<script src="../../public/assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../../public/assets/lib/isotope/isotope.pkgd.min.js"></script>
<script src="../../public/assets/lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="../../public/assets/js/mail/jqBootstrapValidation.min.js"></script>
<script src="../../public/assets/js/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="../../public/assets/js/main.js"></script>

<!-- caroussel -->
<script>
// Initialization for ES Users
import { Carousel, initMDB } from "mdb-ui-kit";

initMDB({ Carousel });
</script>
</body>
</html>