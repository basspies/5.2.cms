<?php
include 'includes/connect.php';
include 'includes/header.php';
?>

<div class="slideshow-container">

    <div class="slide fade">
      <img src="https://picsum.photos/id/1015/800/400" alt="Afbeelding 1">
      <div class="caption">Berglandschap</div>
    </div>

    <div class="slide fade">

  <?php 
$stmt = $conn->prepare( "SELECT image_url FROM slideshow" );
 $stmt->execute();
        $image_url = $stmt->fetch(PDO::FETCH_ASSOC)['image_url'];

?>

      <img src="<?php echo ($image_url); ?>" alt="Afbeelding 2">
      <div class="caption">title</div>
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
    <div class="tekst_homepage_span">
  <h2>Home</h2><br>
  <span>Van harte welkom op de website van praktijk MIRЯE!</span><br><br>

  <span>Een plek waar het woord 'verbinding' de</span>
    <span style="color: red;">rode</span> 
    <span>draad is.</span><br><br>

    <span>"Verbinding is de energie die bestaat tussen mensen wanneer zij zich gezien, 
      gehoord en gewaardeerd voelen, kunnen geven en ontvangen zonder oordeel en steun en kracht ontlenen aan de relatie.” Brown, B. (2010).</span><br><br>
    
      <span>Een zin die vele waarden van praktijk MIRЯE verwoorden. De ander zien, horen, waarderen, 'zijn' zonder oordeel, ondersteuning bieden in een
       periode waarin het minder goed gaat . De ander te helpen weer in zijn/haar kracht te komen.</span><br><br>

  </div>
  </div>

    <div class="image_homepage">
      <img src="https://picsum.photos/id/1020/800/400" alt="foto_homepage">
    </div>

  </div>





<?php include 'includes/footer.php';?>