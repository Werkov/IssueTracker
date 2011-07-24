<?php
/**
 * Metadata for configuration manager plugin
 * Additions for the dokubugtracker plugin
 *
 * @author   Taggic@t-online.de 
 */

$meta['send_email']     = array('onoff');   // Send email off by default
$meta['email_address']  = array('string');  // Who will be informed about new issues ?      
$meta['userinfo_email'] = array('onoff');   // Send email off by default
$meta['shwtbl_usr']	    =	array('multicheckbox', '_choices' => array('product', 'version', 'severity', 'created', 'status', 'user', 'title', 'description', 'assigned', 'resolution', 'modified'));
$meta['use_captcha']    = array('onoff');   // Use captcha on by default
$meta['severity']       = array('string');  // Configure allowed severities
$meta['status']         = array('string');  // Configure allowed status info
$meta['products']       = array('string');  // Configure Products coverd by one project
//$meta['versions']       = array('string');// Configure allowed versions of defined products
$meta['assign']         = array('string');  // Configure groups usable for issue asignments
$meta['noStatIMG']      = array('onoff');   // define if status text instead of pictures will be displayed at Issue list
$meta['noSevIMG']       = array('onoff');   // define if severity text instead of pictures will be displayed at Issue list
//Setup VIM: ex: et ts=2 enc=utf-8 :
