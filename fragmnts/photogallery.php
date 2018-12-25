
<!DOCTYPE HTML >
<html lang="en">

<body>

<div class="container">

    <!-- Full-width images with number text -->
    <div class="mySlides">
        <div class="numbertext">1 / 9</div>
        <img src="/img/1.jpg" >
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 9</div>
        <img src="/img/2.jpg" >
    </div>

    <div class="mySlides">
        <div class="numbertext">3 / 9</div>
        <img src="/img/3.jpg"  >
    </div>

    <div class="mySlides">
        <div class="numbertext">4 / 9</div>
        <img src="/img/4.jpg"  >
    </div>

    <div class="mySlides">
        <div class="numbertext">5 / 9</div>
        <img src="/img/5.jpg" >
    </div>

    <div class="mySlides">
        <div class="numbertext">6 / 9</div>
        <img src="/img/6.jpg" >
    </div>

    <div class="mySlides">
        <div class="numbertext">7 / 9</div>
        <img src="/img/7.jpg" >
    </div>

    <div class="mySlides">
        <div class="numbertext">8 / 9</div>
        <img src="/img/8.jpg" >
    </div>

    <div class="mySlides">
        <div class="numbertext">9 / 9</div>
        <img src="/img/9.jpg" >
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    if(slideIndex ==1){

    }
    function plusSlides(n) {
            showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>
</body>
<html>
