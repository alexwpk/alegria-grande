<!-- Home hero -->
<section id="home-hero" class="container-fluid bg-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'full') ); ?>);">
	<div class="row">
		
		<div class="container">
			<div class="row d-flex flex-column-reverse flex-md-row">
				
				<div id="home-hero__content" class="col-12 col-md-8 col-lg-6 d-flex flex-column justify-content-center align-items-start">
			
					<h1 class="hero-headline"><?php echo get_field('hero_headline'); ?></h1>
					<p class="large-p"><?php echo get_field('hero_text'); ?></p>
					
					<div class="d-flex flex-column flex-md-row justify-content-start">
						<a href="<?php echo get_field('button_1_url'); ?>" title="" class="button button-primary"><?php echo get_field('button_1_text'); ?></a>
						<a href="<?php echo get_field('button_2_url'); ?>" title="" class="button button-alt"><?php echo get_field('button_2_text'); ?></a>
					</div>
				
				</div><!-- #home-hero__content -->
				
				<!--<div id="home-hero__content-image" class="col-12 col-md-6 d-none d-md-flex flex-column justify-content-center align-items-start">
			
					<img src="https://alegriagrande.dev.devhouse.se/wp-content/uploads/2021/09/21246503_10154733085031466_5674610840927968002_o-e1630952427111.jpg" alt="Alt here" />
				
				</div>--><!-- #home-hero__content-image -->
				
			</div>
		</div>
		
	</div>
	
	<!-- scroll down arrow -->
	<!--<a href="#latest-posts" class="scroll-arrow d-none d-md-block" title="Latest posts from Alegriagrande"></a>-->
	
</section><!-- #Home hero -->