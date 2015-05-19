<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
?>

		<?php if(! is_front_page() ) { ?>			</div> <!-- /.container container1 --> <?php } ?>
	
		
		<div class="clear"></div>


	</section>

<?php if(is_front_page() ) { ?>
<section class="contact_testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="testimonial">
						<div class="testimonail_text">
							<p>Almost one year ago, our son, who was near death due to his alcoholism, was admitted into your program.  We are so thankful that he made a decision to seek help before it became too late.  We are equally thankful for your programs and staff who, in our opinion, actually saved the life of a great young man.  Needless to say, our son, too is a very thankful person for having had the opportunity to receive the services of your 10 Acre Ranch. </p>
							<div class="author_testimonial">- Jerry &amp; Linda, WV</div>
						</div>
						<!-- /.testimonail_text -->
						<div class="testimonail_text">
							<p>What a ride!  How can I put into words from my heart to all of you at 10 Acre Ranch my appreciation for the effort and unconditional love you have so freely given me.</p>
							<div class="author_testimonial">- Bob C.</div>
						</div>
						<!-- /.testimonail_text -->
						<div class="testimonail_text">
							<p>I am writing to say thanks to all the staff and people who I met at the ranch.  I went through treatment in July and August.  I am clean and sober today, 1 yr and 11 days.  Thank you for starting the best place I could choose to get help.  I still use what I learned out there.  Your friend in recovery.</p>
							<div class="author_testimonial">- Mike</div>
						</div>
						<!-- /.testimonail_text -->

					</div>
					<!-- /.testimonial -->
				</div>
				<!-- /.col-md-6 -->
				<div class="col-md-7">
					<div class="contact_form">
						<div class="contact_title">CONFIDENTIAL CONTACT FORM</div>
						<div class="sub_contact_title">A RECOVERY STAFF MEMBER WILL CALL YOU BACK</div>
							<?php echo do_shortcode('[contact-form-7 id="55" title="Contact"]' ); ?>
					</div>
					<!-- /.contact_form -->
				</div>
				<!-- /.col-md-6 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
<?php } else { ?>

<section class="contact_testimonial creambg">
		<div class="container container1">
			<div class="row">
				<div class="col-md-12">
					<div class="contact_form">
						<div class="contact_title">CONFIDENTIAL CONTACT FORM</div>
						<div class="sub_contact_title">A RECOVERY STAFF MEMBER WILL CALL YOU BACK</div>
							<?php echo do_shortcode('[contact-form-7 id="55" title="Contact"]' ); ?>
					</div>
					<!-- /.contact_form -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>

<?php } ?>
<footer class="footer_wrap">
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div id="copyright" role="contentinfo" class="clr">
							<a href="" class="slide_button">Read our Blog</a>
						</div><!-- #copyright -->
					</div>
					<!-- /.col-md-6 -->
					<div class="col-md-6">
						<ul class="social_icons">
							<li><a href="" class="circle"><span class="facebook"></span></a></li>
							<li><a href="" class="circle"><span class="twitter"></span></a></li>
							<li><a href="" class="circle"><span class="linkedin"></span></a></li>
							<li><a href="" class="circle"><span class="googleplus"></span></a></li>
							<li><a href="" class="circle"><span class="rss"></span></a></li>
						</ul>
					</div>
					<!-- /.col-md-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.footer -->
		<div class="company_logo">
			<div class="container">
				<div class="row">
				<div class="col-md-7 col-sm-12">
					<ul class="logo_list">
						<li><a href="" class="cmp_lgo"><img src="<?php echo get_template_directory_uri(); ?>/img/dhcs.jpg" height="79" width="108" alt=""></a></li>
						<li><a href="" class="cmp_lgo"><img src="<?php echo get_template_directory_uri(); ?>/img/accredited-business.jpg" height="70" width="171" alt=""></a></li>
						<li><a href="" class="cmp_lgo"><img src="<?php echo get_template_directory_uri(); ?>/img/business-consumer-alliance.jpg" height="72" width="119" alt=""></a></li>
						<li><a href="" class="cmp_lgo"><img src="<?php echo get_template_directory_uri(); ?>/img/trustwave.jpg" height="66" width="119" alt=""></a></li>
					</ul>
						<div class="copyright">
							<?php
							// Displays copyright info
							// See functions/copyright.php
							wpex_copyright(); ?> 

						</div>
						<ul class="list_items">
							<li><a href="">Privacy &amp; Policy</a></li>
							<li><a href="">Terms and conditions</a></li>
						</ul>
					
				</div>
				<!-- /.col-md-7 col-sm-12 -->
				<div class="col-md-5 col-sm-12">
					<div class="webconsuls"> Web Marketing by <a href="http://www.webconsuls.com/" target="_blank">Webconsuls</a><img src="https://www.arrowheadlodgerecovery.com/wp-content/themes/arrowhead/images/webconsuls.png" alt=""></div>
				</div>
				<!-- /.col-md-5 col-sm-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.company_logo -->
	</footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/toucheffects.js"></script>


<?php wp_footer(); ?>
</body>
</html>