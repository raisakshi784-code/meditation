<?php 

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

	<style>

		*{box-sizing: border-box;}
html{scroll-behavior: smooth;}
section{width: 100%;}


body {
  min-height: 100vh;
}
body::before {
  content: "";
  position: fixed;
  inset: 0;
  z-index: -1;
  background-image: url("https://images.unsplash.com/photo-1544367567-0f2fcb009e0b");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

@media (max-width: 991.98px) {
  body::before {
    background-attachment: scroll;
  }
}

.sheet-frost {
  background: rgba(255, 255, 255, 0.78);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-radius: 0.75rem;
  box-shadow: 0 0.35rem 1.25rem rgba(0, 0, 0, 0.08);
}
.sheet-frost-muted {
  background: rgba(248, 249, 250, 0.8);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-radius: 0.75rem;
  box-shadow: 0 0.35rem 1.25rem rgba(0, 0, 0, 0.08);
}
.footer-glass {
  background: rgba(33, 37, 41, 0.88);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  border-radius: 0.75rem;
}

.vh-section {
  min-height: auto;
  display: flex;
  justify-content: center;
}

.card-group {
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translate(-50%,50%);
  width: 90%;
}
.testimonials {
  text-align: center;
  padding: 50px;
  color: white;
}

.slide {
  display: none;
}

.slide.active {
  display: block;
}

.avatar {
  width: 250px;
  height: 250px;
  border-radius: 50%;
}

.SV span {
  height: 20px;
  width: 20px;
  background: white;
  display: inline-block;
  margin: 5px;
  border-radius: 50%;
  cursor: pointer;
}

.hero-parallax {
  min-height: 100vh;
}
.hero-parallax-overlay {
  position: absolute;
  inset: 0;
  z-index: 0;
  background: rgba(0, 0, 0, 0.32);
  pointer-events: none;
}
.hero-parallax-content {
  z-index: 1;
}



.video-hub .video-list .list-group-item {
  cursor: pointer;
  text-align: left;
  border-radius: 0.375rem;
  margin-bottom: 0.35rem;
  border: 1px solid rgba(0, 0, 0, 0.12);
}
.video-hub .video-list .list-group-item:hover {
  background: rgba(13, 110, 253, 0.08);
}
.video-hub .video-list .list-group-item.active {
  background: var(--bs-primary);
  color: #fff;
  border-color: var(--bs-primary);
}
.video-hub #main-video-stage .ratio iframe {
  border-radius: 0.375rem;
}
.video-hub #main-video-stage video {
  width: 100%;
  height: 100%;
  object-fit: contain;
  border-radius: 0.375rem;
  background: #000;
}
    .logo {
  width: 40px;
  height: 40px;
  border-radius: 50%;   
  object-fit: cover;    
}
	</style>
 </head>
 <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light shadow-sm">
<div class="container">
<a class="navbar-brand d-flex align-items-center" href="#">
<img src="iconY.PNG" alt="Logo" class="logo">
<span class="Yoga-line">Yog-Guru</span></a>
<button class="navbar-toggler"type="button"data-bs-toggle="collapse"data-bs-target="#navbarNav">
 <span class="navbar-toggler-icon"></span>
 </button>
<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link active" href="home.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="read_more2.php">Gallery</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contus.php">Contact-Us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="dow.php">Registretion</a>
</li>
</ul>
</div>
</div>
</nav>
<section class="vh-section">
<div class="container-fluid p-0 position-relative hero-parallax">
<div class="hero-parallax-overlay" aria-hidden="true"></div>
<div class="position-absolute top-50 start-50 translate-middle text-center text-white hero-parallax-content px-3">
<h1 class="fw-bold">MEDITATION</h1>
<p>If we can make just 1% of the population meditative, this world will be a different place - Sadhguru</p>
<a href="read_more.php" class="btn btn-outline-light">Read More</a>
</div>
</div>
 </section> 
<div class="container my-5 p-4 sheet-frost">
<div class="row align-items-center">
<div class="col-md-4">
<img src="buddha.jpg" class="img-fluid rounded shadow" alt="Meditation">
</div>
<div class="col-md-8">
 <h2 class="fw-bold">
 How <span class="text-primary">Meditation</span> Helps?
 </h2>
 <hr style="width: 60px; border: 2px solid #0d6efd;">
 <p class="text-primary">
