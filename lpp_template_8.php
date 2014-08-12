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
		margin: 0;
		padding: 0;
		width: 100%;
		min-width: 900px;
		height: 100%;
		text-align: center;
		background-image: url("<?php echo get_post_meta($post->ID,'lpp_add_img_2',true); ?>");
		background-size: cover;
	}
	.lpp_section{
		margin: 5% 25% 10% 25%;

	}
	#lpp_logo{
		width: 450px;
		height: 60px;
		text-align: center;
	}
	#lpp_content{
		width: 450px;
		height: 750px;
		text-align: center;
		background: #fff;
		-webkit-box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		-moz-box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
	}
	.lpp_h1{
		margin: 50px 40px 10px 45px;
		font-weight: 100;
		font-family: arial;
		font-size: 36px;
		font-size: 2.8rem;
		text-align: left;
		color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
	}
	.lpp_p{
		margin: 5px 40px 10px 45px;
		text-align: left;
		font-weight: 100;
		font-family: arial;
		font-size: 19px;
		line-height: 1.5;
		font-size: 1.2rem;
		color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
	}

	.lpp_input{
		width: 370px;
		margin: 20px 0px -15px 0px;
		height: 45px;
		font-size: 22px;
	}
	#lpp_submit{
		border: none;
		height: 50px;
		color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
		background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;

	}
	


	</style>

</head>
<body>
	
	<div id='lpp_section_1' class='lpp_section'>
		<div id='lpp_content'>

			<div id='lpp_logo'>
		<img src="<?php echo get_post_meta($post->ID,'lpp_logo_url',true); ?>">
			</div>
			<h1 class='lpp_h1'>
				<?php echo  get_post_meta( $post->ID , 'lpp_main_h1' , true ); ?>
			</h1>
			<p class='lpp_p'>
				<?php echo  get_post_meta( $post->ID , 'lpp_main_content' , true ); ?>
			</p>
			<form   method='post' id='lpp_form' action='<?php echo plugins_url('mcapi_listSubscribe.php',__FILE__); ?>'>
				<input type='hidden' value='<?php echo get_post_meta($post->ID,'lpp_mailchimp_apikey',true); ?>' name='lpp_ki'>
				<input type='hidden' value='<?php echo get_post_meta($post->ID,'lpp_mailchimp_listid',true); ?>' name='lpp_ed'>
				<p><input type='email' name='lpp_email' class='lpp_input' placeholder='Email'></p>
				<p><button type='submit' id='lpp_submit' value='Get Notified' class='lpp_input'>
					<?php echo  get_post_meta( $post->ID , 'lpp_main_cta' , true ); ?>
				</button></p>
			</form>
	</div>
</div>


	
</body>
</html>