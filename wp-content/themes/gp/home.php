<?php

/*

Template Name: Home Page

*/

?>

<?php get_header(); ?>



<!--VIDEO-->

<div class="video-container">
    <video preload="none" poster="<?php bloginfo('template_url'); ?>/video/poster/gp-partners-poster.jpg" autoplay loop muted playsinline>

	<source src="https://iwkannualreport-10adb.kxcdn.com/videos/gp-partners-video-loop.mp4" type="video/mp4">

	<!--<source src="<?php bloginfo('template_url'); ?>/video/gp-home-video.webm" type="video/webm">

	<source src="<?php bloginfo('template_url'); ?>/video/gp_home_video.ogv" type="video/ogv">-->

</video>
</div>

<!--VIDEO-->



<!--IE POSTER-->

<div class="ie-poster">

	<img src="<?php bloginfo('template_url'); ?>/images/home-page-poster.jpg" />

</div>



<!--LOGO-->

<div id="logo">

	<img src="<?php bloginfo('template_url'); ?>/images/branding/general-public-partners-white.svg" />

</div>

<!--LOGO-->



<!--ABOUT US-->

<section id="about" class="dzsparallaxer auto-init height-is-based-on-content" data-options="{ direction: 'reverse'}">
    
	<?php if ( get_field('about_us_bg_img') ): ?>
	
    <div class="dzsparallaxer--target" style="background-image: url(<?php the_field('about_us_bg_img'); ?>);height: 130%;background-repeat:no-repeat;background-size: cover;background-position:center;"></div>
	
	<?php else : ?>
	
	<div class="dzsparallaxer--target" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/blurred-crowd.jpg);height: 130%;background-repeat:no-repeat;background-size: cover;background-position:center;"></div>
	
	<?php endif;
	
	if ( get_field('about_text_colour') == 'dark' ): ?>
	<div class="content-container clearfix">
		
		<?php 
		if( have_rows('about_left_col') ):
		while( have_rows('about_left_col') ): the_row(); ?>
		
		<div class="one-third light-overlay">
		
			<div class="inner black-text">
			
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
				<?php the_sub_field('col_blurb'); ?>
			
			</div>
		
		</div>
		
		<?php endwhile;
		endif;
		
		if ( get_field('about_right_col') ): ?>

		<div class="two-third light-overlay">

			<div class="inner black-text">

				<?php the_field('about_right_col'); ?>

			</div>

		</div>
		
		<?php endif; ?>

	</div>
	
	<?php elseif ( get_field('about_text_colour') == 'light' ): ?>
	
	<div class="content-container clearfix">
			
		<?php 
		if( have_rows('about_left_col') ):
		while( have_rows('about_left_col') ): the_row(); ?>
			
		<div class="one-third">
			
			<div class="inner white-text">
				
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
				<?php the_sub_field('col_blurb'); ?>
				
			</div>
			
		</div>
			
		<?php endwhile;
		endif;
		
		if ( get_field('about_right_col') ): ?>
	
		<div class="two-third">
	
			<div class="inner white-text">
	
				<?php the_field('about_right_col'); ?>
	
			</div>
	
		</div>
			
		<?php endif; ?>
	
	</div>
		
	<?php else : ?>
	
	<div class="content-container clearfix">
			
		<?php 
		if( have_rows('about_left_col') ):
		while( have_rows('about_left_col') ): the_row(); ?>
			
		<div class="one-third">
			
			<div class="inner white-text">
				
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
				<?php the_sub_field('col_blurb'); ?>
				
			</div>
			
		</div>
			
		<?php endwhile;
		endif;
		
		if ( get_field('about_right_col') ): ?>
	
		<div class="two-third">
	
			<div class="inner white-text">
	
				<?php the_field('about_right_col'); ?>
	
			</div>
	
		</div>
			
		<?php endif; ?>
	
	</div>
	
	<?php endif; ?>

</section>

<!--ABOUT US-->



<!--FEATURED WORK-->

