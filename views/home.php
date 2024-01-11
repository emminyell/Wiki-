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
                        <a href="#" class="btn btn-warning">Read Wiki Now</a>
                    </div>

                </div>
            </div>
            <?php endforeach; ?>
        </div>
            <body>

   


</body>
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

