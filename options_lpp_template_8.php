<html>
<head>
	<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		text-align: center;
		
	}
	#lpp_wrapper8{
		width:100%;
		background: url('https://0.s3.envato.com/files/72353627/prev1-Abstract-Polygon-Background.jpg');  

	}
	.lpp_section{
		margin: 5% 25% 10% 25%;

	}
	#lpp_logo{
		width: 450px;
		height: 60px;
		text-align: center;
		border-bottom: 1px solid #d0d0d0;
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
		margin: 30px 40px 10px 45px;
		font-weight: 100;
		font-family: arial;
		font-size: 36px;
		font-size: 2.8rem;
		line-height: 1.2;
		text-align: left;
	}
	.lpp_p{
		margin: 5px 40px 10px 45px;
		text-align: left;
		font-weight: 100;
		font-family: arial;
		font-size: 19px;
		line-height: 1.5;
		font-size: 1.2rem;
	}

	.lpp_input{
		width: 370px;
		margin: 20px 0px -15px 0px;
		height: 40px;
		font-size: 22px;
	}
	#lpp_submit{
		background: #1bbc9b;
		color: #fff;
		border: none;
		height: 50px;
	}

	input{
		border: none;
	}
	input:hover,input:focus,textarea:hover,textarea:focus{
		border: 2px dashed black;
	}


	


	</style>

</head>
<body>
	<div id='lpp_wrapper8'>
		<input type='text' id='lpp_add_img_2' name='lpp_add_img_2' value='<?php echo $lpp_add_img_2; ?>' style='width:60%; font-size:18px; height:50px; text-align:center;' placeholder='Background Image URL'/>
	
		<div id='lpp_section_1' class='lpp_section'>
			<div id='lpp_content'>

				<div id='lpp_logo'>
					<input type='text'  style='text-align:center;width:90%;height:40px;' name='lpp_logo_url' placeholder='Logo URL' value='<?php echo $lpp_logo_url; ?>'>
				</div>
				<h1 class='lpp_h1'>
					<input type='text' id='lpp_main_h1' name='lpp_main_h1' value='<?php echo $lpp_main_h1; ?>' style='width:98%; font-size:20px; height:50px; text-align:center;' placeholder='This is your primary Headline'/>
				</h1>
				<p class='lpp_p'>
					<textarea name='lpp_main_content' id='lpp_main_content' value='<?php echo $lpp_main_content; ?>' style='width:100%; height:300px; text-align:center;' placeholder='Your content goes here!. It should be clear and explain your product.'><?php echo $lpp_main_content; ?></textarea>
				</p>
				<form>
					<p><input disabled type='email' name='lpp_email' class='lpp_input' placeholder='Email'></p>
					<p><button disabled type='submit' id='lpp_submit' value='Get Notified' class='lpp_input'> 
					<input type='text' id='lpp_main_cta' name='lpp_main_cta' value='<?php echo $lpp_main_cta; ?>' style='width:230px; height:35px; text-align:center;' placeholder='Call To Action Text'/>
					 </button></p>
				</form>
		</div>
	</div>
</div>

	
</body>
</html>