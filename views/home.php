<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <title>Document</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");
$main-green: #79dd09 !default;
$main-green-rgb-015: rgba(121, 221, 9, 0.1) !default;
$main-yellow: #bdbb49 !default;
$main-yellow-rgb-015: rgba(189, 187, 73, 0.1) !default;
$main-red: #bd150b !default;
$main-red-rgb-015: rgba(189, 21, 11, 0.1) !default;
$main-blue: #0076bd !default;
$main-blue-rgb-015: rgba(0, 118, 189, 0.1) !default;

/* This pen */
body {
	font-family: "Baloo 2", cursive;
	font-size: 16px;
	color: #ffffff;
	text-rendering: optimizeLegibility;
	font-weight: initial;
}

.dark {
	background: #110f16;
}


.light {
	background: #f3f5f7;
}

a, a:hover {
	text-decoration: none;
	transition: color 0.3s ease-in-out;
}

#pageHeaderTitle {
	margin: 2rem 0;
	text-transform: uppercase;
	text-align: center;
	font-size: 2.5rem;
}

/* Cards */
.postcard {
  flex-wrap: wrap;
  display: flex;
  
  box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
  border-radius: 10px;
  margin: 0 0 2rem 0;
  overflow: hidden;
  position: relative;
  color: #ffffff;

	&.dark {
		background-color: #18151f;
	}
	&.light {
		background-color: #e1e5ea;
	}
	
	.t-dark {
		color: #18151f;
	}
	
  a {
    color: inherit;
  }
	
	h6,	.h6 {
		margin-bottom: 0.5rem;
		font-weight: 500;
		line-height: 1.2;
	}
	
	.small {
		font-size: 80%;
	}

  .postcard__title {
    font-size: 1.75rem;
  }

  .postcard__img {
    max-height: 180px;
    width: 100%;
    object-fit: cover;
    position: relative;
  }

  .postcard__img_link {
    display: contents;
  }

  .postcard__bar {
    width: 50px;
    height: 10px;
    margin: 10px 0;
    border-radius: 5px;
    background-color: #424242;
    transition: width 0.2s ease;
  }

  .postcard__text {
    padding: 1.5rem;
    position: relative;
    display: flex;
    flex-direction: column;
  }

  .postcard__preview-txt {
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: justify;
    height: 100%;
  }

  .postcard__tagbox {
    display: flex;
    flex-flow: row wrap;
    font-size: 14px;
    margin: 20px 0 0 0;
		padding: 0;
    justify-content: center;

    .tag__item {
      display: inline-block;
      background: rgba(83, 83, 83, 0.4);
      border-radius: 3px;
      padding: 2.5px 10px;
      margin: 0 5px 5px 0;
      cursor: default;
      user-select: none;
      transition: background-color 0.3s;

      &:hover {
        background: rgba(83, 83, 83, 0.8);
      }
    }
  }

  &:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-image: linear-gradient(-70deg, #424242, transparent 50%);
    opacity: 1;
    border-radius: 10px;
  }

  &:hover .postcard__bar {
    width: 100px;
  }
}

@media screen and (min-width: 769px) {
  .postcard {
    flex-wrap: inherit;

    .postcard__title {
      font-size: 2rem;
    }

    .postcard__tagbox {
      justify-content: start;
    }

    .postcard__img {
      max-width: 300px;
      max-height: 100%;
      transition: transform 0.3s ease;
    }

    .postcard__text {
      padding: 3rem;
      width: 100%;
    }

    .media.postcard__text:before {
      content: "";
      position: absolute;
      display: block;
      background: #18151f;
      top: -20%;
      height: 130%;
      width: 55px;
    }

    &:hover .postcard__img {
      transform: scale(1.1);
    }

    &:nth-child(2n+1) {
      flex-direction: row;
    }

    &:nth-child(2n+0) {
      flex-direction: row-reverse;
    }

    &:nth-child(2n+1) .postcard__text::before {
      left: -12px !important;
      transform: rotate(4deg);
    }

    &:nth-child(2n+0) .postcard__text::before {
      right: -12px !important;
      transform: rotate(-4deg);
    }
  }
}
@import url("https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-size: 16px;
  font-weight: 300;
  line-height: 23px;
  font-family: "Poppins", sans-serif;
}

ul {
  list-style-type: none;
}

a,
a:hover {
  text-decoration: none;
}

body {
  font-family: "Montserrat", sans-serif;
}
body .testimonial {
  padding: 100px 0;
  color: white;
}

