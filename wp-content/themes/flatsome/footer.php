<?php
/**
 * The template for displaying the footer.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

global $flatsome_opt;
?>

</main>

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer>

</div>

<?php wp_footer(); ?>

</body>
<script type="text/javascript">

jQuery(document).ready(function () {

//Disable cut copy paste

jQuery('body').bind('cut copy paste', function (e) {

e.preventDefault();

});

//Disable mouse right click

jQuery("body").on("contextmenu",function(e){

return false;

});

});

</script>
</html>
