<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>
  <!-- Copyright -->
  <div class="text-center p-4" id="footerstyle">
    © 2022 Copyright by
    <a class="text-reset fw-bold" href="https://anch.guru/">Anch.Guru</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<?php do_action( 'storefront_after_footer' ); ?>
<?php wp_footer(); ?>
</body>
</html>
