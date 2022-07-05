AOS.init();

// Slider Hasil
var slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides(slideIndex = n);
}

var myCarousel = document.getElementById('hasil-penelitian')


myCarousel.addEventListener('slid.bs.carousel', function () {
  const slide = myCarousel.querySelector('.active').getAttribute('data-bs-slide-to');
  currentSlide(parseInt(slide) + 1);
});

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    slides[slideIndex - 1].classList.remove('appear');
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(() => {
    slides[slideIndex - 1].classList.add('appear');
  }, 100)
}