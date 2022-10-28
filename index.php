<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */



get_header(); ?>

<div id="hero">
<h1>Anch Skateshop</h1>
    <p class="lead">Skate ipsum dolor sit amet, frontside air half-flip tail method air late Steve Alba. Hang ten carve shinner deck handplant. Slappy air switch sponsored Cross Bones speed wobbles. Rails tailslide skater pop shove-it camel back.</p>
    <p class="lead">
      <a href="https://anch.guru/storefront/shop/" class="btn">Learn more</a>
    </p>
  </div>

  <div id="free"> <b></br><p>Free shipping on orders with a minimum spending of 1000 kr.</p></b></div>

  <div class="container">
      <!-- Row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>News</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <p><a class="btn" href="https://nyheder.tv2.dk/" role="button" title="Nyheder">Læs nyheder »</a></p>
        </div>
        <div class="col-md-4" id="col-pic">
          <img src="img\BLUEPINK-INLINE_ADS_IG-SQUARE_12_1445x.webp" alt="">
        </div>
        <div class="col-md-4">
          <h2>Contact</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <p><a class="btn" href="mailto: mail@mail.dk" role="button" title="Kontakt os">Email »</a></p>
        </div>
      </div>
      <hr>
    </div>


<?php
get_footer();
