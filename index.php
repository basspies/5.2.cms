<?php 
include 'includes/header.php';
include 'includes/connect.php';
?>

<div class="slideshow-container">

    <div class="slide fade">
      <img src="https://picsum.photos/id/1015/800/400" alt="Afbeelding 1">
      <div class="caption">Berglandschap</div>
    </div>

    <div class="slide fade">
      <img src="https://picsum.photos/id/1016/800/400" alt="Afbeelding 2">
      <div class="caption">Zonsondergang</div>
    </div>

    <div class="slide fade">
      <img src="https://picsum.photos/id/1020/800/400" alt="Afbeelding 3">
      <div class="caption">Meer met bergen</div>
    </div>

    <!-- Navigatie pijlen -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>

  <div class="dots">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <script src="script.js"></script>

  <div class="lijn"></div>

  <div class="container_homepage">

    <div class="tekst_homepage">
    dsofhsdophjsd
    </div>

    <div class="image_homepage">
      <img src="https://picsum.photos/id/1016/800/400" alt="dit">
hhjhhhhhj
    </div>

  </div>




<?php include 'includes/footer.php';?>