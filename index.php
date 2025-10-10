<?php include 'includes/header.php';?>

<div class="slideshow-images">
    <div class="mySlides-fade">
        <img src="images/slide1.jpg" style="width:100%">
    </div>

    <div class="mySlides-fade">
        <img src="images/slide2.jpg" style="width:100%">
    </div>

    <div class="mySlides-fade">
        <img src="images/slide3.jpg" style="width:100%">
    </div>

</div>

<div class="slideshow-buttons">
    <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
    <button class="next" onclick="plusSlides(1)">&#10095;</button>
</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
    }
</script>


<?php include 'includes/footer.php';?>