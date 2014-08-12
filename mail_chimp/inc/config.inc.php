<?php
    //API Key - see http://admin.mailchimp.com/account/api
    //$apikey = '334c364e7b07e686e23b71913d228b42-us8';
    require_once 'lpp_mail_chimp_int.php';
    
    $apikey = get_post_meta($post->ID,'lpp_mailchimp_listid',true);
    

      
    // A List Id to run examples against. use lists() to view all
    // Also, login to MC account, go to List, then List Tools, and look for the List ID entry
    $listId = 'a8986ed734';
    
    // A Campaign Id to run examples against. use campaigns() to view all
    $campaignId = 'YOUR MAILCHIMP CAMPAIGN ID - see campaigns() method';

    //some email addresses used in the examples:
    $my_email = 'umarbajwa@ymail.com';
    $boss_man_email = 'INVALID@example.com';

    //just used in xml-rpc examples
    $apiUrl = 'http://api.mailchimp.com/1.3/';
    
?>
