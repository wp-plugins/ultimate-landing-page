<html>
	<head>



		<title><?php echo the_title(); ?></title>

		<!-- -------------------- Landing Page SEO  -------------------- -->
		<meta property="og:title" content="<?php echo get_post_meta($post->ID,'lpp_seo_title',true); ?>">

		<meta property="og:url" content="<?php $url = site_url(); echo $url; ?>">
		
		<meta property="og:description" name="description" content='<?php echo get_post_meta($post->ID,'lpp_seo_meta_description',true); ?>'>

		<meta name="keywords" content="<?php echo get_post_meta($post->ID,'lpp_seo_keywords',true); ?>">

		
		<style type="text/css">

				<?php echo get_post_meta($post->ID,'lpp_custom_styling',true); ?>
					
		</style>
		<script type="text/javascript">

					<?php echo get_post_meta($post->ID,'lpp_custom_js',true); ?>

		</script>
		<style type="text/css">
		html{
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
		}
		
		body{

			width: 100%;
			min-width:1050px;
			height: 980px;
			margin: 0;
			padding: 0;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
			text-align: center;

		}

		#lpp_sub_feature{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;

		}

		

		.lpp_p{
			 line-height: 1.5; 
			 font-size: 1rem; 
			 font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
		}
		.lpp_h1{
			font-size: 36px; 
			font-size: 2.2rem;
			font-family: 'museo-slab', sans-serif;
			color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
 ;
		}
		.lpp_h2{
			font-size: 28px; 
			font-size: 1.75rem;
			font-family: 'museo-slab', sans-serif;
			
		}
		.lpp_section{
			width: 100%;
			max-width:1480px; 
			min-height: 300px;
			height: 900px;
			display: inline-block;
			text-align: center;
		}
		#lpp_section_1{
			text-align: center;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;

		}
		#lpp_section_2{
			background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
		}
		#lpp_section_3{
			background: <?php echo get_post_meta($post->ID,'lpp_benefit_bg',true); ?>;
		}
		#lpp_logo{
			width: 20%;
			height: 10%;
			margin: 10px 0 10px 0;

		}
		#main_feature_img{
			width: 85%;
			height: 60%;
			margin-top: 2%;

		}
		#lpp_primary_h1{
			margin-top:2%;
		}
		#lpp_sub_h2{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		#sub_sect2_left{
			height: 100%;
			width: 50%;
			float: left;
		}
		#sub_sect2_left > h2,h4{
			margin-left: 5%;
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
			
		}
		#lpp_benefit > h3{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;

		}
		#lpp_benefit > p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;

		}
		#sub_sect2_right{
			height: 100%;
			width: 40%;
			float: right;
			text-align: center;
			height: 76%;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
		}
		#lpp_section_3{
			height:300px;
			text-align: center;
		}
		.lpp_input{
			font-size: 22px;
			margin-top: 5%;
			margin-left: 10%;
			width: 70%;
			height: 8%;
			text-align: center;


		}
		#lpp_cta{
			color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;

		}
		#lpp_testimonial{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		#lpp_testimonial_author{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}

		#lpp_form_h2{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;

		}
		#lpp_sub_form_h{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
	

		
		</style>

	</head>


	
	<body>
	 <div id='lpp_section_1' class='lpp_section'>
	 		<img src="<?php echo get_post_meta($post->ID,'lpp_logo_url',true); ?>" id='lpp_logo' alt='Logo'>
	 	<img src="<?php echo get_post_meta($post->ID,'lpp_add_img_1',true); ?>" id='main_feature_img'>
	 	<h1 id='lpp_primary_h1' class='lpp_h1'>
	 		<?php echo get_post_meta($post->ID,'lpp_main_h1',true); ?>
	 	</h1>
	 	<h2 id='lpp_sub_h2' class='lpp_h2'>
	 		<?php echo get_post_meta($post->ID,'lpp_sub_h2',true); ?>
	 	 </h2>
	 </div>
	 <div id='lpp_section_2' class='lpp_section'>
	 	<div id='sub_sect2_left'>
	 		<h2 id='lpp_feature_h2' class='lpp_h2'>
	 			<?php echo get_post_meta($post->ID,'lpp_benefit_sect_title',true); ?>
	 		
	 		</h2>
	 		<h4 id='lpp_sub_feature' class='lpp_p' style="font-size:16px;"><b>
	 			<?php echo get_post_meta($post->ID,'lpp_benefit_sect_sub_title',true); ?>
	 		
	 		</b></h4>
	 		<div id='lpp_benefit' style='margin-left:5%;'>
	 		<h3 class='lpp_h2' style='font-size:19px;'>
	 			<?php echo get_post_meta($post->ID,'lpp_benefit_1_content_title',true); ?>
	 		</h3>
	 		<p id='lpp_benefit_text' class='lpp_p'>
	 			<?php echo get_post_meta($post->ID,'lpp_benefit_1_content',true); ?>

	 		</p>
	 		<h3 class='lpp_h2' style='font-size:19px;'>
	 			<?php echo get_post_meta($post->ID,'lpp_benefit_2_content_title',true); ?>
	 		</h3>
	 		<p id='lpp_benefit_text' class='lpp_p'>
	 			<?php echo get_post_meta($post->ID,'lpp_benefit_2_content',true); ?>
	 		</p>
	 		<h3 class='lpp_h2' id='lpp_benefit_h_3' style='font-size:19px;'>
	 			<?php echo get_post_meta($post->ID,'lpp_benefit_3_content_title',true); ?>
	 		</h3>
	 		<p id='lpp_benefit_text_3' class='lpp_p'>
	 			<?php echo get_post_meta($post->ID,'lpp_benefit_3_content',true); ?>
	 		</p>
	 		</div>
	 	</div>
	 	<div id='lpp_pointer'></div>
	 	<div id='sub_sect2_right'>
	 		<div id='lpp_form'>
	 			<h2 id='lpp_form_h2' class='lpp_h2'>
	 				<?php echo get_post_meta($post->ID,'lpp_form_h2',true); ?>
	 			</h2>
	 			<p id='lpp_sub_form_h' class='lpp_p'><b>
	 				<?php echo get_post_meta($post->ID,'lpp_form_sub_h2',true); ?>
	 			</b></p>
	 			<form id='lpp_form'>
	 				<input type='text' name='lpp_name' placeholder='Name' id='lpp_input_name' class='lpp_input'>
	 				<br>
	 				<input type='email' name='lpp_email' placeholder='E-mail' id='lpp_input_email' class='lpp_input'>
	 				<br>
	 				<button id='lpp_cta'  type='submit' class='lpp_input' >
	 					<?php echo get_post_meta($post->ID,'lpp_main_cta',true); ?>
	 				</button>

	 			</form>
	 		</div>
	 	</div>
	 </div>
	 <div id='lpp_section_3' class='lpp_section'>
	 	<h2 id="lpp_testimonial" class="lpp_h2">
	 		<?php echo get_post_meta($post->ID,'lpp_testimonial_left_content',true); ?>
	 	</h2>
	 	<p id='lpp_testimonial_author' class='lpp_p'><i>
	 		<?php echo get_post_meta($post->ID,'lpp_testimonial_left_content_author',true); ?>

	 	</i></p>

	 </div>
	</body>
</html>