Most of us spend the majority of our time thinking about the past or the future (regretting, worrying, planning), or checking out completely into the land of cell phones and social media. Many of the benefits of yoga stem from the ability to unplug and focus on what’s going on in your body and in your life right now. Happiness can only be found here and now. Yoga reduces perceived stress and anxiety, which in turn reduces the physical effects of stress on the body. By encouraging relaxation, yoga helps to lower the levels of the stress hormones such as cortisol. Related benefits include lowering blood pressure and heart rate, improving digestion and boosting the immune system. When we are less stressed we sleep better, and when we sleep better we are less stressed. Physical activity and mental relaxation fuel this virtuous cycle. A variety of studies have shown that yoga can improve sleep quality and quantity in people struggling with insomnia. Other studies have shown similar results in other groups of people, including cancer survivors and postmenopausal women</p>
<a href="read_more2.php" class="btn btn-primary">Read More...</a>
</div>
</div>
</div>	
<section class="testimonials bg-img d-flex flex-column align-items-center justify-content-center text-white">

<h2 class="mb-4">Testimonials</h2>

<div class="slider">

  <div class="slide active">
    <img src="baba-ramdev.jpg" class="avatar">
    <p>Great Yoga Experience</p>
    <h4>Baba Ramdev</h4>
  </div>

  <div class="slide">
    <img src="2.jpg" class="avatar">
    <p>Very helpful</p>
    <h4>User Name</h4>
  </div>

  <div class="slide">
    <img src="img3.jpg" class="avatar">
    <p>Amazing classes</p>
    <h4>User Name</h4>
  </div>

  <div class="slide">
    <img src="4.jpg" class="avatar">
    <p>Loved it</p>
    <h4>User Name</h4>
  </div>

</div>

<div class="SV mt-3">
  <span onclick="currentSlide(0)"></span>
  <span onclick="currentSlide(1)"></span>
  <span onclick="currentSlide(2)"></span>
  <span onclick="currentSlide(3)"></span>
</div>

</section><div class="container my-5 p-4 sheet-frost-muted shadow-sm">
<div class="row align-items-start g-4">
<div class="col-lg-3 col-md-12">
<h3 class="text-primary border-bottom pb-2 mb-3">Videos</h3>
<div class="list-group video-list" role="tablist">
<button type="button" class="list-group-item list-group-item-action active" data-video-index="0">Video 1</button>
<button type="button" class="list-group-item list-group-item-action" data-video-index="1">Video 2</button>
<button type="button" class="list-group-item list-group-item-action" data-video-index="2">Video 3</button>
<button type="button" class="list-group-item list-group-item-action" data-video-index="3">Video 4</button>
<button type="button" class="list-group-item list-group-item-action" data-video-index="4">Video 5</button>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div id="main-video-stage" class="bg-dark rounded overflow-hidden border shadow-sm">
<div class="ratio ratio-16x9">
<iframe id="main-video-iframe" class="d-none" src="https://www.youtube.com/embed/v7AYKMP6rOE" title="Selected video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<video id="main-video-mp4" class="d-none" controls playsinline preload="metadata">
<source src="" type="video/mp4">
</video>
</div>
</div>
</div>
<div class="col-lg-3 col-md-12 text-center">
<div class="d-flex flex-column align-items-center">
<i class="bi bi-download fs-1 text-success"></i>
<h4 class="mt-2"><a href="dow.php" class="link-secondary text-decoration-none">Download<br><img src="don.jpg" style="height: 50px; width: 50px;"></a></h4>
</div>
</div>
</div>
</div>
</section>
<div class="container my-5 p-4 footer-glass text-light bg-dark shadow-sm fs-1 text-al">
<div class="footer">Meditation.com ©️ 2026 Company,Inc.  <a href="#">· Privacy · Terms</a></div>
</div>

<script>
(function () {
  var hubVideos = [
    { kind: "mp4", src: "yogaV1.mp4" },
    { kind: "mp4", src: "yogaV2.mp4" },
    { kind: "mp4", src: "yogaV3.mp4" },
    { kind: "mp4", src: "yogaV4.mp4" },
    { kind: "mp4", src: "yogaV5.mp4" }
  ];
})();
</script>
<script>
let slides = document.querySelectorAll(".slide");
let dots = document.querySelectorAll(".SV span");
let currentIndex = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove("active");
    dots[i].classList.remove("active");
  });

  slides[index].classList.add("active");
  dots[index].classList.add("active");
  currentIndex = index;
}

function currentSlide(index) {
  showSlide(index);
}

setInterval(() => {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
}, 3000);

showSlide(0);
</script>

 </body>
 </html>