<section id="featured">

	<article class="clearfix">

		<div class="dark-text twentyfive">

			<div class="black-text" style="margin-bottom: 50px;">

				<h1 class="header">Featured Work</h1>

			</div>

		</div>

		<div class="dark-text sixtyfive">

			<?php echo do_shortcode('[portfolio]'); ?>

		</div>

	</article>

</section>

<!--FEATURED WORK-->



<!--WHAT WE DO-->

<?php if ( get_field('what_we_do_bg_img') ): ?>
<section id="what" style="background-image: url(<?php the_field('what_we_do_bg_img'); ?>);">

<?php else : ?>

<section id="what" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/subway-wall.jpg);">

<?php endif;

	if ( get_field('what_text_colour') == 'dark' ): ?>
	<article class="clearfix">
		
		<?php 
		if( have_rows('left_col') ):
		while( have_rows('left_col') ): the_row(); ?>

		<div class="one-third light-overlay">

			<div class="inner black-text">

				<h4><?php the_sub_field('col_title'); ?></h4>

				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>

				<?php the_sub_field('col_blurb'); ?>

			</div>

		</div>
		
		<?php endwhile;
		endif; ?>
		
		<?php 
		if( have_rows('what_right_col') ):
		while( have_rows('what_right_col') ): the_row(); ?>
		
		<div class="two-third light-overlay">

			<div class="inner black-text">

				<?php the_sub_field('right_col_first_row'); ?>

			</div>
			
			<?php
			$firstcol = get_sub_field('what_right_col_second_row_1');
			$secondcol = get_sub_field('what_right_col_second_row_2');
			
			if ( $firstcol == true && $secondcol == true ): ?>
			
			<div class="two-col clearfix black-text inner" style="margin: 0;padding-top: 0;">

				<div class="l-col">
				    
				    <?php echo $firstcol; ?>

				</div>

				<div class="r-col">
				    
				    <?php echo $secondcol; ?>

				</div>

			</div>
			
			<?php endif; ?>

		</div>
		
		<?php
	    endwhile;
		endif;
		?>

	</article>
	
	<?php elseif ( get_field('what_text_colour') == 'light' ): ?>
	<article class="clearfix">
			
		<?php 
		if( have_rows('left_col') ):
		while( have_rows('left_col') ): the_row(); ?>
	
		<div class="one-third">
	
			<div class="inner white-text">
	
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
				<?php the_sub_field('col_blurb'); ?>
	
			</div>
	
		</div>
			
		<?php endwhile;
		endif; ?>
			
		<?php 
		if( have_rows('what_right_col') ):
		while( have_rows('what_right_col') ): the_row(); ?>
			
		<div class="two-third">
	
			<div class="inner white-text">
	
				<?php the_sub_field('right_col_first_row'); ?>
	
			</div>
				
			<?php
			$firstcol = get_sub_field('what_right_col_second_row_1');
			$secondcol = get_sub_field('what_right_col_second_row_2');
				
			if ( $firstcol == true && $secondcol == true ): ?>
				
			<div class="two-col clearfix white-text inner" style="margin: 0;padding-top: 0;">
	
				<div class="l-col">
					    
					<?php echo $firstcol; ?>
	
				</div>
	
				<div class="r-col">
					    
					<?php echo $secondcol; ?>
	
				</div>
	
			</div>
				
			<?php endif; ?>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
	
	</article>
	
	<?php else : ?>
	<article class="clearfix">
			
		<?php 
		if( have_rows('left_col') ):
		while( have_rows('left_col') ): the_row(); ?>
	
		<div class="one-third light-overlay">
	
			<div class="inner black-text">
	
				<h4><?php the_sub_field('col_title'); ?></h4>
	
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
	
				<?php the_sub_field('col_blurb'); ?>
	
			</div>
	
		</div>
			
		<?php endwhile;
		endif; ?>
			
		<?php 
		if( have_rows('what_right_col') ):
		while( have_rows('what_right_col') ): the_row(); ?>
			
		<div class="two-third light-overlay">
	
			<div class="inner black-text">
	
				<?php the_sub_field('right_col_first_row'); ?>
	
			</div>
				
			<?php
			$firstcol = get_sub_field('what_right_col_second_row_1');
			$secondcol = get_sub_field('what_right_col_second_row_2');
				
			if ( $firstcol == true && $secondcol == true ): ?>
				
			<div class="two-col clearfix black-text inner" style="margin: 0;padding-top: 0;">
	
				<div class="l-col">
					    
					<?php echo $firstcol; ?>
	
				</div>
	
				<div class="r-col">
					    
					<?php echo $secondcol; ?>
	
				</div>
	
			</div>
				
			<?php endif; ?>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
	
	</article>
	
	<?php endif; ?>

