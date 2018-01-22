<?php 

/*

Template Name: Venue

*/

?>

<div class="dbo dbo--venue">

	<?php get_header(); ?>

		<div class="dbo__title">

			<h1>The Venue</h1>

			<div class="dbo__container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/venue__main.png" />
			</div>
		</div>

		<div class="dbo--venue__intro">
			<div class="dbo__container">
				<div class="content">
					<h2>OUR DREAM VENUE
					<span>The Riding School, Calke Abbey</span></h2>
					<p>Set amongst 600 acres of Derbyshire parkland, where deer and sheep roam free, this 18th Century rustic building is steeped in history and beauty.</p>
				</div>
			</div>
		</div>

		<div class="dbo--venue__gallery">
			<ul>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/venue__image4.jpg" /></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/venue__image.jpg" /></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/venue__image2.jpg" /></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/venue__image3.jpg" /></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/venue__image5.jpg" /></li>
			</ul>
			<div class="slick__prev">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/arrow.svg" />
			</div>
			<div class="slick__next">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/arrow.svg" />
			</div>
		</div>

		<div class="dbo--venue__map">
			<div class="half--map">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/venue__map.png" />
			</div>
			<div class="half--info">
				<p>The Riding School is located 10 miles south of Derby, on the A514 at Ticknall between Swadlincote and Melbourne.</p>
				<p>From the M42/A42 exit 13 and A50 Derby South. A 'one-way' system operates in the park; day guests please access via Ticknall entrance. Satnav postcode: DE73 7LE.</p>
				<p>Evening guests, please enter via the Calke Abbey exit, located in Calke Village. Satnav postcode: LE65 1RR.</p>
			</div>
		</div>

		<div class="dbo--venue__icons">
			<div class="icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/icon--05.svg" />
				<h3>Cash Bar</h3>
			</div>
			<div class="icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/icon--02.svg" />
				<h3>One Venue</h3>
			</div>
			<div class="icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/icon--01.svg" />
				<h3>Free Parking</h3>
			</div>
			<div class="icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/icon--03.svg" />
				<h3>Kids Park</h3>
			</div>
			<div class="icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/icon--04.svg" />
				<h3>Sofa Area</h3>
			</div>
			<div class="icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/venue/icon--06.svg" />
				<h3>Huge Grounds</h3>
			</div>
		</div>

	</div>

	<?php get_footer(); ?>

</div>