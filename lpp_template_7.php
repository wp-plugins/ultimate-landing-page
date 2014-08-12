<!DOCTYPE html>
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

	*, *:before, *:after {
	  -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
	 }

	 body{
		width:100%;
		min-width: 700px;
		height: 800px;
		margin: 0px;
		
	}
	#lpp_content{
		width: 100%;
		height: 100%;
		display: inline-block;
		text-align: center;
		

	}

	.lpp_p{

	  line-height: 1.5; 
	  font-size: 1.125rem; 
	  font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;

	}
	.lpp_section{
		display: inline-block;
		width: 100%;
		height: 100%;

	}
	#lpp_section_1{
		background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
		background-image:url("<?php echo get_post_meta($post->ID,'lpp_add_img_2',true); ?>");
		background-size: cover;
	}
	#lpp_h1{
		font-size: 36px;
		font-size: 2.4rem;
		font-family: 'museo-slab', sans-serif;
		color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
		margin-top: 5%;

	}
	.lpp_h2{
		font-size: 28px;
		font-size: 1.6rem;
		font-family: 'museo-slab', sans-serif;
		
	}
	#lpp_sub_h2{
		font-size: 28px;
		font-size: 1.6rem;
		font-family: 'museo-slab', sans-serif;
		color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		margin-top: -1%;

	}
	

	.lpp_sign_down{
		position: fixed;
		bottom: 5px;
		width: 70px;
		height: 70px;
		background: transparent;
		margin-left:50%;
		text-align: center;
		border-radius:100px;
		border: 3px solid white; 
		display: none;
	}
	#lpp_section_2{
		height: 100%;
		background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
		color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
	}

	#lpp_subsect_left{
		width: 50%;
		float: left;

	}
	#lpp_subsect_right{
		width: 50%;
		float: left;

	}
	#lpp_subsect_left >p{
	  color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
	  line-height: 1.5; 
	  font-size: 1.125rem; 
	  font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
	  margin-top: 40%;
	}

	#lpp_subsect_right > ul{
	  float: left;
	  color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
	  line-height: 2.5; 
	  font-size: 1.225rem; 
	  font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
	  margin-top: 10%;
	}

	#lpp_section_3{
		height: 80%;
		display: inline-block;
		background: <?php echo get_post_meta($post->ID,'lpp_benefit_bg',true);   ?>;
	}

	#testimonial_text{
		color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
	}

	#lpp_testimonial_left{
		width: 46%;
		height: 50%;
		float: left;
		margin:5% 2% 5% 2%; 

	}
	#lpp_testimonial_right{
		width: 46%;
		height: 50%;
		float: right;
		margin:5% 2% 5% 2%; 

	}
	#lpp_benefit_left{
		width: 46%;
		height: 50%;
		float: left;
		margin:0 2% 5% 2%

	}
	#lpp_benefit_right{
		width: 46%;
		height: 50%;
		float: right;
		margin:0 2% 5% 2%

	}
	#lpp_footer{
		width: 100%;
		height: 20%;
		float: right;
		background:<?php echo get_post_meta($post->ID,'lpp_benefit_bg',true); ?>


	}

	#benefit_h2{
		color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
	}

	#benefit_text{
		color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
	}
	#lpp_f_h2{
		color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
	}

	#lpp_input{
		width:50%;
		height:60px;
		margin-top: 12%;
		margin-bottom: 15%;
		font-size: 22px;
		margin-right: 10px;
	}
	#lpp_cta{
		width: 30%;
		height:60px;
		font-size: 30px;
		font-size: 2.2rem;
		border: none;
		background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
		color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
		
	}


		

			<?php echo get_post_meta($post->ID,'lpp_custom_styling',true); ?>





		</style>
	</head>
	<body>
		<div id="lpp_background"></div>
			<div id="lpp_content">
				<div id="lpp_wrapper">
					<div id="lpp_section_1" class="lpp_section">
						<h1 id="lpp_h1" >
							<?php echo  get_post_meta( $post->ID , 'lpp_main_h1' , true ); ?>
						</h1>
						<h2 id="lpp_sub_h2">
							<?php echo  get_post_meta( $post->ID , 'lpp_sub_h2' , true ); ?>
						</h2>
						<form id='lpp_form' action='lpp_.php'>

							<input type='email' id='lpp_input' name='lpp_email' placeholder='Enter Your Email'>
						
						<button type='submit' id="lpp_cta"><?php echo  get_post_meta( $post->ID , 'lpp_main_cta' , true ); ?></button>
						</form>
					</div>
					<!--- lpp_section_1 ENDS HERE!  -->
					<div id="lpp_section_2" class="lpp_section">
						<div id="lpp_subsect_left">
							<!---
							<img 
								style='width:80%; height:60%;margin-top:13%;'>
								 -->

								 <embed src="<?php echo get_post_meta($post->ID,'lpp_add_img_1',true); ?>" style='width:80%; height:60%;margin-top:13%;'>
						</div>
						<div id="lpp_subsect_right">
							<p id="lpp_text" class='lpp_p' style='margin-top:13%;'>
								<?php echo  get_post_meta( $post->ID , 'lpp_main_content' , true ); ?>
							</p>
							<ul class='lpp_p'>
								<li class='lpp_p'><?php echo  get_post_meta( $post->ID , 'lpp_feature_1' , true ); ?></li>
					            <li class='lpp_p'><?php echo  get_post_meta( $post->ID , 'lpp_feature_2' , true ); ?></li>
					            <li class='lpp_p'><?php echo  get_post_meta( $post->ID , 'lpp_feature_3' , true ); ?></li>
					            <li class='lpp_p'><?php echo  get_post_meta( $post->ID , 'lpp_feature_4' , true ); ?></li>
							</ul>
						</div>
					</div>
					<!--- lpp_section_2 ENDS HERE!  -->
					<div id="lpp_section_3" class="lpp_section">
						<div id="lpp_testimonial_left">
							<p class="lpp_p" id="testimonial_text">
              					<?php echo  get_post_meta( $post->ID , 'lpp_testimonial_left_content' , true ); ?>
             				</p>
             				<p style="font-size:15px; margin-left:10%;" id="testimonial_text">
             				  <?php echo  get_post_meta( $post->ID , 'lpp_testimonial_left_content_author' , true ); ?></p>
						</div>
						<div id="lpp_testimonial_right">
							<p class="lpp_p" id="testimonial_text" >
				              <?php echo  get_post_meta( $post->ID , 'lpp_testimonial_right_content' , true ); ?>
				            </p>
				            <p style="font-size:15px; margin-left:10%;" id="testimonial_text">
              					<?php echo  get_post_meta( $post->ID , 'lpp_testimonial_right_content_author' , true ); ?></p>
						</div>
						<div id="lpp_benefit_left">
							<h2 class="lpp_h2" id="benefit_h2">
				              <?php echo  get_post_meta( $post->ID , 'lpp_benefit_1_content_title' , true ); ?>
				           </h2>
				           <p class="lpp_p" id="benefit_text">
				           	  <?php echo  get_post_meta( $post->ID , 'lpp_benefit_1_content' , true ); ?>
				           </p>
						</div>
						<div id="lpp_benefit_right">
							<h2 class="lpp_h2" id="benefit_h2">
				              <?php echo  get_post_meta( $post->ID , 'lpp_benefit_2_content_title' , true ); ?>
				            </h2>
				            <p class="lpp_p" id="benefit_text">
				              <?php echo  get_post_meta( $post->ID , 'lpp_benefit_2_content' , true ); ?>
				            </p>
						</div>
						<div id="lpp_footer">
					         <h2 id="lpp_f_h2" class="lpp_h2"><?php echo  get_post_meta( $post->ID , 'lpp_final_sub_h2' , true ); ?></h2>
        						<a  href ="<?php echo  get_post_meta( $post->ID , 'lpp_cta_url' , true ); ?> ">
        							
        							<button id="lpp_cta" style="width:100%;height:60%; margin-top:0;font-size:21px;">
        							<h2  class='lpp_h2'><?php echo  get_post_meta( $post->ID ,'lpp_final_cta', true ); ?>
        							</h2>
        						 	</button>
        						</a>
						</div>
							</div>
			<!--- lpp_section_3 ENDS HERE!  -->
			</div>
		</div>
	</body>
</html>