</section>

<!--WHAT WE DO-->



<!--HOW-->

<section id="how" class="dzsparallaxer auto-init height-is-based-on-content">
	
	<?php if ( get_field('how_bg_img') ): ?>
	
	<div class="dzsparallaxer--target" style="background-image: url(<?php the_field('how_bg_img'); ?>);height: 130%;background-repeat:no-repeat;background-size: cover;background-position:center;"></div>
	
	<?php else : ?>
	
	<div class="dzsparallaxer--target" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/turntables.jpg);height: 130%;background-repeat:no-repeat;background-size: cover;background-position:center;"></div>
	
	<?php endif;
	
	if ( get_field('how_text_colour') == 'dark' ): ?>
	<div class="content-container clearfix">
		    
		<?php 
		if( have_rows('how_left_col') ):
		while( have_rows('how_left_col') ): the_row(); ?>
	
		<div class="one-third light-overlay">
	
			<div class="inner black-text">
	
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
				<?php the_sub_field('col_blurb'); ?>
	
			</div>
	
		</div>
			
		<?php 
		endwhile;
		endif; ?>
			
		<?php if ( get_field('how_right_col') ): ?>
	
		<div class="two-third light-overlay">
	
			<div class="inner black-text">
	
				<?php the_field('how_right_col'); ?>
	
			</div>
	
		</div>
			
		<?php endif; ?>
	
	</div>
	
	<?php elseif ( get_field('how_text_colour') == 'light' ): ?>
	<div class="content-container clearfix">
	    
	    <?php 
		if( have_rows('how_left_col') ):
		while( have_rows('how_left_col') ): the_row(); ?>

		<div class="one-third">

			<div class="inner white-text">

				<h4><?php the_sub_field('col_title'); ?></h4>

				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>

				<?php the_sub_field('col_blurb'); ?>

			</div>

		</div>
		
		<?php 
		endwhile;
		endif; ?>
		
		<?php if ( get_field('how_right_col') ): ?>

		<div class="two-third">

			<div class="inner white-text">

				<?php the_field('how_right_col'); ?>

			</div>

		</div>
		
		<?php endif; ?>

	</div>
	
	<?php else : ?>
	<div class="content-container clearfix">
		    
		<?php 
		if( have_rows('how_left_col') ):
		while( have_rows('how_left_col') ): the_row(); ?>
	
		<div class="one-third">
	
			<div class="inner white-text">
	
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
				<?php the_sub_field('col_blurb'); ?>
	
			</div>
	
		</div>
			
		<?php 
		endwhile;
		endif; ?>
			
			<?php if ( get_field('how_right_col') ): ?>
	
		<div class="two-third">
	
			<div class="inner white-text">
	
				<?php the_field('how_right_col'); ?>
	
			</div>
	
		</div>
			
		<?php endif; ?>
	
	</div>
	<?php endif; ?>

</section>

<!--HOW-->

<!--WHO-->

<?php if ( get_field('who_bg_img') ): ?>
<section id="who" style="background-image: url(<?php the_field('who_bg_img'); ?>);">

<?php else : ?>

<section id="who" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/orange-wall.jpg);">

