<footer>
  <div class="container">
    <div class="footer-nav">
      <div class="first-line">
        <div class="logo">
          <img src="<?= get_template_directory_uri(); ?> /assets//images/image 4.png" alt="">
        </div>
        <h6 id="who-we-are-btn">WHO WE ARE</h6>
        <h6 id="where-we-work-btn">WHERE WE WORK</h6>
        <h6 id="follow-us-btn">FOLLOW US</h6>
      </div>
      <div class="nav-one" id="who-we-are">
        <p>
          Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur sunt in culpa qui officia
          deserunt mollit anim qui officia deserunt mollit anim id est
          laborum.
        </p>
      </div>
      <div class="nav-two" id="where-we-work">>
        <ul>
          <li>
            <a href="#"><i class="fa-solid fa-chevron-right"></i>Homepage</a>
          </li>
          <li>
            <a href="#"><i class="fa-solid fa-chevron-right"></i>About</a>
          </li>
          <li>
            <a href="#"><i class="fa-solid fa-chevron-right"></i>Schedule</a>
          </li>
          <li>
            <a href="#"><i class="fa-solid fa-chevron-right"></i>Gallery</a>
          </li>
          <li>
            <a href="#"><i class="fa-solid fa-chevron-right"></i>Contact</a>
          </li>
        </ul>
      </div>
      <div class="nav-three" id="follow-us">
        <ul>
          <li>
            <i class="fa-solid fa-map"></i>99 S.t Jomblo Park Pekanbaru
            28292. Indonesia
          </li>
          <li>
            <i class="fa-sharp fa-solid fa-phone"></i>(0761) 654-123987
          </li>
          <li><i class="fa-regular fa-envelope"></i>info@yoursite.com</li>
          <li><i class="fa-solid fa-clock"></i> Mon - Sat 09:00 - 17:00</li>
        </ul>
      </div>
      <div class="nav-four">
        <p>
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
        <div class="soc-media">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="help-image" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/images/path21630.png')"></div>
</footer>
<div class="foot">
  <div class="container">
  <p>Copyright 2021 © NGOO Figma Template. Designed by Rometheme.</p>
  </div>
</div>

<script src="/assets/js/script.js"></script>

<script>
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    navText: ['<i class="fa-solid fa-chevron-left aria-hidden="true"></i>', '<i class="fa-solid fa-chevron-right aria-hidden="true"></i>'],
    responsive: {
      0: {
        items: 1,
      },
      500: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
  $('#carouseltwo').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
    }
  });
</script>
<?php wp_footer(); ?>
</body>

</html>