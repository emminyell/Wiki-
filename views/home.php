<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <title>Document</title>
  <link rel="stylesheet" href="<?= APP_URL ?>public/Assets/css/style.scss">
</head>
<style>
    .container .card-body{
        background-color: #18151f; 
    }
</style>
<body>

<?php
include('../Views/includes/navbar.php');
?>


<section class="dark">
	<div class="container py-4">
		<h1 class="h1 text-center" id="pageHeaderTitle">Recent Wikis</h1>
        <?php foreach ($RallWikis as $Rwiki): ?>
		<article class="postcard dark blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="<?= APP_URL ?>public/assets/images/image.jpg" alt="Image Title" />
			</a>
            
			<div class="postcard__text">
				<h6 class="postcard__title blue"><a href="#"><?= $Rwiki['titre'] ?></a></h6>
				<div class="postcard__subtitle small">
                    <p><?= $Rwiki['nom'] ?></p>
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i><?= $Rwiki['date_creation'] ?>
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><?= $Rwiki['contenu'] ?></div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>5mins.</li>
					<li class="tag__item play blue">
						<a href="#"><i class="fas fa-play mr-2"></i>Read Wiki Now</a>
					</li>
				</ul>
			</div>
		</article>
        <?php endforeach; ?>
        </div>
       
        </section>
        </section>
        <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
                    <div class=" col-lg-4 " >
                        <h1 class="d-flex justify-content-center align-items-center">About Us</h1>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="quote-wrapper">
                                    <p class="text-light">Our Wiki platform is dedicated to creating a seamless user experience, fusing a powerful content management system with an intuitive front-end interface. Embrace collaborative knowledge-sharing on our platform—where every article contributes to our goal of building a collective repository of information. Our slogan: Share Your Insights, Shape the Future.</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
         <section class="cat">
   
   <div class="contents">
      <!-- card -->
      <div class="cardss">
         
            <div class="icons"><i class="material-icons md-36"></i></div>
            <p class="titles">Categories</p>
            <p class="texts">Click to see our categories.</p>
         
      </div>
      <!-- end card -->
      <!-- card -->
      <div class="cardss">
         
            <div class="icons"><i class="material-icons md-36"></i></div>
            <p class="titles">Tags</p>
            <p class="texts">Check all your favourites in one place.</p>
         
      </div>
      <!-- end card -->
      <!-- card -->
      <div class="cardss">
         
            <div class="icons"><i class="material-icons md-36"></i></div>
            <p class="titles">Wikis</p>
            <p class="texts">view all our wikis in our platform.</p>
         
      </div>
      <!-- end card -->
   

   
   </div>
</div>



    <section>
    <div class="container">
        <h2 class="text-center mb-4">Categories</h2>
        <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $active = true; ?>
                <?php foreach ($allcategories as $categorie): ?>
                    <div class="carousel-item <?= $active ? 'active' : '' ?>">
                        <div class="card d-flex text-center">
                            <div class="card-body">
                            
                                <h4 class="card-title text-light""><?= $categorie['nom'] ?></h4>
                           
                            </div>
                        </div>
                    </div>
                    <?php $active = false; ?>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<section>
<div class="container mt-5">
    <div class="row">
    <h2 class="text-center mb-4">Recent Categories</h2>

      <!-- Category Card 1 -->
      <?php foreach ($Rallcategories as $Rcategorie): ?>
      <div class="col-md-4 mb-4">
          <div class="cardss">
            <div><i class="fa-solid fa-layer-group fa-xl" style="color: #FFD43B;"></i></div>
            <h5 class="card-title text-light"><?= $Rcategorie['nom'] ?></h5>
          </div>
      </div>
      <?php endforeach; ?>
      </div>
      </div>
    </section>
    <section>

    </section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<!-- caroussel -->
<script>
    // Initialization for ES Users
    import { Carousel, initMDB } from "mdb-ui-kit";

    initMDB({ Carousel });
</script>
<?php
include('../Views/includes/footer.php')
?>
</body>
</html>
