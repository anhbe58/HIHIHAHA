<?php
/*
	Template Name: HOME PAGE
*/
?>
<?php get_header(); ?>
<div class='row home-firstscreen'>
	<?php get_template_part( 'inc\slider' ); ?>
</div>
<div class='row pw-main-feature'>
	<?php get_template_part( 'inc\main-feature' ); ?>
</div>
<div class='row col-main test'></div>
<div class='row section-data test'></div>
<div class='row hyperchanel test'></div>
<?php get_footer(); ?>