body .testimonial .row .tabs {
  all: unset;
  margin-right: 50px;
  display: flex;
  flex-direction: column;
  color: white; /* Add this line to set text color to white */
}
body .testimonial .row .tabs li {
  all: unset;
  display: block;
  position: relative;
}
body .testimonial .row .tabs li.active::before {
  position: absolute;
  content: "";
  width: 50px;
  height: 50px;
  background-color: #ffc107;
  border-radius: 50%;
}
body .testimonial .row .tabs li.active::after {
  position: absolute;
  content: "";
  width: 30px;
  height: 30px;
  background-color: #ffc107;
  border-radius: 50%;
}
body .testimonial .row .tabs li:nth-child(1) {
  align-self: flex-end;
}
body .testimonial .row .tabs li:nth-child(1)::before {
  left: 64%;
  bottom: -50px;
}
body .testimonial .row .tabs li:nth-child(1)::after {
  left: 97%;
  bottom: -81px;
}
body .testimonial .row .tabs li:nth-child(1) figure img {
  margin-left: auto;
}
body .testimonial .row .tabs li:nth-child(2) {
  align-self: flex-start;
}
body .testimonial .row .tabs li:nth-child(2)::before {
  right: -65px;
  top: 50%;
}
body .testimonial .row .tabs li:nth-child(2)::after {
  bottom: 101px;
  border-radius: 50%;
  right: -120px;
}
body .testimonial .row .tabs li:nth-child(2) figure img {
  margin-right: auto;
  max-width: 300px;
  width: 100%;
  margin-top: -50px;
}
body .testimonial .row .tabs li:nth-child(3) {
  align-self: flex-end;
}
body .testimonial .row .tabs li:nth-child(3)::before {
  right: -10px;
  top: -66%;
}
body .testimonial .row .tabs li:nth-child(3)::after {
  top: -130px;
  border-radius: 50%;
  right: -46px;
}
body .testimonial .row .tabs li:nth-child(3) figure img {
  margin-left: auto;
  margin-top: -50px;
}
body .testimonial .row .tabs li:nth-child(3):focus {
  border: 10px solid red;
}
body .testimonial .row .tabs li figure {
  position: relative;
}
body .testimonial .row .tabs li figure img {
  display: block;
}
body .testimonial .row .tabs li figure::after {
  content: "";
  position: absolute;
  top: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  border: 4px solid #dff9d9;
  border-radius: 50%;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
body .testimonial .row .tabs li figure:hover::after {
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
body .testimonial .row .tabs.carousel-indicators li.active figure::after {
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
body .testimonial .row .carousel > h3 {
  font-size: 20px;
  line-height: 1.45;
  color: rgba(0, 0, 0, 0.5);
  font-weight: 600;
  margin-bottom: 0;
}
body .testimonial .row .carousel h1 {
  font-size: 40px;
  line-height: 1.225;
  margin-top: 23px;
  font-weight: 700;
  margin-bottom: 0;
}
body .testimonial .row .carousel .carousel-indicators {
  all: unset;
  padding-top: 43px;
  display: flex;
  list-style: none;
}
body .testimonial .row .carousel .carousel-indicators li {
  background: #000;
  background-clip: padding-box;
  height: 2px;
}
body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper {
  margin-top: 42px;
}
body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper p {
  font-size: 18px;
  line-height: 1.72222;
  font-weight: 500;
  color: rgba(0, 0, 0, 0.7);
}
body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper h3 {
  color: #000;
  font-weight: 700;
  margin-top: 37px;
  font-size: 20px;
  line-height: 1.45;
  text-transform: uppercase;
}

@media only screen and (max-width: 1200px) {
  body .testimonial .row .tabs {
    margin-right: 25px;
  }
}


    </style>
</head>

<body>

<?php
include('../Views/includes/navbar.php');
?>


<section class="dark">
	<div class="container py-4">
		<h1 class="h1 text-center" id="pageHeaderTitle">Recent Wikis</h1>
        <?php foreach ($allWikis as $wiki): ?>
		<article class="postcard dark blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="<?= APP_URL ?>public/assets/images/image.jpg" alt="Image Title" />
			</a>
            
			<div class="postcard__text">
				<h6 class="postcard__title blue"><a href="#"><?= $wiki['titre'] ?></a></h6>
				<div class="postcard__subtitle small">
                    <p><?= $wiki['nom'] ?></p>
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><?= $wiki['contenu'] ?></div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play blue">
						<a href="#"><i class="fas fa-play mr-2"></i>Read Wiki Now</a>
					</li>
				</ul>
			</div>
		</article>
        <?php endforeach; ?>
        </div>
        </section>
        <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                    <ol class="carousel-indicators tabs">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                            <figure>
                                <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-01-179x179.png" class="img-fluid" alt="">
                            </figure>
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">
                            <figure>
                                <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-02-306x306.png" class="img-fluid" alt="">
                            </figure>
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">
                            <figure>
                                <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-03-179x179.png" class="img-fluid" alt="">
                            </figure>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div id="carouselExampleIndicators" data-interval="false" class="carousel slide" data-ride="carousel">

                        <h1>About Us</h1>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="quote-wrapper">
                                    <p class="text-light">I have tried a lot of food delivery services but Plate is something out of this world! Their food is really healthy and it tastes great, which is why I recommend this company to all my friends!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p>I have tried a lot of food delivery services but Plate is something out of this world! Their food is really healthy and it tastes great, which is why I recommend this company to all my friends!</p>
                                    <h3>peter lee</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p>I have tried a lot of food delivery services but Plate is something out of this world! Their food is really healthy and it tastes great, which is why I recommend this company to all my friends!</p>
                                    <h3>peter lee</h3>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class=" py-5">
    <div class="container">
        <h2 class="text-center mb-4">Recent Categories</h2>
        <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $active = true; ?>
                <?php foreach ($allcategories as $categorie): ?>
                    <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="font-weight-bold"><?= $categorie['nom'] ?></h5>
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

    $(document).ready(function(){
  $(".testimonial .indicators li").click(function(){
    var i = $(this).index();
    var targetElement = $(".testimonial .tabs li");
    targetElement.eq(i).addClass('active');
    targetElement.not(targetElement[i]).removeClass('active');
            });
            $(".testimonial .tabs li").click(function(){
                var targetElement = $(".testimonial .tabs li");
                targetElement.addClass('active');
                targetElement.not($(this)).removeClass('active');
            });
        });
$(document).ready(function(){
    $(".slider .swiper-pagination span").each(function(i){
        $(this).text(i+1).prepend("0");
    });
});
</script>
<?php
include('../Views/includes/footer.php')
?>
</body>
</html>
