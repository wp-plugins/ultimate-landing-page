<?php

function lpp_main_front_end_settings($post){
	//
	//  Background Colors 
	//
	$lpp_content_bg = get_post_meta($post->ID,'lpp_content_bg',true); //Section -1
	$lpp_testimonial_bg = get_post_meta($post->ID,'lpp_testimonial_bg',true); //Section --2
	$lpp_benefit_bg = get_post_meta($post->ID,'lpp_benefit_bg',true); //Section -3
	$lpp_cta_bg = get_post_meta($post->ID,'lpp_cta_bg',true); 


	$lpp_body_bg = get_post_meta($post->ID,'lpp_body_bg',true);
	$lpp_center_bg = get_post_meta($post->ID,'lpp_center_bg',true);
	$lpp_f_header_bg = get_post_meta($post->ID,'lpp_f_header_bg',true);
	$lpp_header_bg = get_post_meta($post->ID,'lpp_header_bg',true);

	//
	//  Text Colors 
	//
	$lpp_h1_c = get_post_meta($post->ID,'lpp_h1_c',true);
	$lpp_h2_c = get_post_meta($post->ID,'lpp_h2_c',true);
	$lpp_content_c = get_post_meta($post->ID,'lpp_content_c',true);
	$lpp_cta_c = get_post_meta($post->ID,'lpp_cta_c',true);



		//Disabled
	$lpp_testimonial_c = get_post_meta($post->ID,'lpp_testimonial_c',true);
	$lpp_benefit_h2_c = get_post_meta($post->ID,'lpp_benefit_h2_c',true);
	$lpp_benefit_c = get_post_meta($post->ID,'lpp_benefit_c',true);
	$lpp_f_h2_c = get_post_meta($post->ID,'lpp_f_h2_c',true);
	


	////  NONCE FIELD ///////

	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

?>
		
		
	<style type="text/css">
	.formLayout_1
    {

        
        padding: 10px;
        width: 550px;
        margin: 10px;
        height: 950px;




        

    }
    
    .formLayout_1 label 
    {
        display: block;
        width: 195px;
        float: left;
        margin-bottom: 20px;
        margin-left: 20px;
    }
    .formLayout_1 input{
         display: block;
        float: left;
        margin-bottom: 20px;

    }
 
    .formLayout_1 label
    {
        text-align: right;
        padding-right: 20px;
        font-size: 16px;
        font-weight: bold;
    }
 
    br
    {
        clear: left;
    }

	</style>

<div class='formLayout_1'> 	
<h2>Background Colors</h2>

	 <br>
	 <br>
	 <label for='lpp_content_bg'>Section-1 Background Color : </label>
	 <input type='text' class='color_picker' name='lpp_content_bg' value='<?php echo $lpp_content_bg; ?>'/>
	 <br>
	 <br>
	 <label for='lpp_testimonial_bg'>Section-2 Background Color : </label>
	 <input type='text' class='color_picker' name='lpp_testimonial_bg' value='<?php echo $lpp_testimonial_bg; ?>'/>
	 <br>
	 <br>
	 <label for='lpp_benefit_bg'>Section-3 Background Color : </label>
	 <input type='text' class='color_picker' name='lpp_benefit_bg' value='<?php echo $lpp_benefit_bg; ?>'/>
	 <br>
	 <br>
	 <label for='lpp_cta_bg'>CTA Background Color : </label>
	 <input type='text' class='color_picker' name='lpp_cta_bg' value='<?php echo $lpp_cta_bg; ?>'/>

	 <br>
	 <br>

	 <h2>Text Color</h2>
	 <br>
	 <label for='lpp_h1_c'>Primary Heading Color : </label>
	 <input type='text' class='color_picker' name='lpp_h1_c' value='<?php echo $lpp_h1_c; ?>'/>
	 <br>
	 <br>
	 <label for='lpp_h2_c'>Sub Heading Color : </label>
	 <input type='text' class='color_picker' name='lpp_h2_c' value='<?php echo $lpp_h2_c; ?>'/>
	 <br>
	 <br>
	 <label for='lpp_content_c'>Content Text Color : </label>
	 <input type='text' class='color_picker' name='lpp_content_c' value='<?php echo $lpp_content_c; ?>'/>
	 <br>
	 <br>
	 <label for='lpp_cta_c'>Call To Action Color : </label>
	 <input type='text' class='color_picker' name='lpp_cta_c' value='<?php echo $lpp_cta_c; ?>'/>
	 <br>
 	 <br>

</div>

<div style='width:95%;margin-left:2.5%; text-align:center; background:#e3e3e3;height:60px;border-left:5px solid #a7d142;'>
 <?php submit_button('Update');?>
</div>





<?php


}
?>