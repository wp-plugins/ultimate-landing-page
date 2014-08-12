<html>
	<head>

		<title><?php echo the_title(); ?></title>

		<!-- -------------------- Landing Page SEO  -------------------- -->
		<meta property="og:title" content="<?php echo get_post_meta($post->ID,'lpp_seo_title',true); ?>">

		<meta property="og:url" content="<?php $url = site_url(); echo $url; ?>">
		
		<meta property="og:description" name="description" content='<?php echo get_post_meta($post->ID,'lpp_seo_meta_description',true); ?>'>

		<meta name="keywords" content="<?php echo get_post_meta($post->ID,'lpp_seo_keywords',true); ?>">
		

			<script type="text/javascript">

						<?php echo get_post_meta($post->ID,'lpp_custom_js',true); ?>

			</script>
		<style type="text/css">

		html{
			width: 100%;
			height: 100%;
			margin: 0 auto;
			padding: 0;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
		}
		#body{
			width: 100%;
			height: 100%;
			display: inline-block;
			margin: 0;
			padding: 0;
		}
		.lpp_section{
			width: 100%;
			height: 90%;
			text-align: center;
			display: inline-block;
		}
		#main_feature_img{
			width:100%;
			 height:100%;
		}


		@media screen and (min-width: 680px) {




		

		#lpp_logo{
			float: left;
			width:15%;
			height:10%;
			
		}
		#lpp_logo_img{
			width:100%;
			height:100%;
		}
		.lpp_h1{
			font-size: 37px; 
			font-size: 2.25rem;
			font-family: 'museo-slab', sans-serif;
			color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
		}
		.lpp_h2{
			font-size: 27px; 
			font-size: 1.5rem;
			font-family: 'museo-slab', sans-serif;
		}
		.lpp_p{
			line-height: 1.5;
			font-size: 1.125rem;
			font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
		}
		#lpp_section_1{
			display: inline-block;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
		}
		#lpp_primary_h1{
			margin-top:12%; 
		}
		#lpp_sub_h2{
			margin-top: -1.5%;
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}

		#sub_sect_1_left{
			width: 50%;
			float: left;
			height: 53%;
			margin-top: 5%;
			margin-left: 7%;
		}
		#sub_sect_1_right{
			width: 34%;
			float: left;
			height: 53%;
			margin-top: 5%;
			margin-right: 5%;
		}
		#sub_sect_1_right,#sub_sect_1_left{
			background: rgba(81,130,209,1);
		}
		.lpp_input_field{
			width: 70%;
			height: 10%;
			float: left;
			margin-left: 5%;
			font-size: 18px; 

		}
		#lpp_section_2{
		}
		#lpp_sub_sect_2_top_left{
			width: 46%;
			min-height: 29%;
			float: left;
			margin-top: 3%;
			margin-left: 2%;
		}
		#lpp_sub_sect_2_top_right{
			width: 46%;
			min-height: 29%;
			float: right;
			margin-top: 3%;
			margin-right: 2%;
		}
		#lpp_sub_sect_2_bottom_left{
			width: 46%;
			min-height: 29%;
			float: left;
			margin-top: 3%;
			margin-left: 2%;
		}
		#lpp_sub_sect_2_bottom_right{
			width: 46%;
			min-height: 29%;
			float: right;
			margin-top: 3%;
			margin-right: 2%;
		}
		#lpp_sub_sect_3_left{
			width: 45%;
			height: 100%;
			float: left;
		}
		#lpp_sub_sect_3_right{
			width: 54%;
			height: 100%;
			float: right;
		}
		.lpp_feature_box{
			-webkit-box-shadow: 3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			-moz-box-shadow:    3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			box-shadow:         3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;

			
		}
		#lpp_section_3
		{
			height: 50%;
			background: <?php echo get_post_meta($post->ID,'lpp_benefit_bg',true); ?>;
		}
		.lpp_benefit_h2{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_benefit_p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_aboutus{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}

		.lpp_testimonial_p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_form_h2,.lpp_form_p{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_submit{
			margin-top: 20px;
			height: 50px;
			border: none;
			background:<?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
			color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
		}

	}

	@media screen and (max-width: 680px) {

		#main_feature_img{
			width:100%;
			 height:20%;
		}
		#lpp_logo_img{
			width:50%;
			height:100%;
		}

		#lpp_logo{
			
			width:100%;
			height: 50px;

		}
		.lpp_h1{
			font-size: 26px; 
			font-size: 1.6rem;
			font-family: 'museo-slab', sans-serif;
			color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
		}
		.lpp_h2{
			font-size: 20px; 
			font-size: 1.2rem;
			font-family: 'museo-slab', sans-serif;
		}
		.lpp_p{
			line-height: 1.2;
			font-size: 1rem;
			font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
		}
		#lpp_section_1{
			display: inline-block;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
			height: 100%;
		}
		#lpp_primary_h1{
					
		}
		#lpp_sub_h2{
			
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}

		#sub_sect_1_left{
			width: 100%;

							}
		#sub_sect_1_right{
			width: 100%;
			padding-top: 1%;

					
		}
		#sub_sect_1_right,#sub_sect_1_left{
			background: rgba(81,130,209,1);
		}
		.lpp_input_field{
			width: 100%;
			height: 5%;
			font-size: 18px; 

		}

		#lpp_section_2{
			height: 100%;
			margin-top: 10%;
			
		}
		#lpp_sub_sect_2_top_left{
			width: 100%;
			
							}
		#lpp_sub_sect_2_top_right{
			width: 100%;
			
					
		}
		#lpp_sub_sect_2_bottom_left{
			width: 100%;
			
							}
		#lpp_sub_sect_2_bottom_right{
			width: 100%;
			
					
		}
		#lpp_sub_sect_3_left{
			width: 100%;
			
		}
		#lpp_sub_sect_3_right{
			width: 100%;
			
		}
		.lpp_feature_box{
			-webkit-box-shadow: 3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			-moz-box-shadow:    3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			box-shadow:         3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
			padding: 5px;

			
		}
		#lpp_section_3
		{
			background: <?php echo get_post_meta($post->ID,'lpp_benefit_bg',true); ?>;
			height: 50%;
			margin-top: 10%;
		}
		.lpp_benefit_h2{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_benefit_p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_aboutus{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}

		.lpp_testimonial_p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_form_h2,.lpp_form_p{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_submit{
			
			height: 30px;
			border: none;
			background:<?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
			color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
		}
	}

	@media screen and (max-width: 420px) {


		#main_feature_img{
			width:100%;
			 height:20%;
		}
		#lpp_logo_img{
			width:50%;
			height:100%;
		}

		#lpp_logo{
			
			width:100%;
			height: 50px;

		}
		.lpp_h1{
			font-size: 26px; 
			font-size: 1.4rem;
			font-family: 'museo-slab', sans-serif;
			color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
		}
		.lpp_h2{
			font-size: 20px; 
			font-size: 1rem;
			font-family: 'museo-slab', sans-serif;
		}
		.lpp_p{
			line-height: 1.1;
			font-size: 0.9rem;
			font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
		}
		#lpp_section_1{
			display: inline-block;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
			height: 100%;
		}
		#lpp_primary_h1{
					
		}
		#lpp_sub_h2{
			
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}

		#sub_sect_1_left{
			width: 100%;

							}
		#sub_sect_1_right{
			width: 100%;
			padding-top: 1%;
			padding-bottom: 2%;

					
		}
		#sub_sect_1_right,#sub_sect_1_left{
			background: rgba(81,130,209,1);
		}
		.lpp_input_field{
			width: 100%;
			height: 4%;
			font-size: 12px; 

		}

		#lpp_section_2{
			height: 100%;
			margin-top: 70%;

		}
		#lpp_sub_sect_2_top_left{
			width: 100%;
			
							}
		#lpp_sub_sect_2_top_right{
			width: 100%;
			
					
		}
		#lpp_sub_sect_2_bottom_left{
			width: 100%;
			
							}
		#lpp_sub_sect_2_bottom_right{
			width: 100%;
			
					
		}
		#lpp_sub_sect_3_left{
			width: 100%;
			
		}
		#lpp_sub_sect_3_right{
			width: 100%;
			
		}
		.lpp_feature_box{
			-webkit-box-shadow: 3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			-moz-box-shadow:    3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			box-shadow:         3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
			padding: 5px;

			
		}
		#lpp_section_3
		{
			background: <?php echo get_post_meta($post->ID,'lpp_benefit_bg',true); ?>;
			height: 70%;
			margin-top: 75%;
		}
		.lpp_benefit_h2{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_benefit_p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_aboutus{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}

		.lpp_testimonial_p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_form_h2,.lpp_form_p{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_submit{
			
			height: 20px;
			border: none;
			background:<?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
			color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
		}
	}


		
			<?php echo get_post_meta($post->ID,'lpp_custom_styling',true); ?>






		</style>
	</head>
	<body>
		<div id='lpp_section_1' class='lpp_section'>
			<div id='lpp_logo'>
				<img src="<?php echo get_post_meta($post->ID,'lpp_logo_url',true); ?>" id='lpp_logo_img'>
			</div>
			<h1 id='lpp_primary_h1' class="lpp_h1">
				<?php echo get_post_meta($post->ID,'lpp_main_h1',true); ?>
			</h1>
			<h3 id='lpp_sub_h2' style='font-size:1.1rem;font-size: 19px;' class='lpp_h2'>
				<?php echo get_post_meta($post->ID,'lpp_sub_h2',true); ?>
			</h3>
			<div id='sub_sect_1_left'>
				<img src="<?php echo get_post_meta($post->ID,'lpp_add_img_1',true); ?>" id='main_feature_img'
				
				>
			</div>
			<div id='sub_sect_1_right'>
				<h2 class='lpp_h2 lpp_form_h2'>
					<?php echo get_post_meta($post->ID,'lpp_form_h2',true); ?>
				</h2>
				<form method='post' action='<?php echo plugins_url('mcapi_listSubscribe.php',__FILE__); ?>'>
				<p style='float:left; margin-left:5%;line-height:0px;' class='lpp_p lpp_form_p'>Name*</p>
				<input type='hidden' value='<?php echo get_post_meta($post->ID,'lpp_mailchimp_apikey',true); ?>' name='lpp_ki'>
				<input type='hidden' value='<?php echo get_post_meta($post->ID,'lpp_mailchimp_listid',true); ?>' name='lpp_ed'>
				<br>
				<br>
				<br>
				<input type='text' name='lpp_name' id='lpp_name' class='lpp_input_field' placeholder='Name'>
				<br>
				<br>
				<br>
				<p style='float:left; margin-left:5%;line-height:0px;' class='lpp_p lpp_form_p'>E-Mail*</p>
				<br>
				<br>
				<br>
				<input type='text' name='lpp_email' id='lpp_email' class='lpp_input_field' placeholder='Email'>
				<br>
				<br>
				<br>
				<input type='submit' class="lpp_input_field lpp_submit" value='Subcribe'>
			</form>

			</div>
		</div>
		<div id='lpp_section_2' class='lpp_section'>
			<div id='lpp_sub_sect_2_top_left' class='lpp_feature_box'>
				<h3 class='lpp_h2 lpp_benefit_h2'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_1_content_title',true); ?>
				</h3>
				<p class='lpp_p lpp_benefit_p'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_1_content',true); ?>
				</p>
			</div>
			<div id='lpp_sub_sect_2_top_right' class='lpp_feature_box'>
				<h3 class='lpp_h2 lpp_benefit_h2'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_2_content_title',true); ?>
				</h3>
				<p class='lpp_p lpp_benefit_p'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_2_content',true); ?>
				</p>

			</div>
			<div id='lpp_sub_sect_2_bottom_left' class='lpp_feature_box'>
				<h3 class='lpp_h2 lpp_benefit_h2'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_3_content_title',true); ?>
				</h3>
				<p class='lpp_p lpp_benefit_p'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_3_content',true); ?>
				</p>
			</div>
			<div id='lpp_sub_sect_2_bottom_right' class='lpp_feature_box'>
				<h3 class='lpp_h2 lpp_benefit_h2'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_4_content_title',true); ?>
				</h3>
				<p class='lpp_p lpp_benefit_p'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_4_content',true); ?>
				</p>
			</div>
		</div>
		<div id='lpp_section_3' class='lpp_section'>
			<div id='lpp_sub_sect_3_left'>
				<h3 class='lpp_h2 lpp_aboutus'>
					<?php echo get_post_meta($post->ID,'lpp_aboutus_h1',true); ?>
				</h3>
				<p class='lpp_p lpp_aboutus'>
					<?php echo get_post_meta($post->ID,'lpp_aboutus_content',true); ?>
				</p>
			</div>
			<div id='lpp_sub_sect_3_right'>
				<h3 class='lpp_h2 lpp_testimonial_p'>
					<?php echo get_post_meta($post->ID,'lpp_testimonial_left_content',true); ?>
				</h3>
				<p class='lpp_p lpp_testimonial_p'>
					<?php echo get_post_meta($post->ID,'lpp_testimonial_left_content_author',true); ?>
				</p>
			</div>
		</div>
	</body>
</html>