<?php endif;

	if ( get_field('who_text_colour') == 'dark' ): ?>
	<article class="clearfix no-column-bg">
	    
	    <?php 
		if( have_rows('who_left_col') ):
		while( have_rows('who_left_col') ): the_row(); ?>

		<div class="one-third black-text">

			<div class="inner">

				<h4><?php the_sub_field('col_title'); ?></h4>

				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>

				<?php the_sub_field('col_blurb'); ?>

			</div>

		</div>
		
		<?php
		endwhile;
		endif;
		?>
		
		<?php 
		if( have_rows('who_right_col') ):
		while( have_rows('who_right_col') ): the_row(); ?>

		<div class="two-third black-text">

			<div class="mobile-inner-padding">

				<?php the_sub_field('who_right_col_first_row'); ?>

			</div>

			<div class="two-col" style="margin-bottom: 25px;">

				<div class="mobile-inner-padding clearfix">
					<div class="l-col">
					    
					    <?php the_sub_field('who_right_col_second_row_1'); ?>
	
					</div>
	
					<div class="r-col">
					    
					    <?php the_sub_field('who_right_col_second_row_2'); ?>
	
					</div>
				</div>

			</div>
			
			<?php if ( get_sub_field('who_right_col_third_row') ): ?>
			<div class="mobile-inner-padding">

				<?php the_sub_field('who_right_col_third_row'); ?>

			</div>
			<?php endif; ?>
			
			<?php
			$wholastrow1 = get_sub_field('who_right_col_last_row_1');
			$wholastrow2 = get_sub_field('who_right_col_last_row_2');
			
			if ( $wholastrow1 == true && $wholastrow2 == true ): ?>
			
			<div class="two-col clearfix" style="margin-top: 0;">

				<div class="mobile-inner-padding clearfix">
					<div class="l-col">
					    
					    <?php echo $wholastrow1; ?>
	
					</div>
	
					<div class="r-col">
					    
					    <?php echo $wholastrow2; ?>
	
					</div>
				</div>

			</div>
			
			<?php endif; ?>

		</div>
		
		<?php
		endwhile;
		endif;
		?>

	</article>
	
	<?php elseif ( get_field('who_text_colour') == 'light' ): ?>
	<article class="clearfix no-column-bg">
		    
		<?php 
		if( have_rows('who_left_col') ):
		while( have_rows('who_left_col') ): the_row(); ?>
	
		<div class="one-third">
	
			<div class="mobile-inner-padding white-text">
	
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
				<?php the_sub_field('col_blurb'); ?>
	
			</div>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
			
		<?php 
		if( have_rows('who_right_col') ):
		while( have_rows('who_right_col') ): the_row(); ?>
	
		<div class="two-third">
	
			<div class="mobile-inner-padding white-text">
	
				<?php the_sub_field('who_right_col_first_row'); ?>
	
			</div>
	
			<div class="two-col white-text" style="margin-bottom: 25px;">
	
				<div class="mobile-inner-padding clearfix white-text">
					<div class="l-col">
						    
						<?php the_sub_field('who_right_col_second_row_1'); ?>
		
					</div>
		
					<div class="r-col">
						    
						<?php the_sub_field('who_right_col_second_row_2'); ?>
		
					</div>
				</div>
	
			</div>
				
			<?php if ( get_sub_field('who_right_col_third_row') ): ?>
			<div class="mobile-inner-padding white-text">
	
				<?php the_sub_field('who_right_col_third_row'); ?>
	
			</div>
			<?php endif; ?>
				
			<?php
			$wholastrow1 = get_sub_field('who_right_col_last_row_1');
			$wholastrow2 = get_sub_field('who_right_col_last_row_2');
				
			if ( $wholastrow1 == true && $wholastrow2 == true ): ?>
				
			<div class="two-col white-text" style="margin-top: 0;">
	
				<div class="mobile-inner-padding clearfix white-text">
					<div class="l-col">
						    
						<?php echo $wholastrow1; ?>
		
					</div>
		
					<div class="r-col">
						    
						<?php echo $wholastrow2; ?>
		
					</div>
				</div>
	
			</div>
				
			<?php endif; ?>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
	
	</article>
	<?php endif; ?>

</section>

<!--WHO-->



<!--EXPERIENCE-->

