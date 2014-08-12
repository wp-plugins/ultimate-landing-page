<html>
	<head>
		<style type="text/css">
		
		#body{

			width: 100%;

			height: 100%;
			margin: 0;
			padding: 0;
			display: inline-block;
		}

		.lpp_p{
			color: #333333;
			 line-height: 1.5; 
			 font-size: 1rem; 
			 font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
		}
		.lpp_h1{
			font-size: 36px; 
			font-size: 2.2rem;
			font-family: 'museo-slab', sans-serif;
			color: #333333;
		}
		.lpp_h2{
			font-size: 28px; 
			font-size: 1.75rem;
			font-family: 'museo-slab', sans-serif;
			color: #333333;
		}
		.lpp_section{
			max-width: 1248px;
			width: 100%;
			height: 80%;
			border: 2px solid black;
			display: inline-block;
		}
		#lpp_section_1{
			height: 65%;
			text-align: center;

		}
		#lpp_logo{
			margin-left: 35%;
			width: 30%;
			height: 25%;
			border: 1px solid black;

		}
		#main_feature_img{
			width: 85%;
			height: 50%;
			margin-top: 6%;
			border: 2px solid black;
			margin-left: 7.5%;

		}
		#lpp_primary_h1{
			margin-top: 10%;
		}
		#sub_sect2_left{
			height: 100%;
			width: 55%;
			border: 1px solid red;
			float: left;
		}
		#sub_sect2_left >h2,h4{
			margin-left: 5%;
			
		}
		#sub_sect2_right{
			height: 100%;
			width: 43%;
			border-radius: 25px;
			float: right;
			text-align: center;
		}
		#lpp_section_3{
			height: 40%;
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
		#lpp_submit{
			
		}


		</style>
	</head>
	<body>
	 <div id='lpp_section_1' class='lpp_section'>
	 	<header id='lpp_logo'>
	 		<input type='text'  style=' text-align:center;width:100%;height:15%;' name='lpp_logo_url' placeholder='Logo URL' value='<?php echo $lpp_logo_url; ?>'>
	 	</header>
	 	<div id='main_feature_img'>
	 	<input type='url' name='lpp_add_img_1' placeholder='Featured image url' style='font-size:17px; text-align:center;width:50%;height:45%;' value='<?php echo $lpp_add_img_1 ;?>' >
	 	<img src='<?php echo $lpp_add_img_1 ;?>' style='height:40%;width:90%;' >
	 	</div>
	 	<h1 id='lpp_primary_h1' class='lpp_h1'>
	 		<input type='text' style='font-size:22px;text-align:center;width:70%; height:25%; border:1px dashed black;' name='lpp_main_h1' placeholder='Your Primary Heading' value='<?php echo $lpp_main_h1; ?>'>
	 	</h1>
	 	<h2 id='lpp_sub_h2' class='lpp_h2'>
	 		<input type='text' style='font-size:18;text-align:center;width:90%; height:25%; border:1px dashed black;' name='lpp_sub_h2' placeholder='Your Sub Heading' value='<?php echo $lpp_sub_h2; ?>'>

	 	 </h2>
	 </div>
	 <div id='lpp_section_2' class='lpp_section'>
	 	<div id='sub_sect2_left'>
	 		<h2 id='lpp_feature_h2' class='lpp_h2'>
	 			<input type='text' style='font-size:18px;text-align:center;width:90%; border:1px dashed black;' name='lpp_benefit_sect_title' placeholder='Benefit Section Title' value='<?php echo $lpp_benefit_sect_title; ?>'>
	 		</h2>
	 		<h4 id='lpp_sub_feature' class='lpp_p' style='font-size:16px;'><b>
	 			<input type='text' style='font-size:16px;text-align:center;width:95%; border:1px dashed black;' name='lpp_benefit_sect_sub_title' placeholder='Short explaination' value='<?php echo $lpp_benefit_sect_sub_title; ?>'>
	 		</b></h4>
	 		<div id='lpp_benefit' style='margin-left:5%;'>
	 		<h3 class='lpp_h2' style='font-size:19px;'>
	 			<input type='text' style='font-size:18px;text-align:center;width:80%; border:1px dashed black;' name='lpp_benefit_1_content_title' placeholder='Your awesome benefit title' value='<?php echo $lpp_benefit_1_content_title; ?>'>
	 		</h3>
	 		<p id='lpp_benefit_text' class='lpp_p'>
	 			<textarea type='text' style='font-size:14px;text-align:center;width:75%; border:1px dashed black;' name='lpp_benefit_1_content' placeholder='Your awesome benefit description' value='<?php echo $lpp_benefit_1_content; ?>'><?php echo $lpp_benefit_1_content; ?></textarea>
	 		</p>
	 		<h3 class='lpp_h2' style='font-size:19px;'>
	 			<input type='text' style='font-size:18px;text-align:center;width:80%; border:1px dashed black;' name='lpp_benefit_2_content_title' placeholder='Your awesome benefit title' value='<?php echo $lpp_benefit_2_content_title; ?>'>
	 		</h3>
	 		<p id='lpp_benefit_text' class='lpp_p'>
	 			<textarea type='text' style='font-size:14px;text-align:center;width:75%; border:1px dashed black;' name='lpp_benefit_2_content' placeholder='Your awesome benefit description' value='<?php echo $lpp_benefit_2_content; ?>'><?php echo $lpp_benefit_2_content; ?></textarea>
	 		</p>
	 		<h3 class='lpp_h2' style='font-size:19px;'><input type='text' style='font-size:18px;text-align:center;width:80%; border:1px dashed black;' name='lpp_benefit_3_content_title' placeholder='Your awesome benefit title' value='<?php echo $lpp_benefit_3_content_title; ?>'>
	 		</h3>
	 		<p id='lpp_benefit_text' class='lpp_p'><textarea type='text' style='font-size:14px;text-align:center;width:75%; border:1px dashed black;' name='lpp_benefit_3_content' placeholder='Your awesome benefit description' value='<?php echo $lpp_benefit_3_content; ?>'><?php echo $lpp_benefit_3_content; ?></textarea></p>
	 		</div>
	 	</div>
	 	<div id='lpp_pointer'></div>
	 	<div id='sub_sect2_right'>
	 		<div id='lpp_form'>
	 			<h2 id='lpp_form_h2' class='lpp_h2'>
	 				<input type='text' style='font-size:18px;text-align:center;width:70%; border:1px dashed black;' name='lpp_form_h2' placeholder='Form Heading' value='<?php echo $lpp_form_h2; ?>'>
	 			</h2>
	 			<p id='lpp_sub_form_h' class='lpp_p'><b><input type='text' style='font-size:15px;text-align:center;width:90%; border:1px dashed black;' name='lpp_form_sub_h2' placeholder='Some expalaination' value='<?php echo $lpp_form_sub_h2; ?>'></b></p>
	 			<hr>
	 			<form id='lpp_form'>
	 				<input type='text' name='lpp_name' placeholder='Name' id='lpp_input_name' class='lpp_input'>
	 				<br>
	 				<input type='email' name='lpp_name' placeholder='E-mail' id='lpp_input_email' class='lpp_input'>
	 				<br>
	 				<button disabled type='submit' class='lpp_input' >
	 					<input type='text' style='font-size:20px;text-align:center;width:70%; border:1px dashed black;' name='lpp_main_cta' placeholder='Call To Action Text' value='<?php echo $lpp_main_cta; ?>'>
	 				</button>

	 			</form>
	 		</div>
	 	</div>
	 </div>
	 <div id='lpp_section_3' class='lpp_section'>
	 	<h2 id="lpp_testimonial" class="lpp_h2">
	 		<textarea type='text' style='font-size:18px;text-align:center;width:65%; border:1px dashed black;' name='lpp_testimonial_left_content' placeholder='Testimonial Content' value='<?php echo $lpp_testimonial_left_content; ?>'><?php echo $lpp_testimonial_left_content; ?></textarea>
	 	</h2>
	 	<p id='lpp_testimonial_author' class='lpp_p'><i>
	 		<input type='text' style='font-size:15px;text-align:center;width:40%; border:1px dashed black;' name='lpp_testimonial_left_content_author' placeholder='Author name ,Company Name' value='<?php echo $lpp_testimonial_left_content_author; ?>'>
	 	</i></p>

	 </div>
	</body>
</html>