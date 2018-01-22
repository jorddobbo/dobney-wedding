<?php 

/*

Template Name: Information

*/

?>

<div class="dbo dbo--information">

	<?php get_header(); ?>

		<div class="dbo__title">
			<h1>Information</h1>
		</div>

		<div class="dbo--information__schedule">
			<div class="dbo__container">
				<div class="content">
					<h3>SCHEDULE</h3>
					<ul>
						<li><div class="left">Ceremony</div><div class="right">1.00pm</div></li>
						<li><div class="left">Day Guests Arrive</div><div class="right"> 12.30pm</div></li>
						<li><div class="left">Ceremony</div><div class="right"> 1.00pm</div></li>
						<li><div class="left">Drinks Reception & Canapes</div><div class="right">1.30pm</div></li>
						<li><div class="left">Wedding Breakfast</div><div class="right">3.00pm</div></li>
						<li><div class="left">Speeches</div><div class="right">3.10pm</div></li>
						<li><div class="left">Evening Guests Arrive</div><div class="right">6.30pm</div></li>
						<li><div class="left">Cutting of Cake</div><div class="right">7.15pm</div></li>
						<li><div class="left">First Dance</div><div class="right">7.20pm</div></li>
						<li><div class="left">Evening Food</div><div class="right">8.00pm</div></li>
						<li><div class="left">Bar Closes</div><div class="right">11.00pm</div></li>
						<li><div class="left">Carriages</div><div class="right">11.30pm</div></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="dbo--information__hotels">
			<div class="dbo__container">
				<h3>NEARBY HOTELS</h3>
				<div class="hotels__wrap">
					<div class="hotel">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/information/hotel_one.png" />
						<div class="hotel__info">
							<h4>The Staff of Life</h4>
							<p>4 mins</p>
						</div>
					</div>
					<div class="hotel">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/information/hotel_two.png" />
						<div class="hotel__info">
							<h4>Harpurs of Melbourne</h4>
							<p>4 mins</p>
						</div>
					</div>
					<div class="hotel">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/information/hotel_three.png" />
						<div class="hotel__info">
							<h4>Crewe & Harpur</h4>
							<p>4 mins</p>
						</div>
					</div>
				</div>
				<div class="dbo__divider">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/leaf.svg" />
				</div>
			</div>
		</div>

		<div class="dbo--information__gifts">
			<div class="dbo__container">
				<h3>GIFTS</h3>
				<p>Your presence at our wedding is far more important than your presents, but for those who do wish to gift us a little something, then a gift of money to go towards our honeymoon would be so much appreciated!</p>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/information/info_gifts.png" />
				<p>Two days after our wedding day, we'll be flying out to Mauritius where we'll enjoy two weeks of sun, sea and snorkelling in the Indian Ocean. We are so unbelievably excited for our first adventure as a married couple, and with so much to do on this beautiful island, we'd be so grateful for any and all contributions!</p>
			</div>
		</div>

		<div class="dbo--information__faq">
			<div class="dbo__container">
				<div class="content">
					<h3>A FEW EXTRA BITS</h3>
					<div id="accordion">
						<div class="accordion-wrap">
							<h4 class="accordion-toggle">Will there be alcohol available?</h4>
							<div class="accordion-content default">
								<p>We'll be providing a few bottles of wine per table + there is a bar to buy your own drinks from. Sorry, you won't be able to bring your own.</p>
							</div>
						</div>
						<div class="accordion-wrap">
							<h4 class="accordion-toggle">What time do I need to leave after the reception?</h4>
							<div class="accordion-content">
								<p>We kindly ask that all our guests are off the Calke Abbey estate grounds by 12 pm. As the venue is situated within private grounds in the countryside, you will need to pre-book transport home - taxies must collect no later than 11.30pm and should arrive at The Riding School via the Calke Abbey exit (LE65 1RR).</p>
							</div>
						</div>
						<div class="accordion-wrap">
							<h4 class="accordion-toggle">Is there free parking available?</h4>
							<div class="accordion-content">
								<p>Yes, the Park Entry Team will be provided with our guest list. Just let them know who you are and that you’re there for our wedding, and you’ll be able to park in the main car park free of charge.</p>
							</div>
						</div>
						<div class="accordion-wrap">
							<h4 class="accordion-toggle">Will there be something for the little ones to do?</h4>
							<div class="accordion-content">
								<p>We know weddings can be a long day for little ones, so we'll try our best to keep them happy! We'll have a play area with toys and activities set-up in the venue, and there's an outdoor play park should they need to get those wiggles out.</p>
							</div>
						</div>
						<div class="accordion-wrap">
							<h4 class="accordion-toggle">Can I bring and throw my own confetti?</h4>
							<div class="accordion-content">
								<p>In order to protect the wildlife at Calke Abbey, our guests are asked not to throw paper or biodegradable confetti. We will instead provide a few bags of natural flower petals - please feel free to bring your own too if you wish!</p>
							</div>
						</div>
						<div class="accordion-wrap">
							<h4 class="accordion-toggle">Can we leave cars over night?</h4>
							<div class="accordion-content">
								<p>Yes, if you wish to. Your vehicle will, however, need to be collected by 10am the following day.</p>
							</div>
						</div>
						<div class="accordion-wrap">
							<h4 class="accordion-toggle">Do evening guests use the Calke Abbey entrance?</h4>
							<div class="accordion-content">
								<p>No, due to the main entrance gates being locked for security at 7pm, evening guests and taxis are required to enter the Calke estate via the exit set within Calke Village. You will need to use the postcode LE65 1RR to arrive at the exit.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<?php get_footer(); ?>

</div>