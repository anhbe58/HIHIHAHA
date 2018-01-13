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
<div class='row pcb-4-tab'>
	<?php get_template_part( 'inc\col-main' ); ?>
</div>
<div class='row section-data'>
	<?php get_template_part( 'inc\section-data' ); ?>
</div>
<div class='row hyperchanel test'></div>
<?php get_footer(); ?>