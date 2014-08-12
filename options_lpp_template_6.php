<html>
	<head>
		<style type="text/css">
		body{
			width: 100%;
			min-width:1050px;
			height: 980px;
			text-align: center;
		}
		.lpp_section{
			width: 100%;
			max-width:1480px; 
			min-height: 550px;
			display: inline-block;
			text-align: center;
			border: 2px solid black;
		}
		.lpp_h1{
			font-size: 36px;
			font-size: 2.4rem;
			font-family: 'museo-slab', sans-serif;
			color: #333333;
			margin-top: 5%;

		}
		.lpp_h2{
			font-size: 28px;
			font-size: 1.6rem;
			font-family: 'museo-slab', sans-serif;
			color: #333333;
		}
		.lpp_p{
			color: #333333;
			line-height: 1.5;
			font-size: 1.125rem;
			font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
		}
		#lpp_logo{
			height: 60px;
			border: 1px solid red;
			margin: 10px;
		}
		#lpp_hero_shot{
			width:800px;
			height: 450px;
			border: 2px solid red;
			margin-top: 3%;
		}
		#lpp_sub_sect2_left{
			width:58%;
			float: left;
			border: 2px solid blue;
		}
		#lpp_sub_sect2_left > p{
			margin:0 30px 10px 30px;
		}
		#lpp_feature_list{
			float: left;
			margin-left: 10%;
		}
		#lpp_sub_sect2_right{
			width:41%;
			float:left;
			border: 2px solid blue;
		}
		#lpp_sub_sect3_left{
			width:48%;
			float: left;
			border: 2px solid blue;
		}
		#lpp_sub_sect3_right{
			width:48%;
			float: left;
			border: 2px solid blue;
		}

		.lpp_input{
			width:60%;
			height:40px;
			margin-left:20px;
			margin-top:10px;
			font-size: 18px;
			font-family: verdana;
			color: #565656;  
		}
		#lpp_cta{
			
			margin-left:80px;
			margin-top: 20px;  
			width:60%;
			height:50px;
			border: none;
			background: #e3e3e3;
			font-size: 22px;
			color: black;

		}
		#lpp_sub_sect2_right{
			background: #b8e547;
			height: 400px;
		}



		</style>
	</head>
	<body>
		<div id='lpp_section_1' class='lpp_section'>
			<div id='lpp_logo'>
				<input type='url'  style=' font-size:19px; text-align:center;width:200px;height50px;' name='lpp_logo_url' placeholder='Logo URL' value='<?php echo $lpp_logo_url; ?>'>
			</div>
			<input type='text' name='lpp_add_img_1' placeholder='Featured image url' style='font-size:17px; text-align:center;width:80%;height:25%;' value='<?php echo $lpp_add_img_1 ;?>' >
			<embed src=''id='lpp_hero_shot'>
			<h1 class='lpp_h1'>
				<input type='text' style='font-size:28px;text-align:center;width:70%; height:20%; border:1px dashed black;' name='lpp_main_h1' placeholder='Your Primary Heading' value='<?php echo $lpp_main_h1; ?>'>
			</h1>
		</div>
		<div id='lpp_section_2' class='lpp_section'>
			<div id='lpp_sub_sect2_left'>
				 <?php
				 	$settings = array('media_buttons'=> false,'lpp_main_content','textarea_rows' => 14);
				    wp_editor($lpp_main_content,'lpp_main_content',$settings);

  
  				 ?>
				
			</div>
			<div id='lpp_sub_sect2_right'>
				<h2 class='lpp_h2'>Subscribe Now</h2>
				<p class='lpp_p'>Some Text to Support your Copy</p>
				<form id='lpp_form'>
					<p class='lpp_p'>Name  :    <input type='text' id='lpp_name' class='lpp_input'></p>
					<p class='lpp_p'>Email  :  <input type='text' id='lpp_email' class='lpp_input'></p>
					<button disabled type='submit' id='lpp_cta'>
						<input type='text' style='font-size:20px;text-align:center;width:90%; border:1px dashed black;' name='lpp_main_cta' placeholder='Call To Action Text' value='<?php echo $lpp_main_cta; ?>'>
					</button>
				</form>
			</div>
		</div>
		<div id='lpp_section_3' class='lpp_section'>
			<div id='sub_sect3_full'>
				<h2 class='lpp_h2'>
					<textarea type='text' style='font-size:18px;text-align:center;width:75%; height:90px; border:1px dashed black;' name='lpp_testimonial_left_content' placeholder='Testimonial Content' value='<?php echo $lpp_testimonial_left_content; ?>'><?php echo $lpp_testimonial_left_content; ?></textarea>
				</h2>
				<p class='lpp_p'><i>
					<input type='text' style='font-size:15px;text-align:center;width:40%; border:1px dashed black;' name='lpp_testimonial_left_content_author' placeholder='Author name ,Company Name' value='<?php echo $lpp_testimonial_left_content_author; ?>'>
				</i></p>
			</div>
			<div id='lpp_sub_sect3_left'>
				<?php
				 	$settings = array('media_buttons'=> false,'lpp_about_us','textarea_rows' => 13);
				    wp_editor($lpp_about_us,'lpp_about_us',$settings);

  
  				 ?>
			</div>
			<div id='lpp_sub_sect3_right'>
				<?php
				 	$settings = array('media_buttons'=> false,'lpp_contact_us','textarea_rows' => 13);
				    wp_editor($lpp_contact_us,'lpp_contact_us',$settings);
  
  				 ?>
			</div>
		</div>
	</body>
</html>