<?php if ( get_field('experience_bg_img') ): ?>
<section id="experience" style="background-image: url(<?php the_field('experience_bg_img'); ?>);">

<?php else : ?>

<section id="experience" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/experience.jpg);">

<?php endif;

	if ( get_field('experience_text_colour') == 'dark' ): ?>
	<article class="clearfix no-column-bg">
	    
	    <?php 
		if( have_rows('experience_left_col') ):
		while( have_rows('experience_left_col') ): the_row(); ?>

		<div class="one-third black-text mobile-inner-padding">

			<div class="inner">

			<h4><?php the_sub_field('col_title'); ?></h4>

				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>

			</div>

		</div>
		
		<?php
		endwhile;
		endif;
		?>
		
		<?php 
		if( have_rows('experience_right_col') ):
		while( have_rows('experience_right_col') ): the_row(); ?>

		<div class="two-third black-text">

			<div class="two-col clearfix no-margin mobile-inner-padding">

				<div class="l-col">
				    
				    <?php the_sub_field('col_right_col_1'); ?>

				</div>

				<div class="r-col">

					<?php the_sub_field('col_right_col_2'); ?>

				</div>

			</div>
			
			<?php if ( get_sub_field('exp_col_right_row2') ): ?>
			<div>
			    <?php the_sub_field('exp_col_right_row2'); ?>
			</div>
			<?php endif; ?>

		</div>
		
		<?php
		endwhile;
		endif;
		?>

	</article>
	
	<?php elseif ( get_field('experience_text_colour') == 'light' ): ?>
	<article class="clearfix no-column-bg">
		    
		<?php 
		if( have_rows('experience_left_col') ):
		while( have_rows('experience_left_col') ): the_row(); ?>
	
		<div class="one-third dark-text mobile-inner-padding">
	
			<div class="inner white-text">
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
			</div>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
			
		<?php 
		if( have_rows('experience_right_col') ):
		while( have_rows('experience_right_col') ): the_row(); ?>
	
		<div class="two-third dark-text mobile-inner-padding">
	
			<div class="two-col clearfix white-text no-margin">
	
				<div class="l-col">
					    
					<?php the_sub_field('col_right_col_1'); ?>
	
				</div>
	
				<div class="r-col">
	
					<?php the_sub_field('col_right_col_2'); ?>
	
				</div>
	
			</div>
				
			<?php if ( get_sub_field('exp_col_right_row2') ): ?>
			<div class="white-text">
				<?php the_sub_field('exp_col_right_row2'); ?>
			</div>
			<?php endif; ?>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
	
	</article>
	
	<?php else : ?>
	<article class="clearfix">
		    
		<?php 
		if( have_rows('experience_left_col') ):
		while( have_rows('experience_left_col') ): the_row(); ?>
	
		<div class="one-third dark-text mobile-inner-padding">
	
			<div class="inner white-text">
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
			</div>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
			
		<?php 
		if( have_rows('experience_right_col') ):
		while( have_rows('experience_right_col') ): the_row(); ?>
	
		<div class="two-third dark-text mobile-inner-padding">
	
			<div class="two-col clearfix white-text no-margin">
	
				<div class="l-col">
					    
					<?php the_sub_field('col_right_col_1'); ?>
	
				</div>
	
				<div class="r-col">
	
					<?php the_sub_field('col_right_col_2'); ?>
	
				</div>
	
			</div>
				
			<?php if ( get_sub_field('exp_col_right_row2') ): ?>
			<div class="white-text">
				<?php the_sub_field('exp_col_right_row2'); ?>
			</div>
			<?php endif; ?>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
	
	</article>
	<?php endif; ?>

</section>

<!--EXPERIENCE	-->



<!--CLIENTS-->

