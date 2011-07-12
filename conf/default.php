<?php
/**
 * Options for the issuetracker plugin
 */

$conf['send_email']        = 0;                                                                  // Send email off by default 
$conf['email_address']     = 'email@yourdomain.com';                                             // Who will be informed about new issues ?
$conf['userinfo_email']    = 0;                                                                  // Send email off by default 
$conf['shwtbl_usr']        = 'id,product,version,severity,created,status,user,description,assigned,resolution,modified';                                                                  // Use captcha on by default 
$conf['use_captcha']       = 1;                                                                  // Use captcha on by default 
$conf['severity']          = 'Query,Minor,Medium,Major,Critical,Feature Request,';               // Configure allowed severities
$conf['status']            = 'New,Assigned,External Pending,In Progress,Solved,Canceled,Double'; // Configure allowed status info
$conf['products']          = 'ProdA, ProdB';                                                     // Configure Products coverd by one project
//$conf['versions']          = '1.0,1.5,2.0,2.5|1.0,1.5,2.0,2.5';                                  // Configure allowed versions of all defined products
$conf['assign']            = '1';                                                                // Configure groups usable for issue asignments
//Setup VIM: ex: et ts=2 enc=utf-8 :
