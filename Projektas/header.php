<?php
/*wp_nav_menu(
array(
 'menu' => 'primary',
 'container' => '',
'theme_location' => 'primary'
)
 );*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php wp_head(); ?>
</head>

<body>
  <div class="header">
    <div class="container">
      <div class="header-content">
        <p><i>Urgent : Awesome Template for Charity & Non-profit Site</i></p>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
      </div>
    </div>
  </div>

  <div class="second-header">
    <div class="middlebar">
      <div class="container">
        <div class="scnd-header-content">
          <div class="logo">
            <img src="<?= get_template_directory_uri(); ?> /assets/images/image 3.png" alt="">
          </div>
          <div class="icon-container">
            <div class="icon-wrapper">
              <div class="icon-circle">
                <i class="fa-regular fa-envelope"></i>
              </div>
              <div class="icon-text">
                <div class="text-top">Mail</div>
                <div class="text-bottom">info@ngoocharity.com</div>
              </div>
            </div>
            <div class="icon-wrapper">
              <div class="icon-circle">
                <i class="fa-sharp fa-solid fa-phone"></i>
              </div>
              <div class="icon-text">
                <div class="text-top">Call Us</div>
                <div class="text-bottom">+62 7100 1234</div>
              </div>
            </div>
          </div>
          <button class="donate-btn">Donate Now</button>
        </div>
      </div>
    </div>
  </div>
  <div class="navigation">
    <nav class="navbar navbar-expand-sm">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

          <?php
            wp_nav_menu(
              array(
                  'menu' => 'primary',
                  'container' => '',
                  'theme_location' => 'primary',
                  'items_wrap' => '<ul id="" class="navbar-nav">%3$s</ul>'
              )
            );
          ?>
        </div>
      </div>
    </nav>