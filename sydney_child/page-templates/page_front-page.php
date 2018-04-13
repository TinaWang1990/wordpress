<?php
/*
Template Name: Front Page
*/

get_header(); 
$theme_dir = get_stylesheet_directory_uri(); ?>

	<div id="primary" class="fp-content-area">
		<main id="main" class="site-main" role="main">
			<script type="text/javascript">
				jQuery(document).ready(function(){
					jQuery("#make-difference").lightSlider({
						loop:true,
		                keyPress:true,
		                vertical:true,
		                item:3,
		                auto:true,
		                loop:true,
		                speed:1000,
					});
				});
			</script>
			

			<section id="difference_about">
				<div class="row">
					<div class="col-sm-6 col-12 intro-left">
						<div class="make-difference">
							<h3>How We make a difference</h3>
							<p>Canada’s Gynecologic Oncology community is dedicated to supporting Canadian women who are facing a diagnosis of a reproductive cancer. We do this through:</p>
						</div>
						<ul id="make-difference" class="content-slider">
							<li>
								<img src="<?php echo $theme_dir; ?>/images/icon-collaboration.png">
								<div class="intro-body">
									<h6>Collaboration</h6>
									<p><?php the_field('collaboration_des'); ?></p><br>
								</div>
							</li>
							<li>
								<img src="<?php echo $theme_dir; ?>/images/icon-microscope.png">
								<div class="intro-body">
									<h6>Research</h6>
									<p><?php the_field('research_des'); ?></p>
									<!-- <p>developing innovative diagnosis methods, and treatment techniques for gynecological cancers to improve quality of life and survival rates for patients.</p> --><br>
								</div>							
							</li>
							<li>
								<img src="<?php echo $theme_dir; ?>/images/icon-family.png">
								<div class="intro-body">
									<h6>Community</h6>
									<p>GOC’s national role continues to evolve. Our unique pan-Canadian, multidisciplinary make-up, along with our myriad connections means we can influence policy at the highest levels. </p><br>
								</div>							
							</li>
							<li>
								<img src="<?php echo $theme_dir; ?>/images/icon-education.png">
								<div class="intro-body">
									<h6>Education</h6>
									<p>Teaching health professionals the most current and evolving information about gynecological cancer to ensure patients receive the best possible care.</p><br>
								</div>							
							</li>
						</ul>
					</div>
					<div class="col-sm-6 col-12 intro-right">
						<div class="about-us">
							<h3>About Us</h3>
							<p>The Society of Gynecologic Oncology of Canada (GOC) represents health care professionals who spend their days immersed in research, teaching, diagnosis and care of women facing gynecologic cancer.</p>
							<p>Welcome to GOC’s comprehensive online resource designed to provide online access to information and resources about reproductive cancers in Canada. g-o-c.org now provides ready access to Membership services so you can become a member, renew your membership, enroll in continuing medical education, and learn about what colleagues are doing in their research and practice across the country. Access to everything you need, on your schedule.</p>
							<p></p>
						</div>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
