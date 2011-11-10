<?php
/*
 * Created on 2011/11/09 by nao-pon http://xoops.hypweb.net/
 * $Id: k_tai_conf.php,v 1.1 2011/11/10 12:31:33 nao-pon Exp $
 */

$config[] = array(
	'name' => 'ua_regex',
	'title' => $constpref.'_UA_REGEX',
	'description' => $constpref.'_UA_REGEX_DESC',
	'formtype' => 'textarea',
	'valuetype' => 'text',
	'size' => 80
	);
$config[] = array(
	'name' => 'jquery_profiles',
	'title' => $constpref.'_JQUERY_PROFILES',
	'description' => $constpref.'_JQUERY_PROFILES_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'text'
	);
$config[] = array(
	'name' => 'jquery_theme',
	'title' => $constpref.'_JQUERY_THEME',
	'description' => $constpref.'_JQUERY_THEME_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'options' => array('a','b','c','d','e','f','g','h')
	);
$config[] = array(
	'name' => 'jquery_theme_content',
	'title' => $constpref.'_JQUERY_THEME_CONTENT',
	'description' => $constpref.'_JQUERY_THEME_CONTENT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'options' => array('a','b','c','d','e','f','g','h')
	);
$config[] = array(
	'name' => 'jquery_theme_block',
	'title' => $constpref.'_JQUERY_THEME_BLOCK',
	'description' => $constpref.'_JQUERY_THEME_BLOCK_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'options' => array('a','b','c','d','e','f','g','h')
	);
$config[] = array(
	'name' => 'disabledBlockIds',
	'title' => $constpref.'_DISABLEDBLOCKIDS',
	'description' => $constpref.'_DISABLEDBLOCKIDS_DESC',
	'formtype' => 'check',
	'valuetype' => 'array',
	'options' => 'blocks',
	//'width' => '10em'
	);
$config[] = array(
	'name' => 'limitedBlockIds',
	'title' => $constpref.'_LIMITEDBLOCKIDS',
	'description' => $constpref.'_LIMITEDBLOCKIDS_DESC',
	'formtype' => 'check',
	'valuetype' => 'array',
	'options' => 'blocks'
	);
$config[] = array(
	'name' => 'showBlockIds',
	'title' => $constpref.'_SHOWBLOCKIDS',
	'description' => $constpref.'_SHOWBLOCKIDS_DESC',
	'formtype' => 'check',
	'valuetype' => 'array',
	'options' => 'blocks'
	);