<section id="clients">

	<article>

		<ul class="logo-container clearfix" style="list-style: none;">
		
			<!--<li class="logo-box">
			
				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/bcc-logo.png" style="padding: 25px;" />
			
			</li>-->
			
			<li class="logo-box">
			
				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/innovasea-logo.png" style="padding: 25px;" />
			
			</li>
			
			<li class="logo-box">
			
				<img class="client-logo-max-width-150" src="<?php bloginfo('template_url'); ?>/images/client-logos/giant-tiger-logo.png" style="padding: 25px;" />
			
			</li>
			
			<li class="logo-box">
			
							<img src="<?php bloginfo('template_url'); ?>/images/client-logos/proteoform.png" style="padding: 25px;" />
			
						</li>
						
			<!--<li class="logo-box">
			
							<img src="<?php bloginfo('template_url'); ?>/images/client-logos/task-analytics.png" style="padding: 25px;" />
			
						</li>-->
						
			<li class="logo-box">
			
							<img src="<?php bloginfo('template_url'); ?>/images/client-logos/adaptiiv.png" style="padding: 15px;" />
			
						</li>
						
			<li class="logo-box">
			
							<img src="<?php bloginfo('template_url'); ?>/images/client-logos/ns-college-family-physicians.png" style="padding: 15px;" />
			
						</li>
			
			<li class="logo-box">
			
							<img src="<?php bloginfo('template_url'); ?>/images/client-logos/aga-khan-logo.png" />
			
						</li>
			
			<li class="logo-box" style="position: relative; left: 20px;">

				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/ccs-logo.png" />

			</li>

			<li class="logo-box" style="position: relative; left: 20px;">

				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/rmhc-logo.png" />

			</li>

			<li class="logo-box">

				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/sns-logo.png" />

			</li>

			<li class="logo-box">

				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/innovacorp-logo.png" />

			</li>

			<li class="logo-box">

				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/nscc-logo-blue.png" />

			</li>
			
			<li class="logo-box">
			
				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/romeodallaire-logo.png" />
			
			</li>
			
			<li class="logo-box">
			
				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/gwi-logo.png" />
			
			</li>
			
			<li class="logo-box">
			
				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/ns-logo.png" />
			
			</li>
			
			<li class="logo-box">
			
				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/ccepa-logo.png" />
			
			</li>
			
			<li class="logo-box">
			
				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/doctors-ns-logo.png" />
			
			</li>
			
			<li class="logo-box">
			
				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/ehs-logo.png" />
			
			</li>
			
			<li class="logo-box">
			
				<img src="<?php bloginfo('template_url'); ?>/images/client-logos/iwk-health-centre-logo.png" />
			
			</li>

		</ul>

	</article>

</section>

<!--CLIENTS-->



<!--THE FEED TITLE-->

<?php if ( get_field('colour_picker', 'options' ) ): ?>
<section id="feed" style="background-color: <?php the_field('colour_picker', 'options' ); ?>;">

<?php else : ?>

<section id="feed">

<?php endif; ?>

	<article class="white-text">

		<h2>We use Twitter to share popular culture, news, cool stuff and things

		we find interesting to, well, the general public.</h2>

	</article>

</section>

<!--THE FEED TITLE-->

<!--THE FEED-->

<section id="feed-wall">

	<article>

		<?php echo do_shortcode('[dc_social_wall id="34"]'); ?>

	</article>

</section>

<!--THE FEED-->



<!--CONTACT-->

<?php if ( get_field('colour_picker', 'options' ) ): ?>
<section id="contact" style="background-color: <?php the_field('colour_picker', 'options' ); ?>;">

<?php else : ?>

<section id="contact">

<?php endif; ?>

	<article class="white-text clearfix">
	    
	    <?php 
	    if( have_rows('contact_left_col') ):
	    while( have_rows('contact_left_col') ): the_row(); ?>

		<div class="half">

			<h1><?php the_sub_field('col_title'); ?> &nbsp;&nbsp;<span><a href="<?php the_sub_field('twitter_link'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span></h1>

			<?php the_sub_field('col_blurb'); ?>

		</div>
		
		<?php
	    endwhile;
	    endif;
	    ?>
	    
	    <?php if( get_field('contact_right_col') ): ?>

		<div class="half">

			<?php the_field('contact_right_col'); ?>

		</div>
		
		<?php endif; ?>

	</article>

</section>

<!--CONTACT-->



<?php get_footer(); ?>