<?php
/**
 * configuration-manager metadata for the battlehorse template
 * 
 * @author:	Louis Wolf <mail@louiswolf.nl>
 */

$meta['btl_hide_user_actions'] = array('onoff');
$meta['btl_hide_page_actions'] = array('onoff');
$meta['btl_hide_wiki_actions'] = array('onoff');
$meta['btl_default_user_actions_status'] = array('multichoice','_choices' => array('open','closed'));
$meta['btl_default_page_actions_status'] = array('multichoice','_choices' => array('open','closed'));
$meta['btl_default_wiki_actions_status'] = array('multichoice','_choices' => array('open','closed'));
$meta['btl_language'] = array('multichoice', '_choices' => array('cs', 'de','en', 'es', 'fr', 'it','nl','ru')); 
?>
